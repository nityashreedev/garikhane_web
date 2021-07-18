<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('created_at','desc')->get();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            
        ]);
        
        $service = new Service();
        $service->title = $request->get('title');
         $service->text = $request->get('text');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/service/');
            
                if($file->move($target_path, $name)) {
                    $service->image  = $name;
                }
            }
         $service->save();
         $request->session()->flash('success','program created');

         return redirect('admin/service');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $service = Service::findOrfail($id);
        return view('admin.service.create', compact('service','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        $service = Service::findOrfail($id);
        $service->title = $request->title;
       $service->text = $request->text;
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/service/');
            
                if($file->move($target_path, $name)) {
                    $service->image   = $name;
                }
            }
            else
            {
                $service->image = $service->image;

            }
            $service->update();
            $request->session()->flash('success','Program Updated');

            return redirect('admin/service');
           


    }

    public function delete($id, Request $request)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        $request->session()->flash('success','Program deleted');
        return redirect('admin/service');
    }
}
