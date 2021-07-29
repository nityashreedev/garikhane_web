<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;
use App\Models\MobileUserAuth;
use App\Libraries\PushNotificationLibrary;
use Mail;
use Illuminate\Support\Facades\File; 
use App\Mail\NewsCreate;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderByRaw("FIELD(type , 'news', 'press') ASC")->orderBy('publish_date','desc')->get();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'document'=>'sometimes|nullable|mimes:pdf,doc,docx'
        ]);

        
        $news = new News();
        $news->title = $request->get('title');
        $news->text = $request->get('text');
        $news->link = $request->get('link');
        $news->type = $request->get('type');
        $news->publish_date = $request->get('publish_date');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/news/');
            
                if($file->move($target_path, $name)) {
                    $news->image  = $name;
                }
            }
         $news->save();
         if($file = $request->file('document')){
             $pdf_name = time().'.'.$file->getClientOriginalExtension();
             $target_path = public_path('/press_doc/pdf/');
             if($file->move($target_path, $pdf_name)){
                 $news->pdf = $pdf_name;
                 $news->save();
             }
         }

         if($request->has('notify_users'))
         {
            $users = MobileUserAuth::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
            PushNotificationLibrary::sendPushNotification($users, 'Karmabhomi', 'New News/Press release has been added', 1, 'main', 'default', 'News/Press Release', $news->id);
           
         }
         $request->session()->flash('success','News created');
         return redirect('admin/news');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $news = News::findOrfail($id);
        return view('admin.news.create', compact('news','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        $news = News::findOrfail($id);
        $news->title = $request->title;
        $news->text = $request->get('text');
        $news->type = $request->get('type');
        $news->link = $request->get('link');
        $news->publish_date = $request->get('publish_date');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/news/');
            
                if($file->move($target_path, $name)) {
                    $news->image   = $name;
                }
            }
            else
            {
                $news->image = $news->image;
            }
            if($file = $request->file('document')){

                $pdf_name = time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/press_doc/pdf/');
                if($file->move($target_path, $pdf_name)){
                    $old_file = 'press_doc/pdf/'.$news->pdf;
                    File::delete($old_file);
                    $news->pdf = $pdf_name;
                }
            }
            $news->update();
            $request->session()->flash('success','News Updated');

            return redirect('admin/news');
           


    }

    public function delete($id, Request $request)
    {
        $news = News::findOrFail($id);
        $news->delete();
        $request->session()->flash('success','News deleted');
        return redirect('admin/news');
    }

    public function status(Request $request, $id)
    {
        if ($request->status && $request->status == 'unpublished') {
            News::where('id', $id)->update([
                'status' => 0
            ]);
        } elseif ($request->status && $request->status == 'published') {
            News::where('id', $id)->update([
                'status' => 1
            ]);
        }
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function notifyUsers($id)
    {
        $news = News::findOrFail($id);
        $users = MobileUserAuth::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
        PushNotificationLibrary::sendPushNotification($users, 'Karmabhomi', 'New News/press release '.$news->title, 1, 'main', 'default', 'News/Press Release', $id);
        return redirect()->back()->with('success', "Notification sent to all users");
    }
}