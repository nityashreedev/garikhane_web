<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GariKhaneIntro;

class GarikhanePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garikhane_page =  GariKhaneIntro::first();
        return view('admin.garikhanneproject.garikhane_intro', compact('garikhane_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $garikhane_page = GariKhaneIntro::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$name,            
        ]);
        return redirect()->back()->with('success', 'Page Details created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required|',
        ]);
        $garikhane_page = GariKhaneIntro::findOrFail($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/background_images/');
            $file->move($target_path, $name);
            $garikhane_page->image = $name;
            $garikhane_page->save();
        }
        $garikhane_page->update([
            'title'=>$request->title,
            'description'=>$request->description,            
        ]);
        
        return redirect()->back()->with('success', 'Page Details Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
