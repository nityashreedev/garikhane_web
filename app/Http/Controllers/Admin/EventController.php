<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\UserEvent;
use App\Models\MobileUser;
use App\Models\MobileUserAuth;
use App\Mail\EventCreate;
use App\Models\User;
use App\Jobs\EventCreateJob;
use Illuminate\Support\Facades\Mail;
use App\Libraries\PushNotificationLibrary;
class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('id','desc')->get();
        return view('admin.event.index', compact('events'));
        
    }
    public function create()
    {
        
        return view('admin.event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
         
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $data['date'] = $request->get('date');
        $data['meta_title'] = $request->get('meta_title');
        $data['meta_description'] = $request->get('meta_desc');
        $data['price'] = $request->get('price');
        $data['location'] = $request->get('location');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/event/');
           
                if($file->move($target_path, $name)) {
                   
                    $data['image']  = $name;
                }
            }
            if($file = $request->file('bgimage')) {
                $name = time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/event/bg/');
               
                    if($file->move($target_path, $name)) {
                       
                        $data['bgimage']  = $name;
                    }
                }
       
          $events = Event::create($data);
        if($request->has('notify_user'))
        {
            $users = MobileUserAuth::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
            PushNotificationLibrary::sendPushNotification($users, 'Garikhanne', ' New Event has been added', 1, 'main', 'default', 'Event', $events->id);     
        }
         $request->session()->flash('success','Event created');
         return redirect('admin/event');
    }

    public function edit($id)
    {
        $purpose = '';
        $event =  Event::findOrfail($id);
            
     
        return view('admin.event.create', compact('event','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);


        $event = Event::findOrFail($id);
       
        $event->title = $request->get('title');
        $event->price = $request->get('price');
        $event->description = $request->get('description');
        $event->date = $request->get('date');
        $event->location = $request->get('location');
        $event->meta_title = $request->get('meta_title');
        $event->meta_description = $request->get('meta_description');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/event/');
            
                if($file->move($target_path, $name)) {
                    $event->image  = $name;
                }
            }
            if($file = $request->file('bgimage')) {
                $name = time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/event/bg/');
               
                    if($file->move($target_path, $name)) {
                       
                        $event->bgimage  = $name;
                    }
                }
            $event->update();
            $request->session()->flash('success','Event Updated');

            return redirect('admin/event');
           


    }

    public function delete($id, Request $request)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        $request->session()->flash('success','Event deleted');
        return redirect('admin/event');
    }
    public function interested($id)
    {
        $event = Event::findOrFail($id);
        $alluser = [];
        $allwebuser = [];
        $webintersted = UserEvent::where(['event_id'=>$id, 'type'=>'web'])->get();
        if($webintersted){
            foreach($webintersted as $web)
            {
                $allwebuser[] = [
                   'name' => $web->user->fname .''. $web->user->lname,
                   'email' =>$web->user->email,
                ];
            }
        }
        
        $allmobuser = [];
        $mobintersted = UserEvent::where('event_id',$id)->where('type','mobile')->get();
        
        if($mobintersted){
            foreach($mobintersted as $mob)
            {
                $mobileuser = User::findOrFail($mob->user_id);
                $allmobuser[] =
                [
                    'name' => $mobileuser->fname .''. $mobileuser->lname,
                    'email' =>$mobileuser->email,
                 ];
            }
        }
      
        $alluser = array_merge($allwebuser ,$allmobuser);
        return view('admin.event.interested')->with(compact('alluser','event'));
    }

    public function status(Request $request, $id)
    {
        if ($request->status && $request->status == 'unpublished') {
            Event::where('id', $id)->update([
                'status' => 0
            ]);
        } elseif ($request->status && $request->status == 'published') {
            Event::where('id', $id)->update([
                'status' => 1
            ]);
        }
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function notifyUser($id)
    {
        $event = Event::findOrFail($id);
        $users = MobileUserAuth::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
        PushNotificationLibrary::sendPushNotification($users, 'Karmabhomi', 'New Event '.$event->title, 1, 'main', 'default', 'event', $id);
        return redirect()->back()->with('success', "Notification sent to all users");

    }
}
