<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderBy('created_at','desc')->get();
        return view('admin.partner.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        
        $partner = new Partner();
        $partner->title = $request->get('title');
        $partner->link = $request->get('link');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/partner/');
            
                if($file->move($target_path, $name)) {
                    $partner->image  = $name;
                }
            }
         $partner->save();
         $request->session()->flash('success','partner created');

         return redirect('admin/partner');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $partner = Partner::findOrfail($id);
        return view('admin.partner.create', compact('partner','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        $partner = Partner::findOrfail($id);
        $partner->title = $request->title;
      $partner->link = $request->get('link');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/partner/');
            
                if($file->move($target_path, $name)) {
                    $partner->image   = $name;
                }
            }
            else
            {
                $partner->image = $partner->image;

            }
            $partner->update();
            $request->session()->flash('success','partner Updated');

            return redirect('admin/partner');
           


    }

    public function delete($id, Request $request)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        $request->session()->flash('success','partner deleted');
        return redirect('admin/partner');
    }
}
