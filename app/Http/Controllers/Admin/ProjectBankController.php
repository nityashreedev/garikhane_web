<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectBankIdea;

class ProjectBankController extends Controller
{
    public function index()
    {
        $projectidea = ProjectBankIdea::orderBy('created_at','desc')->get();
      
        return view('admin.projectidea.index', compact('projectidea'));
        
    }
    public function create()
    {
        
        return view('admin.projectidea.create');
    }

    public function store(Request $request)
    {

        $request->validate([
           
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'pdf' => 'sometimes|nullable|mimes:doc,docx,pdf'
            
        ]);
         
        $data['name'] = $request->get('name');
        $data['sector'] = $request->get('sector');
        $data['reference'] = $request->get('reference');
        $data['project_id'] = $request->get('project_id');
        $data['link'] = $request->get('link');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/projectbank/');
           
                if($file->move($target_path, $name)) {
                   
                    $data['image']  = $name;
                }
            }
            
            if($pdfFile = $request->file('pdf')) {
                $namePdf = time().'.'.$pdfFile->getClientOriginalExtension();
                $target_path = public_path('/images/projectbank/pdf/');
                if($pdfFile->move($target_path, $namePdf)) 
                {  
                    $data['pdf']  = $namePdf;
                }
            }
       
        ProjectBankIdea::create($data);
        $request->session()->flash('success','Project created');
        return redirect('admin/project/idea/bank');
    }

    public function edit($id)
    {
        $purpose = '';
        $projectidea =  ProjectBankIdea::findOrfail($id);
            
     
        return view('admin.projectidea.create', compact('projectidea','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'=> 'required',
            'pdf' => 'sometimes|nullable|mimes:doc,docx,pdf'
            
        ]);


        $projectidea = ProjectBankIdea::findOrFail($id);
       
        $projectidea->name = $request->get('name');
        $projectidea->sector = $request->get('sector');
        $projectidea->project_id = $request->get('project_id');
        $projectidea->reference = $request->get('reference');
        $projectidea->link = $request->get('link');

        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/projectbank/');
            
                if($file->move($target_path, $name)) {
                    $projectidea->image  = $name;
                }
            }
            if($pdfFile = $request->file('pdf')) {
                $namePdf = time().'.'.$pdfFile->getClientOriginalExtension();
                $target_path = public_path('/images/projectbank/pdf/');
               
                    if($pdfFile->move($target_path, $namePdf)) {
                        $projectidea->pdf  = $namePdf;
                    }
                }
            $projectidea->update();
            $request->session()->flash('success','Project Updated');
            return redirect('admin/project/idea/bank');  
    }

    public function delete($id, Request $request)
    {
        $event = ProjectBankIdea::findOrFail($id);
        $event->delete();
        $request->session()->flash('success','Project deleted');
        return redirect('admin/project/idea/bank');
    }
}