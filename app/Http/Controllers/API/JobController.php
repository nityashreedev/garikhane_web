<?php 

namespace App\Http\Controllers\API;
use App\Models\MobileUserAuth;
use App\Models\UserJob;
use App\Models\Job;
use App\Models\User;
use App\Models\MobileUser;
use App\Mail\JobCreate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Libraries\PushNotificationLibrary;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    public function index(Request $request)
    {
        /*
         * url:{{live}}/api/jobs
         * params: auth_token
         * method: get
         *
         * */
        $job = Job::orderBy('created_at','desc')->take(10)->get();
         if($request->page == 1)
                {
                     $job = Job::orderBy('created_at','desc')->where('status', 1)->take(10)->get();
                }
             elseif($request->page != 1){
                     $skip = 10 * $request->page -10;
                    $job = Job::orderBy('created_at','desc')->where('status', 1)->skip($skip)->take(10)->get();
                     if( count($job) < 1){
 
                        $response = [
                        'status' => 200,
                        'error' => false,
                        'message' => 'no more jobs',
                        'data' => []
                        ];
                        echo json_encode($response);
                        exit();
                    }
 
             }

        if($job) {
            $jobs = [];

            foreach ($job as $item) {
                $jobs[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'description' => strip_tags($item->description),
                    'image' =>url('images/job/'.$item->image),
                    'location'=>$item->location,
                ];
            }

            $response = [
                'data' => $jobs,
                'status' => 200,
                'error' => false,
                'message' => 'Job List'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no job added'
            ];
        }

        echo json_encode($response);
        exit;
    }
     public function jobdetail(Request $request)
    {
        /*
         * url:{{live}}/api/job/detail
         * params: job_id
         * method: get
         *
         * */
        if(!is_null($request->auth_token))
        {
            $user_auth = MobileUserAuth::where('auth_token', $request->auth_token)->first();
            if($user_auth)
            {
                $user_id = $user_auth->user_id;
                $applied =  UserJob::where(['user_id'=>$user_id, 'job_id'=>$request->job_id])->first();
                if($applied)
                {
                    $applied = 'true';
                }else
                {
                    $applied = 'false';
                }
            }else
            {
                $applied = 'false';
            }
        }else
        {   
            $applied = 'false';
            
        }
        $job = Job::findOrFail($request->job_id);

        if($job) {

                $jobs[] = [
                    'id' =>$job->id,
                    'title' => $job->title,
                    'description' => $job->description,
                    'vacancy' =>$job->vacancy,
                    'location'=>$job->location,
                    'date' =>$job->date,
                    'image' =>url('images/job/'.$job->image),
                    'salary'=>$job->salary,
                    'applied'=>$applied,
                ];
          

            $response = [
                'data' => $jobs,
                'status' => 200,
                'error' => false,
                'message' => 'Job Detail'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Req'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
     public function jobapplyuserstore(Request $request )
    {
         /*
         * url:{{live}}/api/job/user/apply
         * params: job_id,text,file,auth_token
         * method: post
         *
         * */
        $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $userapply = new UserJob();
        $userapply->text = $request->text;
        $userapply->user_id = $userid;
        $userapply->job_id = $request->job_id;
        
        $userapply->type = 'mobile';
       if($file = $request->file('file')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/jobapplicant/');
            
                if($file->move($target_path, $name)) {
                    $userapply->file  = $name;
                }
            }
        $userapply->save();
         $response = [
                'status' => 200,
                'error' => false,
                'message' => 'Applied Successfully'
            ];
        
         echo json_encode($response);
        exit;
    }
    
    public function getusercreatedjobs(Request $request)
    
    {
         /*
         * url:{{live}}/api/job/provider/joblist
         * params:auth_token,page
         * method: get
         *
         * */
         $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $jobscreated = Job::where('type','mobile')->where('creator_id',$userid)->get();
        if($request->page == 1)
                {
                     $jobscreated = Job::where('type','mobile')->where('creator_id',$userid)->take(10)->get();
                }
             elseif($request->page != 1){
                     $skip = 10 * $request->page -10;
                    $jobscreated = Job::where('type','mobile')->where('creator_id',$userid)->skip($skip)->take(10)->get();
                     if( count($jobscreated) < 1){
 
                        $response = [
                        'status' => 200,
                        'error' => false,
                        'message' => 'no more jobs',
                        'data' => []
                        ];
                        echo json_encode($response);
                        exit();
                    }
 
             }

        if($jobscreated) {
            $jobscreateds = [];

            foreach ($jobscreated as $item) {
                $status = '';
                switch($item->status)
                {
                    case 0;
                     $status = 'Pending';
                     break;
                     case 1 ;
                     $status = 'Accept';
                     break;
                     case 2 ;
                     $status = 'Reject';
                     break;
                     
                    
                }
                $jobscreateds[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'description' => strip_tags($item->description),
                     'vacancy' => $item->vacancy,
                      'salary' => $item->salary,
                    'image' =>url('images/job/'.$item->image),
                    'location'=>$item->location,
                    'date' =>$item->date,
                    'status' =>$status,
                ];
            }

            $response = [
                'data' => $jobscreateds,
                'status' => 200,
                'error' => false,
                'message' => 'Job List'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no job added'
            ];
        }

        echo json_encode($response);
        exit;
    }
   
    
    public function userjobstore(Request $request)
    {
      /*
         * url:{{live}}/api/job/provider/create/job
         * params:auth_token,title,location,description,date,salary,vacancy,image
         * method: post
         *
         * */
      $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'sometimes|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' =>'required'
      ]);
       if ($validator->fails()) {
            $response = [
                'status'=>402,
                'error'=>true,
                'message'=>$validator->messages(),
            ];
            return response()->json($response);
       }
       
        $job = new Job();
        $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $job->creator_id =$userid;
        $job->status =0;
        $job->type="mobile";
        $job->title = $request->get('title');
        $job->location = $request->get('location');
        $job->description = $request->get('description');
        $job->date = $request->get('date');
        $job->salary = $request->get('salary');
        $job->vacancy = $request->get('vacancy');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/job/');
           
                if($file->move($target_path, $name)) {
                    $job->image  = $name;
                }
            }
           
        $job->save();
         
          $response = [
                'status' => 200,
                'error' => false,
                'message' => 'Job created'
            ];
            echo json_encode($response);
        exit;
    }
     public function userjobupdate(Request $request)
    {
        /*
         * url:{{live}}/api/job/provider/update/job
         * params:auth_token,title,location,description,date,salary,vacancy,image,job_id
         * method: post
         *
         * */
        $request->validate([
            'title' => 'required',
            'description' =>'required'
        ]);
       $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $job = Job::findOrFail($request->job_id);
        $job->creator_id =$userid;
        $job->status =0;
        $job->type="mobile";
        $job->title = $request->get('title');
        $job->location = $request->get('location');
        $job->description = $request->get('description');
        $job->date = $request->get('date');
        $job->salary = $request->get('salary');
        $job->vacancy = $request->get('vacancy');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/job/');
           
                if($file->move($target_path, $name)) {
                    $job->image  = $name;
                }
            }
           
        $job->update();
         
         $response = [
                'status' => 200,
                'error' => false,
                'message' => 'Job Updated'
            ];
            echo json_encode($response);
        exit;
    }
    public function userjobdelete(Request $request)
    {
         /*
         * url:{{live}}/api/job/provider/delete/job
         * params:auth_token,job_id
         * method: get
         *
         * */
        $jobs =Job::findOrFail($request->job_id);
        $jobs->delete();
       $response = [
                'status' => 200,
                'error' => false,
                'message' => 'Job Deleted'
            ];
            echo json_encode($response);
        exit;
        
    }
    
    public function jobinteresteduser(Request $request)
    {
         /*
         * url:{{live}}/api/job/provider/jobinteresteduser
         * params:auth_token,job_id
         * method: get
         *
         * */
         
        $interested = [];
        $allwebuser = [];

        $webintersted = UserJob::where('job_id',$request->job_id)->where('type','web')->get();
        if($webintersted){
            foreach($webintersted as $web)
            {
                $allwebuser[] = [
                   'name' => $web->user->fname .''. $web->user->lname,
                   'email' =>$web->user->email,
                   'file' =>url('images/jobapplicant/'.$web->file)
                ];
            }
        }
        
        $allmobuser = [];
        $mobintersted = UserJob::where('job_id',$request->job_id)->where('type','mobile')->get();
        
        if($mobintersted){
            foreach($mobintersted as $mob)
            {
                $mobileuser = User::findOrFail($mob->user_id);
                $allmobuser[] =
                [
                    'name' => $mobileuser->fname .''. $mobileuser->lname,
                    'email' =>$mobileuser->email,
                    'file' =>url('images/jobapplicant/'.$mob->file)
                 ];;
            }
        }
      
        $interested = array_merge($allwebuser ,$allmobuser);
        $response = [
                'data' =>$interested,
                'status' => 200,
                'error' => false,
                'message' => 'Job interested list'
            ];
            echo json_encode($response);
        exit;
    }

    // get jobs by filter
    public function jobFilter(Request $request)
    {
        /*api: {{url}}/api/jobs-filter
        params: date, key, location, page,(all_optional)
        method:get*/

          if($request->page == 1)
          {
            if (!empty($_GET['date']) && !empty($_GET['key']) && !empty($_GET['location'])) {
                $jobs = Job::whereDate('created_at', '=', $_GET['date'])
                ->Where(function ($query) {
                    $query->where('location', $_GET['location'])
                    ->where(['status'=>1, 'publish'=>1])
                    ->orWhere  ( 'title', 'LIKE', '%' . $_GET['key'] . '%' );
                })->take(10)->get();
            } 

            elseif (!empty($_GET['date']) && !empty($_GET['key'])) {
                $jobs = Job::whereDate('created_at', '=', $_GET['date'])
                ->where(['status'=>1, 'publish'=>1])
                ->Where(function ($query) {
                    $query->orWhere( 'title', 'LIKE', '%' . $_GET['key'] . '%' );
                })->take(10)->get();
            } 
            elseif (!empty($_GET['key']) && !empty($_GET['location'])) {
                $jobs = Job::where('location', $_GET['location'])
                ->where(['status'=>1, 'publish'=>1])
                ->Where(function ($query) {
                    $query->orWhere( 'title', 'LIKE', '%' . $_GET['key'] . '%' );

                })->take(10)->get();
            }  
            elseif (!empty($_GET['date']) && !empty($_GET['location'])) {
                $jobs = Job::where('location', $_GET['location'])
                ->where(['status'=>1, 'publish'=>1])
                ->Where(function ($query) {
                    $query->whereDate('created_at', '=', $_GET['date']);

                })->take(10)->get();
            }  

            elseif (!empty($_GET['date'])) {
                $jobs = Job::whereDate('created_at', '=', $_GET['date'])->where(['status'=>1, 'publish'=>1])->take(10)->get();
            } elseif (!empty($_GET['key'])) {

                $jobs = Job::where( 'title', 'LIKE', '%' . $_GET['key'] . '%' ) ->where(['status'=>1, 'publish'=>1])->take(10)->get();
            } elseif(!empty($_GET['location'])) {
                $jobs = Job::where('location','LIKE', '%' . $_GET['location'] . '%' ) ->where(['status'=>1, 'publish'=>1])->take(10)->get();
            }
            else
            {
                $jobs = Job::orderBy('created_at','desc')->where(['status'=>1, 'publish'=>1])->take(10)->get();
            }        
        }elseif($request->page != 1){
            $skip = 10 * $request->page -10;

            if (!empty($_GET['date']) && !empty($_GET['key']) && !empty($_GET['location'])) {
                $jobs = Job::whereDate('created_at', '=', $_GET['date'])
                ->Where(function ($query) {
                    $query->where('location', $_GET['location'])
                    ->where(['status'=>1, 'publish'=>1])
                    ->orWhere  ( 'title', 'LIKE', '%' . $_GET['key'] . '%' );
                })->skip($skip)->take(10)->get();
            } 

            elseif (!empty($_GET['date']) && !empty($_GET['key'])) {
                $jobs = Job::whereDate('created_at', '=', $_GET['date'])
                ->where(['status'=>1, 'publish'=>1])
                ->Where(function ($query) {
                    $query->orWhere( 'title', 'LIKE', '%' . $_GET['key'] . '%' );
                })->skip($skip)->take(10)->get();
            } 
            elseif (!empty($_GET['key']) && !empty($_GET['location'])) {
                $jobs = Job::where('location', $_GET['location'])
                ->where(['status'=>1, 'publish'=>1])
                ->Where(function ($query) {
                    $query->orWhere( 'title', 'LIKE', '%' . $_GET['key'] . '%' );

                })->skip($skip)->take(10)->get();
            }  
            elseif (!empty($_GET['date']) && !empty($_GET['location'])) {
                $jobs = Job::where('location', $_GET['location'])
                ->where(['status'=>1, 'publish'=>1])
                ->Where(function ($query) {
                    $query->whereDate('created_at', '=', $_GET['date']);

                })->skip($skip)->take(10)->get();
            }  

            elseif (!empty($_GET['date'])) {
                $jobs = Job::whereDate('created_at', '=', $_GET['date'])->where(['status'=>1, 'publish'=>1])->skip($skip)->take(10)->get();
            } elseif (!empty($_GET['key'])) {

                $jobs = Job::where( 'title', 'LIKE', '%' . $_GET['key'] . '%' ) ->where(['status'=>1, 'publish'=>1])->skip($skip)->take(10)->get();
            } elseif(!empty($_GET['location'])) {
                $jobs = Job::where('location','LIKE', '%' . $_GET['location'] . '%' ) ->where(['status'=>1, 'publish'=>1])->skip($skip)->take(10)->get();
            }
            else
            {
                $jobs = Job::orderBy('created_at','desc')->where(['status'=>1, 'publish'=>1])->skip($skip)->take(10)->get();
            }        
            if( count($jobs) < 1){
                $response = [
                  'status' => 200,
                  'error' => false,
                  'message' => 'no more jobs',
                  'data' => []
                ];
              echo json_encode($response);
              exit();
             }
        } 

        foreach($jobs as $job)
            {
                $result[] = [
                    'id'=>$job->id,
                    'title'=>$job->title,
                    'image'=>$job->image ? url('images/job'.$job->image):'',
                    'bgimage'=>$job->bgimage?url('images/job/bg'.$job->bgimage):'',
                    'description'=>$job->description?$job->description:'',
                    'location'=>$job->location,
                    'date'=>$job->date,
                    'deadline'=>$job->deadline?$job->deadline:'',
                    'vacancy'=>$job->vacancy,
                    'salary'=>$job->salary,
                    'meta_title'=>$job->meta_title?$job->meta_title:'',
                    'meta_description'=>$job->meta_description?$job->meta_description:'',
                    'created_at'=>$job->created_at,
                    'status'=>$job->status,
                    'creator_id'=>$job->creator_id,
                    'type'=>$job->type,
                ];
            }
        
        $response =[
            'status'=>200,
            'error'=>false,
            'message'=>'filtered jobs',
            'data'=>$result,
        ];
        echo json_encode($response);
        exit;
    }
    
}
