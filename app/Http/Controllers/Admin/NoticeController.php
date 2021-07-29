<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\MobileUserAuth;
use App\Libraries\PushNotificationLibrary;
class NoticeController extends Controller
{
    public function index() 
    {
        $notices = Notice::orderBy('created_at','desc')->get();
        return view('admin.notice.index', compact('notices'));
    }

    public function create()
    {
        return view('admin.notice.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        
        $notice = new Notice();
        $notice->title = $request->get('title');
        $notice->text = $request->get('text');
        $notice->link = $request->get('link');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/notice/');
            
                if($file->move($target_path, $name)) {
                    $notice->image  = $name;
                }
            }
         $notice->save();
         $request->session()->flash('success','Notice created');

         return redirect('admin/notice');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $notices = Notice::findOrfail($id);
        return view('admin.notice.create', compact('notices','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        $notices = Notice::findOrfail($id);
        $notices->title = $request->title;
        $notices->text = $request->get('text');
        $notices->link = $request->get('link');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/notice/');
            
                if($file->move($target_path, $name)) {
                    $notices->image   = $name;
                }
            }
           
            $notices->update();
            $request->session()->flash('success','Notice Updated');

            return redirect('admin/notice');
           


    }

    public function delete($id, Request $request)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();
        $request->session()->flash('success','Notice deleted');
        return redirect('admin/notice');
    }

    public function status(Request $request, $id)
    {
        if ($request->status && $request->status == 'unpublished') {
            Notice::where('id', $id)->update([
                'status' => 0
            ]);
        } elseif ($request->status && $request->status == 'published') {
            Notice::where('id', $id)->update([
                'status' => 1
            ]);
        }
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function notifyUsers($id)
    {
        $notice = Notice::findOrFail($id);
        $users = MobileUserAuth::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
        PushNotificationLibrary::sendPushNotification($users, 'Karmabhomi', 'New Notice ('.$notice->title.')', 1, 'main', 'default', 'event', $id);
        return redirect()->back()->with('success', "Notification sent to all users");

    }
}