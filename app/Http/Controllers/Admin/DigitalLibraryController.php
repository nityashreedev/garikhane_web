<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DigitalLibrary;
class DigitalLibraryController extends Controller
{
    public function index()
    {
        $digital = DigitalLibrary::all();
        return view('admin.digitallibrary.index', compact('digital'));
    }

    public function create()
    {
        return view('admin.digitallibrary.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        
        $digital = new DigitalLibrary();
        $digital->title = $request->get('title');
        $digital->text = $request->get('text');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/digitallibrary/');
            
                if($file->move($target_path, $name)) {
                    $digital->image  = $name;
                }
            }
        if($file = $request->file('file')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/digitallibrary/file/');
            
                if($file->move($target_path, $name)) {
                    $digital->file  = $name;
                }
            }
         $digital->save();
         $request->session()->flash('success','Digital Library created');

         return redirect('admin/digital-library');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $digital = DigitalLibrary::findOrfail($id);
        return view('admin.digitallibrary.create', compact('digital','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        $digital = DigitalLibrary::findOrfail($id);
        $digital->title = $request->title;
        $digital->text = $request->get('text');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/digitallibrary/');
            
                if($file->move($target_path, $name)) {
                    $digital->image   = $name;
                }
            }
            else
            {
                $digital->image = $digital->image;

            }
            if($file = $request->file('file')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/digitallibrary/file/');
            
                if($file->move($target_path, $name)) {
                    $digital->file   = $name;
                }
            }
            else
            {
                $digital->file = $digital->file;

            }
            $digital->update();
            $request->session()->flash('success','Digital Library Updated');

            return redirect('admin/digital-library');
           


    }

    public function delete($id, Request $request)
    {
        $digital = DigitalLibrary::findOrFail($id);
        $digital->delete();
        $request->session()->flash('success','Digital Library deleted');
        return redirect('admin/digital-library');
    }

    public function changeStatus(Request $request)
    {
        $digital = DigitalLibrary::findOrFail($id);
        
    }
}