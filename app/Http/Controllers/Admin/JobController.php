<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\UserEvent;
use App\Models\UserJob;
use App\Models\MobileUserAuth;
use App\Models\MobileUser;
use App\Mail\JobCreate;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Libraries\PushNotificationLibrary;

class JobController extends Controller
{
    public function index()
    {
       $jobs = Job::orderBy('date','DESC')->get();
    
       return view('admin.job.index', compact('jobs'));

    }

    public function create()
    {
        return view('admin.job.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' =>'required',
            'date' =>'required',
            'deadline' => 'required|after:date',
        ]);
       
        $job = new Job();
        $job->creator_id = 33;
        $job->status = 1;
        $job->type="admin";
        $job->title = $request->get('title');
        $job->location = $request->get('location');
        $job->description = $request->get('description');
        $job->date = $request->get('date');
        $job->deadline = $request->get('deadline');
        $job->salary = $request->get('salary');
        $job->vacancy = $request->get('vacancy');
        $job->meta_title = $request->get('meta_title');
        $job->meta_description = $request->get('meta_desc');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/job/');
           
                if($file->move($target_path, $name)) {
                    $job->image  = $name;
                }
            }
            if($file = $request->file('bgimage')) {
                $name = time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/job/bg/');
               
                    if($file->move($target_path, $name)) {
                       
                        $job->bgimage  = $name;
                    }
                }
           
        $job->save();   
         if($request->has('notify_users'))
         {
            $users = MobileUserAuth::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
            PushNotificationLibrary::sendPushNotification($users, 'Karmabhomi', ' New Job has been added', 1, 'main', 'default', 'Job', $job->id);
         }
        $request->session()->flash('success','job created');  
        return redirect('admin/job');      
    }

    public function edit($id)
    {
        $purpose = '';
        $job = Job::findOrFail($id);
        return view('admin.job.create', compact('job','purpose'));
        
    }
    public function update(Request $request, $id)
    {
       
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' =>'required',
            'deadline' => 'required|after:date',
           
        ]);
        $job = Job::findOrfail($id);
         $job->creator_id = Auth::id();
        $job->status = 1;
        $job->type="admin";
        $job->title = $request->title;
        $job->description = $request->get('description');
        $job->location = $request->get('location');
        $job->date = $request->get('date');
        $job->deadline = $request->get('deadline');
        $job->salary = $request->get('salary');
        $job->vacancy = $request->get('vacancy');
        $job->meta_title = $request->get('meta_title');
        $job->meta_description = $request->get('meta_desc');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/job/');
            
                if($file->move($target_path, $name)) {
                    $job->image   = $name;
                }
            }
            if($file = $request->file('bgimage')) {
                $name = time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/job/bg/');
               
                    if($file->move($target_path, $name)) {
                       
                        $job->bgimage  = $name;
                    }
                }
            $job->update();
            $request->session()->flash('success','job Updated');

            return redirect('admin/job');

    }

    public function delete($id, Request $request)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        $request->session()->flash('success','job deleted');
        return redirect('admin/job');
    }
    
    public function interested($id)
    {
        $job = Job::findOrFail($id);
        $alluser = [];
        $allwebuser = [];
        $webintersted = UserJob::where('job_id',$id)->where('type','web')->get();
        if($webintersted){
            foreach($webintersted as $web)
            {
                $allwebuser[] = [
                   'name' => $web->user->fname .''. $web->user->lname,
                   'email' =>$web->user->email,
                   'file' =>url('images/jobapplicant/'.$web->file),
                  
                     'type' =>'mobile',
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
                     'type' =>'mobile',
                     'id' =>$id,
                     'user_id' =>$mob->user_id
                 ];;
            }
        }
      
        $alluser = array_merge($allwebuser ,$allmobuser);
        return view('admin.job.interested')->with(compact('alluser','job'));
    }
    
    public function status(Request $request, $id)
    {
        $job = Job::find($id);
        if($request->status && $request->status == 'unpublished') {
            $job->status = 0;
            $job->save();
        } elseif ($request->status && $request->status == 'published') {
            $job->status = 1;
            $job->save();
            \Log::info("job details");
            \Log::info($job->id);
            $users = MobileUserAuth::where('user_id', $job->creator_id)->whereNotNull('fcm_token')->first();
            if(!is_null($users))
            {
                \Log::info("notify to user");
                \Log::info($users->fcm_token);
                PushNotificationLibrary::SpecificUserNotification($users, 'Karmabhoomi', ' Your job has been approved', 1, 'main', 'default', 'Job', $job->id);       
            }
        }
        return response()->json(['success' => 'Status change successfully.']);
    }
    
    public function publish($id)
    {
        $job = Job::find($id);
        if($job->publish == 1)
        {
            $job->publish = 0;
            $job->save();
        }else
        {
            $job->publish = 1;
            $job->save();
        }
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function notifyUser($id)
    {   
        $job = Job::findOrFail($id);
        $users = MobileUserAuth::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
        PushNotificationLibrary::sendPushNotification($users, 'Karmabhomi', 'New Job '.$job->title, 1, 'main', 'default', 'Job', $id);
        return redirect()->back()->with('success', "Notification sent to all users");

    }
}
