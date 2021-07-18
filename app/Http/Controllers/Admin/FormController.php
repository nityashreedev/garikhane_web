<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enterprenure;
use App\Models\Karmabhomi;
use App\Models\UserKarmabhomi;
use App\Models\UserEnterprenure;
use App\Models\UserMentor;
use App\Models\MobileUserAuth;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use App\Mail\ReplyMail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;
use App\Libraries\PushNotificationLibrary;
class FormController extends Controller
{
    public function entrreply($id)
    {
        $entreprenure = UserEnterprenure::where('enterprenure_id',$id)->first();
        return view('admin.dashboard.entrreply')->with(compact('entreprenure'));
    }
    public function karmabhomireply($id)
    {
        $karmabhomi = UserKarmabhomi::where('karmabhomi_id',$id)->first();
        return view('admin.dashboard.karmabhomireply', compact('karmabhomi'));
    }
    public function mentorreply($id)
    {
        $mentor = UserMentor::where('mentor_id',$id)->first();
        return view('admin.dashboard.mentorreply')->with(compact('mentor'));
    }
    public function entrreplymessage(Request $request)
    {
        $title = 'Enterprenure Form';
        $userentr = UserEnterprenure::findOrFail($request->id);
        $userentr->status = 0;
        if(!empty($request->comment))
        {
            $userentr->status = 1;
            if($userentr->user_type == 'web')
            {
                $user = User::findOrFail($userentr->user_id);
                if(!empty($user->email))
                {
                    Mail::to($user->email)->send(new ReplyMail($request->comment,$title));
                }
               
            }
            else
            {
                $users = MobileUserAuth::whereNotNull('fcm_token')->where('user_id',$userentr->user_id)->pluck('user_id')->toArray();
                PushNotificationLibrary::sendPushNotification($users, 'Garikhanne', strip_tags($request->comment), 1, 'Reply');
            }
        }
        $userentr->reply = $request->comment;
        $userentr->update();
        $request->session()->flash('success','Sucessfully Replied');
        return redirect('admin/entreprenure/form/submission');
    }
    
     public function karmabhomireplymessage(Request $request)
    {
        $title = 'karmabhomi Form';
        $userentr = UserKarmabhomi::findOrFail($request->id);
        $userentr->status = 0;
        if(!empty($request->comment))
        {
            $userentr->status = 1;
            if($userentr->user_type == 'web')
            {
                $user = User::findOrFail($userentr->user_id);
                if(!empty($user->email))
                {
                    Mail::to($user->email)->send(new ReplyMail($request->comment,$title));
                }
               
            }
            else
            {
                $users = MobileUserAuth::whereNotNull('fcm_token')->where('user_id',$userentr->user_id)->pluck('user_id')->toArray();
                PushNotificationLibrary::sendPushNotification($users, 'Garikhanne', strip_tags($request->comment), 1, 'Reply');
            }
        }
        $userentr->reply = $request->comment;
        $userentr->update();
        $request->session()->flash('success','Sucessfully Replied');
        return redirect('admin/karmabhomi/form/submission');
    }
    
    public function mentorreplymessage(Request $request)
    {
        $title = 'Mentor Form';
        $UserMentor = UserMentor::findOrFail($request->id);
        $UserMentor->status = 0;
        if(!empty($request->comment))
        {
            $UserMentor->status = 1;
             if($UserMentor->user_type == 'web')
            {
                $user = User::findOrFail($UserMentor->user_id);
                if(!empty($user->email))
                {
                    Mail::to($user->email)->send(new ReplyMail($request->comment,$title));
                }
               
            }
            else
            {
                $users = MobileUserAuth::whereNotNull('fcm_token')->where('user_id',$UserMentor->user_id)->pluck('user_id')->toArray();
                PushNotificationLibrary::sendPushNotification($users, 'Garikhanne', strip_tags($request->comment), 1, 'Reply');
            }
        }
        $UserMentor->reply = $request->comment;
        $UserMentor->update();
        $request->session()->flash('success','Sucessfully Replied');
        return redirect('admin/mentor/form/submission');
    }
    public function viewpdf($id)
    {
        $userform = UserMentor::findOrFail($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.dashboard.mentor', compact('userform'));
       
        return $pdf->stream('BC Report.pdf');
    }
    
    public function citizendownload(Request $request)
    {
        
         $file= public_path(). "/images/mentor/citizen/".$request->name;

    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, 'filename.pdf', $headers);
    }
    
