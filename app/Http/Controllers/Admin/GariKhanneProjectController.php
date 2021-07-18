<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GariKhanneProject;
class GariKhanneProjectController extends Controller
{
    public function index()
    {
        $garikhanneproject = GariKhanneProject::orderBy('created_at','desc')->get();
        return view('admin.garikhanneproject.index', compact('garikhanneproject'));
    }

    public function create()
    {
        return view('admin.garikhanneproject.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required'
        ]);
        
        $Project = new GariKhanneProject();
        $Project->title = $request->get('name');
        $Project->description = $request->get('description');
        $Project->details = $request->get('details');
  
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/garikhanneproject/');
            
                if($file->move($target_path, $name)) {
                    $Project->image  = $name;
                }
            }
         $Project->save();
         $request->session()->flash('success','Project created');

         return redirect('admin/garikhanne/project');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $garikhanneproject = GariKhanneProject::findOrfail($id);
        return view('admin.garikhanneproject.create', compact('garikhanneproject','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required'
        ]);
        $Projects = GariKhanneProject::findOrfail($id);
        $Project->title = $request->get('name');
        $Project->description = $request->get('description');
        $Project->details = $request->get('details');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/garikhanneproject/');
            
                if($file->move($target_path, $name)) {
                    $Projects->image   = $name;
                }
            }
            else
            {
                $Projects->image = $Projects->image;

            }
            $Projects->update();
            $request->session()->flash('success','Project Updated');

            return redirect('admin/garikhanne/project');
           


    }

    public function delete($id, Request $request)
    {
        $Project = GariKhanneProject::findOrFail($id);
        $Project->delete();
        $request->session()->flash('success','Project deleted');
        return redirect('admin/garikhanne/project');
    }
}
