<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EntrepreneurshipProcess;

class EntrepreneurshipProcessController extends Controller
{
    public function index()
    {
        $process = EntrepreneurshipProcess::first();
        return view('admin.entrepreneurship.index', compact('process'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title'=>'required|',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required|',
        ]);
        
        if($request->file('image')){
            $file = $request->file('image');
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/background_images/');
            $file->move($target_path, $name);
            
        }
        $entrepreneurship_rocess = EntrepreneurshipProcess::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$name,            
        ]);
        return redirect()->back()->with('success', 'Page Details created successfully');

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required|',
        ]);
        $entrepreneurship_rocess = EntrepreneurshipProcess::findOrFail($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/background_images/');
            $file->move($target_path, $name);
            $garikhane_page->image = $name;
            $garikhane_page->save();
        }
        $entrepreneurship_rocess->update([
            'title'=>$request->title,
            'description'=>$request->description,            
        ]);
        
        return redirect()->back()->with('success', 'Page Details Updated successfully');
    }

}
