<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;
class FAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::orderBy('created_at','desc')->get();
        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
           
            'file' => 'sometimes|max:2048',
            'question' => 'required',
            'ans' => 'required'
        ]);
        
        
        foreach($request->question as $key=> $q)
        {
            $faq = new FAQ();
            $faq->question = $q;
        $faq->ans = $request->ans[$key];
        
        if(isset($request->file('file')[$key]) && $file = $request->file('file')[$key]) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/faq/');
            
                if($file->move($target_path, $name)) {
                    $faq->file  = $name;
                }
            }
           
         $faq->save();
        }
        
         $request->session()->flash('success','Question created');

         return redirect('admin/faq');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $faq = FAQ::findOrfail($id);
        return view('admin.faq.edit', compact('faq','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            
            'question' => 'required',
            'ans' => 'required',
            'file' => 'sometimes|max:2048'
        ]);
        $faq = FAQ::findOrfail($id);
        $faq->question = $request->get('question');
        $faq->ans = $request->get('ans');
        if($file = $request->file('file')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/faq/');
            
                if($file->move($target_path, $name)) {
                    $faq->file  = $name;
                }
            }
           
         $faq->save();
         $request->session()->flash('success','Question created');

         return redirect('admin/faq');

    }

    public function delete($id, Request $request)
    {
        try{
            $faq = FAQ::findOrFail($id);
            if($faq->delete())
            {
            
            $request->session()->flash('success','Faq deleted');
                
            }
            else
            {
                
            
            $request->session()->flash('error','Faq not deleted');
            }
            
            return $faq;
            
        }catch(\Exception $e)
        {
            dd($e->getMessage());
        }
        
        
    }
}