    public function entrstatus(Request $request,$id)
    {
        $userentr = UserEnterprenure::findOrFail($id);
        $title = 'Enterprenure Form';
        $status = '';
        if ($request->status && $request->status == 'unpublished') {
            UserEnterprenure::where('id', $id)->update([
                'accept_status' => 2
            ]);
            $status = 'Rejected';
        } elseif ($request->status && $request->status == 'published') {
            UserEnterprenure::where('id', $id)->update([
                'accept_status' => 1
            ]);
             $status = 'Accepted';
        }
        if($userentr->user_type == 'web')
            {
                $user = User::findOrFail($userentr->user_id);
                if(!empty($user->email))
                {
                    Mail::to($user->email)->send(new ReplyMail($status,$title));
                }
               
            }
            else
            {
                $users = MobileUserAuth::whereNotNull('fcm_token')->where('user_id',$userentr->user_id)->pluck('user_id')->toArray();
                PushNotificationLibrary::sendPushNotification($users, 'Garikhanne', $status, 1, 'Status');
            }
        return response()->json(['success' => 'Status change successfully.']);
    }
    
    public function karmabhomistatus(Request $request,$id)
    {

        $userentr = UserKarmabhomi::findOrFail($id);
        $title = 'Karmabhomi Form';
        $status = '';
        if ($request->status && $request->status == 'unpublished') {
            UserKarmabhomi::where('id', $id)->update([
                'accept_status' => 2
            ]);
            $status = 'Rejected';
        } elseif ($request->status && $request->status == 'published') {
        
            UserKarmabhomi::where('id', $id)->update([
                'accept_status' => 1
            ]);
             $status = 'Accepted';
        }
        if($userentr->user_type == 'web')
            {
                $user = User::findOrFail($userentr->user_id);
                if(!empty($user->email))
                {
                    Mail::to($user->email)->send(new ReplyMail($status,$title));
                }
               
            }
            else
            {
                $users = MobileUserAuth::whereNotNull('fcm_token')->where('user_id',$userentr->user_id)->pluck('user_id')->toArray();
                PushNotificationLibrary::sendPushNotification($users, 'Garikhanne', $status, 1, 'Status');
            }
        return response()->json(['success' => 'Status change successfully.']);
    }
    
    public function mentorstatus(Request $request,$id)
    {
        $title = 'Mentor Form';
        $userentr = UserMentor::findOrFail($id);
        $status = '';
        if ($request->status && $request->status == 'unpublished') {
            UserMentor::where('id', $id)->update([
                'accept_status' => 2
            ]);
            $status = 'Rejected';
        } elseif ($request->status && $request->status == 'published') {
            UserMentor::where('id', $id)->update([
                'accept_status' => 1
            ]);
             $status = 'Accepted';
        }
        if($userentr->user_type == 'web')
            {
                $user = User::findOrFail($userentr->user_id);
                if(!empty($user->email))
                {
                    Mail::to($user->email)->send(new ReplyMail($status,$title));
                }
               
            }
            else
            {
                $users = MobileUserAuth::whereNotNull('fcm_token')->where('user_id',$userentr->user_id)->pluck('user_id')->toArray();
                PushNotificationLibrary::sendPushNotification($users, 'Garikhanne', $status, 1, 'Status');
            }
        return response()->json(['success' => 'Status change successfully.']);
    }
    
    public function karmabhomidelete(Request $request, $id)
    {
        $karmabhomi_user = Karmabhomi::findOrFail($id);
        $karmabhomi_user->delete();
        return response()->json(['success'=>'Karmabhomi Userform Deleted successfully']);
    }
   
    
}
