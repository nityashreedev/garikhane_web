<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Link;
class LinkController extends Controller
{
    public function index()
    {
        $links = Link::orderBy('created_at','desc')->get();
        return view('admin.link.index', compact('links'));
    }
    
     public function edit($id)
    {
        $link = Link::findOrFail($id);
        return view('admin.link.edit', compact('link'));
    }


    public function store(Request $request)
    {
    
        $request->validate([
           
            'link' => 'required'
        ]);
        
        $link = new Link();
        $link->link = $request->get('link');
        $link->title = $request->get('title');
         $link->save();
         $request->session()->flash('success','Link updated');

         return redirect('admin/link');
        
    }
    
    public function update($id,Request $request)
    {
    
        $request->validate([
           
            'link' => 'required'
        ]);
        
        $link = Link::findOrFail($id);
        $link->link = $request->get('link');
        $link->title = $request->get('title');
         $link->update();
         $request->session()->flash('success','Link created');

         return redirect('admin/link');
        
    }

   
    public function delete($id, Request $request)
    {
        $link = Link::findOrFail($id);
        $link->delete();
        $request->session()->flash('success','Link deleted');
        return redirect('admin/link');
    }
}