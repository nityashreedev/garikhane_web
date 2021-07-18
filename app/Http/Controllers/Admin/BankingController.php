<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banking;

class BankingController extends Controller
{
    public function index()
    {
        $bankings = Banking::orderBy('created_at','desc')->get();
        return view('admin.banking.index', compact('bankings'));
        
    }
    public function create()
    {
        
        return view('admin.banking.create');
    }

    public function store(Request $request)
    {

        $request->validate([
           
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
         
    
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $data['date'] = $request->get('date');
        $data['meta_title'] = $request->get('meta_title');
        $data['meta_description'] = $request->get('meta_desc');
      
        $data['location'] = $request->get('location');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/banking/');
           
                if($file->move($target_path, $name)) {
                   
                    $data['image']  = $name;
                }
            }
       
         banking::create($data);
    
        
         toastr()->success('Bank Added successully');
         return redirect('admin/banking');
    }

    public function edit($id)
    {
        $purpose = '';
        $banking =  Banking::findOrfail($id);
            
     
        return view('admin.banking.create', compact('banking','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);


        $banking = Banking::findOrFail($id);
       
        $banking->title = $request->get('title');
        $banking->description = $request->get('description');
        $banking->date = $request->get('date');
        $banking->location = $request->get('location');
        $banking->meta_title = $request->get('meta_title');
        $banking->meta_description = $request->get('meta_description');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/banking/');
            
                if($file->move($target_path, $name)) {
                    $banking->image  = $name;
                }
            }
            $banking->update();
            $request->session()->flash('success','banking Updated');

            return redirect('admin/banking');
           


    }

    public function delete($id, Request $request)
    {
        $banking = Banking::findOrFail($id);
        $banking->delete();
        $request->session()->flash('success','banking deleted');
        return redirect('admin/banking');
    }
}
