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
            'name' => 'required'
        ]);
         
    
        $data['name'] = $request->get('name');
        $data['description'] = $request->get('description');
        $data['sector'] = $request->get('sector');
        $data['meta_title'] = $request->get('meta_title');
        $data['meta_description'] = $request->get('meta_desc');
        $data['project_component'] = $request->get('project_component');
        $data['market_opportunity'] = $request->get('market_opportunity');
        $data['success_example'] = $request->get('success_example');
        $data['project_cost'] = $request->get('project_cost');
        $data['location'] = $request->get('location');
        $data['reference'] = $request->get('reference');
        $data['d_i_modality'] = $request->get('d_i_modality');
        $data['project_id'] = $request->get('project_id');
        $data['irr'] = $request->get('irr');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/projectbank/');
           
                if($file->move($target_path, $name)) {
                   
                    $data['image']  = $name;
                }
            }
            if($file = $request->file('bgimage')) {
                $name = time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/projectbank/bg/');
               
                    if($file->move($target_path, $name)) {
                       
                        $data['bgimage']  = $name;
                    }
                }
            
            if($file = $request->file('pdf')) {
                $name = time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/projectbank/pdf/');
               
                    if($file->move($target_path, $name)) {
                       
                        $data['pdf']  = $name;
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
            
        ]);


        $projectidea = ProjectBankIdea::findOrFail($id);
       
        $projectidea->name = $request->get('name');
        $projectidea->sector = $request->get('sector');
        $projectidea->description = $request->get('description');
        $projectidea->location = $request->get('location');
        $projectidea->project_id = $request->get('project_id');
        $projectidea->project_component = $request->get('project_component');
        $projectidea->market_opportunity = $request->get('market_opportunity');
        $projectidea->success_example = $request->get('success_example');
        $projectidea->d_i_modality = $request->get('d_i_modality');
        $projectidea->project_cost = $request->get('project_cost');
        $projectidea->irr = $request->get('irr');
        $projectidea->reference = $request->get('reference');
       

        $projectidea->meta_title = $request->get('meta_title');
        $projectidea->meta_description = $request->get('meta_description');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/projectbank/');
            
                if($file->move($target_path, $name)) {
                    $projectidea->image  = $name;
                }
            }
            if($file = $request->file('bgimage')) {
                $name = time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/projectbank/bg/');
               
                    if($file->move($target_path, $name)) {
                       
                        $projectidea->bgimage  = $name;
                    }
                }
            if($file = $request->file('pdf')) {
                $name = time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/projectbank/pdf/');
               
                    if($file->move($target_path, $name)) {
                       
                        $projectidea->pdf  = $name;
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
