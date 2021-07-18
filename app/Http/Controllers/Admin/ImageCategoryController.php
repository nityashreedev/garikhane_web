<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageCategory;
use App\Models\Gallery;
class ImageCategoryController extends Controller
{
    public function index()
    {
        
        $gallerys = ImageCategory::orderBy('created_at','desc')->get();
        return view('admin.imagecategory.index', compact('gallerys'));
    }

    public function create()
    {
        return view('admin.imagecategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);
        
        $gallery = new ImageCategory();
        $gallery->title = $request->get('title');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/gallerycategory/');
            
                if($file->move($target_path, $name)) {
                    $gallery->image  = $name;
                }
            }
         $gallery->save();
         $request->session()->flash('success','Image Category created');

         return redirect('admin/imagecategory');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $gallerys = ImageCategory::findOrfail($id);
        return view('admin.imagecategory.create', compact('gallerys','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);
        $gallery = ImageCategory::findOrfail($id);
        $gallery->title = $request->title;
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/gallerycategory/');
            
                if($file->move($target_path, $name)) {
                    $gallery->image   = $name;
                }
            }
            else
            {
                $gallery->image = $gallery->image;

            }
            $gallery->update();
            $request->session()->flash('success','Image Category Updated');

            return redirect('admin/imagecategory');
           


    }

    public function delete($id, Request $request)
    {
       
        $gallery = ImageCategory::findOrFail($id);
        $images = Gallery::where('category_id' ,$id)->get();
        if(count($images) > 0)
        {
            $images->delete();
        }
        
        $gallery->delete();
        $request->session()->flash('success','Image Category  deleted');
        return redirect('admin/imagecategory');
    }
}