<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::findOrFail(1);
        return view('admin.setting.index')->with(compact('setting'));
    }
 

    public function edit($id)
    {
        $purpose = '';
        $setting =  Setting::findOrfail(1);
            
     
        return view('admin.event.index', compact('setting','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        
        $request->validate([
           
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'whatsapp_number'=>'required|digits:10',            
        ]);


        $setting = Setting::findOrFail(1);
      
        $setting->title = $request->get('title');
        $setting->description = $request->get('description');
        $setting->meta_title = $request->get('meta_title');
        $setting->meta_description  = $request->get('meta_desc');
        $setting->caption  = $request->get('caption');
        $setting->facebook = $request->get('facebook');
        $setting->twitter  = $request->get('twitter');
        $setting->instagram = $request->get('instagram');
        $setting->linkedin =$request->get('linkedin');
        $setting->youtube =$request->get('youtube');
        $setting->address = $request->get('address');
        $setting->gmail = $request->get('gmail');
        $setting->phone = $request->get('phone');
        $setting->whatsapp_number = $request->get('whatsapp_number');
        $setting->office_time = $request->get('office_time');
        
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/setting/');
           
                if($file->move($target_path, $name)) {
                   
                    $setting->image  = $name;
                }
            }
            if($file = $request->file('bgimage')) {
                $name = time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/setting/bg/');
               
                    if($file->move($target_path, $name)) {
                       
                        $setting->bgimage  = $name;
                    }
                }
            $setting->update();
            $request->session()->flash('success','Sucessfully Submitted');

            return redirect('admin/setting');
           


    }
    
}
