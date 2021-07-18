<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\ImageCategory;
class GalleryController extends Controller
{
    public function index()
    {
        
        $gallerys = Gallery::orderBy('created_at','desc')->get();
        return view('admin.gallery.index', compact('gallerys'));
    }

    public function create()
    {
        $image_category = ImageCategory::orderBy('created_at','desc')->get();
        return view('admin.gallery.create',compact('image_category'));
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);
        
        $gallery = new Gallery();
        $gallery->title = $request->get('title');
        $gallery->category_id = $request->get('category_id');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/gallery/');
            
                if($file->move($target_path, $name)) {
                    $gallery->image  = $name;
                }
            }
         $gallery->save();
         $request->session()->flash('success','Image created');

         return redirect('admin/gallery');
        
    }

    public function edit($id)
    {
       
        $image_category = ImageCategory::orderBy('created_at','desc')->get();
        $purpose = '';
        $gallerys = Gallery::findOrfail($id);
        return view('admin.gallery.create', compact('gallerys','purpose','image_category'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);
        $gallery = Gallery::findOrfail($id);
        $gallery->title = $request->title;
         $gallery->category_id = $request->get('category_id');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/gallery/');
            
                if($file->move($target_path, $name)) {
                    $gallery->image   = $name;
                }
            }
            else
            {
                $gallery->image = $gallery->image;

            }
            $gallery->update();
            $request->session()->flash('success','Image Updated');

            return redirect('admin/gallery');
           


    }

    public function delete($id, Request $request)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        $request->session()->flash('success','Image deleted');
        return redirect('admin/gallery');
    }
}