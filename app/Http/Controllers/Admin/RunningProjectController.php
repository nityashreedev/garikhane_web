<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RunningProject;
use App\Models\District;

class RunningProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->filterRunningProject();       
        return view('admin.running-project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();
        return view('admin.running-project.create', compact('districts'));
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
            'project_name'=>'required',
            'loan_type'=>'required',
            'project_type'=>'required',
            'project_amount'=>'required',
            'loan_amount'=>'required',
            'location'=>'required',
            'loan_date'=>'required',
            'loan_taken_by'=>'required',  
        ]);
        RunningProject::create([
            'project_name'=>$request->project_name,
            'loan_type'=>$request->loan_type,
            'project_type'=>$request->project_type,
            'project_amount'=>$request->project_amount,
            'loan_amount'=>$request->loan_amount,
            'loan_taken_by'=>$request->loan_taken_by,
            'location'=>$request->location,
            'loan_date'=>$request->loan_date, 
        ]);
        return redirect('admin/running/project')->with('success', 'Running Project Created Successfully');

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
        $runningProject = RunningProject::findOrFail($id);
        $districts = District::all();
        return view('admin.running-project.create', compact('runningProject', 'districts'));
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
            'project_name'=>'required',
            'loan_type'=>'required',
            'project_type'=>'required',
            'project_amount'=>'required',
            'loan_amount'=>'required',
            'location'=>'required',
            'loan_date'=>'required',
            'loan_taken_by'=>'required',   
        ]);
        $project = RunningProject::findOrFail($id);
        $project->update([
            'project_name'=>$request->project_name,
            'loan_type'=>$request->loan_type,
            'project_type'=>$request->project_type,
            'project_amount'=>$request->project_amount,
            'loan_amount'=>$request->loan_amount,
            'loan_taken_by'=>$request->loan_taken_by,
            'location'=>$request->location,
            'loan_date'=>$request->loan_date, 
        ]);
        return redirect('admin/running/project')->with('success', 'Running Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $project = RunningProject::findOrFail($id);
        $project->delete();
        $request->session()->flash('success','Project deleted');
        return redirect()->back();
    }

    public function filterRunningProject()
    {
        if(!empty($_GET['type']))
        {
            $projects = RunningProject::where('loan_type', $_GET['type'])->get();
        }else
        {
            $projects = RunningProject::all();

        }
        return $projects;
    }

    public function runningProjectCsv()
    {
        $projects = $this->filterRunningProject();
        $fileName = 'Running-Projects.csv';  
       $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0",
            "Content-Encoding"   =>"UTF-8"
        );
       
        $columns = 
        array('क्र.सं','परियोजनाको नाम','ऋण लिएको मिति','परियोजनाको प्रकार','रकम','ऋण रकम', 'परियोजनाको ठेगाना');

        $callback = function() use($projects, $columns) {
            $file =fopen('php://output', 'a');
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
            fputcsv($file, $columns);
            $count = 0;
            foreach($projects as $project) {
                $count++;
                $row['क्र.सं']  = $count;
                $row['परियोजनाको नाम']    = $project->project_name;
                $row['ऋण लिएको मिति']    = $project->loan_date;
                $row['परियोजनाको प्रकार']  = $project->project_type;
                $row['रकम']  = $project->project_amount;
                $row['ऋण रकम']  = $project->loan_amount;
                $row['परियोजनाको ठेगाना']  = $project->location;
                  
                fputcsv($file, array($row['क्र.सं'], $row['परियोजनाको नाम'], $row['ऋण लिएको मिति'],$row['परियोजनाको प्रकार'], $row['रकम'],$row['ऋण रकम'], $row['परियोजनाको ठेगाना']));
            }

            fclose($file);
        };
        
        return response()->stream($callback, 200, $headers);
       
    }
}