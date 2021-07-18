<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commite;
class CommiteController extends Controller
{
    public function index()
    {
        $commite = Commite::orderBy('created_at','desc')->get();
        return view('admin.commite.index', compact('commite'));
    }

    public function create()
    {
        return view('admin.commite.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'position' =>'required',
            'state'=>'required_if:type,state committe',
        ]);
        
        $commite = new Commite();
        $commite->name = $request->get('name');
        $commite->type = $request->get('type');
        $commite->position = $request->get('position');
        $commite->state = $request->get('state');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/commite/');
            
                if($file->move($target_path, $name)) {
                    $commite->image  = $name;
                }
            }
         $commite->save();
         $request->session()->flash('success','Commite Member Created');

         return redirect('admin/commite');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $commite = Commite::findOrfail($id);
        return view('admin.commite.create', compact('commite','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'position' =>'required',
            'state'=>'required_if:type,state committe',
        ]);
        $commite = Commite::findOrfail($id);
        $commite->name = $request->name;
        $commite->type = $request->get('type');
        $commite->position = $request->get('position');
        $commite->state = $request->get('state');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/commite/');
            
                if($file->move($target_path, $name)) {
                    $commite->image   = $name;
                }
            }
            else
            {
                $commite->image = $commite->image;

            }
            $commite->update();
            $request->session()->flash('success','Commite Member Updated');

            return redirect('admin/commite');
           


    }

    public function delete($id, Request $request)
    {
        $commite = Commite::findOrFail($id);
        $commite->delete();
        $request->session()->flash('success','Commite Member deleted');
        return redirect('admin/commite');
    }
}
