<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('created_at','desc')->get();
        return view('admin.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        
        $banner = new Banner();
        $banner->title = $request->get('title');
        $banner->text = $request->get('text');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/banner/');
            
                if($file->move($target_path, $name)) {
                    $banner->image  = $name;
                }
            }
           
         $banner->save();
         $request->session()->flash('success','Banner created');

         return redirect('admin/banner');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $banners = Banner::findOrfail($id);
        return view('admin.banner.create', compact('banners','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        $banners = Banner::findOrfail($id);
        $banners->title = $request->title;
        $banners->text = $request->get('text');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/banner/');
            
                if($file->move($target_path, $name)) {
                    $banners->image   = $name;
                }
            }
            else
            {
                $banners->image = $banners->image;

            }
            $banners->update();
            $request->session()->flash('success','Banner Updated');

            return redirect('admin/banner');
           


    }

    public function delete($id, Request $request)
    {
        try{
            $banner = Banner::findOrFail($id);
            if($banner->delete())
            {
            
            $request->session()->flash('success','Banner deleted');
                
            }
            else
            {
                
            
            $request->session()->flash('error','Banner not deleted');
            }
            
            return $banner;
            
        }catch(\Exception $e)
        {
            dd($e->getMessage());
        }
        
        
    }
}
