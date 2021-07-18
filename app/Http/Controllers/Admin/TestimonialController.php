<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('created_at','desc')->get();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        
        $testimonial = new Testimonial();
        $testimonial->name = $request->get('title');
        $testimonial->description = $request->get('text');
         $testimonial->designation = $request->get('desig');
        $testimonial->facebook = $request->get('fb');
           $testimonial->instagram = $request->get('insta');
              $testimonial->twitter = $request->get('twit');
              
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/testimonial/');
            
                if($file->move($target_path, $name)) {
                    $testimonial->image  = $name;
                }
            }
         $testimonial->save();
         $request->session()->flash('success','testimonial created');

         return redirect('admin/testimonial');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $testimonials = Testimonial::findOrfail($id);
        return view('admin.testimonial.create', compact('testimonials','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        $testimonials = Testimonial::findOrfail($id);
        $testimonials->name = $request->title;
        $testimonials->description = $request->get('text');
         $testimonials->designation = $request->get('desig');
        $testimonials->facebook = $request->get('fb');
           $testimonials->instagram = $request->get('insta');
              $testimonials->twitter = $request->get('twit');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/testimonial/');
            
                if($file->move($target_path, $name)) {
                    $testimonials->image   = $name;
                }
            }
            else
            {
                $testimonials->image = $testimonials->image;

            }
            $testimonials->update();
            $request->session()->flash('success','testimonial Updated');

            return redirect('admin/testimonial');
           


    }

    public function delete($id, Request $request)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        $request->session()->flash('success','testimonial deleted');
        return redirect('admin/testimonial');
    }
}
