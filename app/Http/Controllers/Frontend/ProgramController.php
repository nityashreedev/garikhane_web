<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\UserJob;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\MobileUser;
use App\Models\UserEvent;
use Illuminate\Support\Facades\App;
use App\Models\MobileUserAuth;
use App\Mail\JobCreate;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Libraries\PushNotificationLibrary;

class ProgramController extends Controller
{
    public function jobapply(Request $request)
    {
        $job_title = Job::where('id',$request->job_id)->select('title')->first();
        return view('newpage.jobapply')->with(compact('job_title'));
    }
    
    public function jobproviderjobcreate()
    {
        return view('newpage.jobprovidercreate');
    }
    
    public function coverletter($job_id,$user_id)
    {
        $userform = UserJob::where('user_id',$user_id)->where('job_id',$job_id)->first();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('newpage.coverletter', compact('userform'));
        return $pdf->stream('coverletter' . date('Ymd') . '.pdf');
    }
    
    public function storeapplyuser(Request $request )
    {
     
        $userapply = new UserJob();
        $userapply->text = $request->text;
        $userapply->user_id = $request->user_id;
        $userapply->job_id = $request->job_id;
        
        $userapply->type = 'web';
       if($file = $request->file('file')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/jobapplicant/');
            
                if($file->move($target_path, $name)) {
                    $userapply->file  = $name;
                }
            }
        $userapply->save();
        $request->session()->flash('success','Sucessfully Submitted');
         return redirect('/');
        
    }
    
    public function getuserjobs()
    {
        $jobscreated = Job::where('type','web')->where('creator_id',Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('newpage.jobprovider')->with(compact('jobscreated'));
    }
    public function jobedit($id)
    {
        $purpose ='';
        $job = Job::findOrFail($id);
        return view('newpage.jobprovidercreate')->with(compact('job','purpose'));
    }
    
    public function jobstore(Request $request)
    {
      
        $request->validate([
            'title' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' =>'required',
            'date' =>'required',
            'deadline' => 'required|after:date',
        ]);
        
        $job = new Job();
        $job->creator_id =Auth::user()->id;
        $job->status =0;
        $job->type="web";
        $job->title = $request->get('title');
        $job->location = $request->get('location');
        $job->description = $request->get('description');
        $job->date =  date("Y-m-d", strtotime($request->get('date')));
        $job->deadline =  date("Y-m-d", strtotime($request->get('deadline')));
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
         $jobs =Job::findOrFail($job->id);
       
         $webuser = User::whereNotNull('email')->get();
         if(count($webuser) > 0)
         {
            foreach($webuser as $user)
            {
                 
               $mail = Mail::to($user->email)->send(new JobCreate($jobs));
               \Log::info('!Mail');
            \Log::info($mail);
            }
         } 
        
         $users = MobileUserAuth::whereNotNull('fcm_token')->pluck('user_id')->toArray();
         PushNotificationLibrary::sendPushNotification($users, 'Garikhanne', ' New Job has added', 1, 'Job');
         $request->session()->flash('success','job created');

         return redirect('job/provider');
    }
     public function jobupdate($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' =>'required',
            'date' =>'required',
            'deadline' => 'required|after:date',
        ]);
      
        $job = Job::findOrFail($id);
        $job->creator_id =Auth::user()->id;
        $job->status =0;
        $job->type="web";
        $job->title = $request->get('title');
        $job->location = $request->get('location');
        $job->description = $request->get('description');
        $job->date = $request->get('date');
        $job->deadline =  date("Y-m-d", strtotime($request->get('deadline')));
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
         $jobs =Job::findOrFail($job->id);
       
         $webuser = User::whereNotNull('email')->get();
         if(count($webuser) > 0)
         {
            foreach($webuser as $user)
            {     
               $mail = Mail::to($user->email)->send(new JobCreate($jobs));
               \Log::info('!Mail');
            \Log::info($mail);
            }
         }
                
         $users = MobileUserAuth::whereNotNull('fcm_token')->pluck('user_id')->toArray();
         PushNotificationLibrary::sendPushNotification($users, 'Garikhanne', ' New Job has added', 1, 'Job');
         $request->session()->flash('success','job updated');
         return redirect('job/provider');
    }
    public function jobdelete($id ,Request $request)
    {
        $jobs =Job::findOrFail($id);
        $jobs->delete();
        return redirect()->back()->with('success', 'Sucessfully deleted');
    }
    
    public function jobinteresteduser($id,Request $request)
    {
        $interested = [];
        $allwebuser = [];
        $webintersted = UserJob::where('job_id',$id)->where('type','web')->get();
        if($webintersted){
            foreach($webintersted as $web)
            {
                $allwebuser[] = [
                   'name' => $web->user->fname .''. $web->user->lname,
                   'email' =>$web->user->email,
                   'file' =>url('images/jobapplicant/'.$web->file),
                   'coverletter' =>$this->coverletter($id,$web->user->id,'web'),
                    'type' =>'web',
                    'id' =>$id,
                    'user_id' =>$web->user->id
                ];
            }
        }
        
        $allmobuser = [];
        $mobintersted = UserJob::where('job_id',$id)->where('type','mobile')->get();
        
        if($mobintersted){
            foreach($mobintersted as $mob)
            {
                $mobileuser = User::findOrFail($mob->user_id);
                $allmobuser[] =
                [
                    'name' => $mobileuser->fname .''. $mobileuser->lname,
                    'email' =>$mobileuser->email,
                    'file' =>url('images/jobapplicant/'.$mob->file),
                    'coverletter' =>$this->coverletter($id,$mobileuser->id,'mobile'),
                     'type' =>'mobile',
                     'id' =>$id,
                     'user_id' =>$mob->user_id
                 ];;
            }
        }
      
        $interested = array_merge($allwebuser ,$allmobuser);
        return view('newpage.interestedjobuserlist')->with(compact('interested'));
    }
}