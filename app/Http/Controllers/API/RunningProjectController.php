<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RunningProject;

class RunningProjectController extends Controller
{
    public function index(Request $request)
    {
         /*
         * url:{{live}}/api/running/projects
         * params:
         * method: get
         *
         * */

        $total_projects = RunningProject::count();
        if($request->page == 1)
        {
            $project = RunningProject::take(10)->get();
        }elseif($request->page != 1)
        {
            $skip = 10 * $request->page -10;
            $project = RunningProject::skip($skip)->take(10)->get();
        }

        if(count($project)) {
               foreach($project as $item)
               {
                $projects[] = [
                    'id'=>$item->id,
                    'loan_type' => $item->loan_type,
                    'project_type' => $item->project_type,
                    'location'=>$item->location,
                    'project_date'=>$item->project_date,
                ];
               } 

            $response = [
                'status' => 200,
                'error' => false,
                'message' => 'Running projects',
                'total_running_projects'=>$total_projects,
                'data' => $projects,
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no Running projects'
            ];
        }

        return response()->json($response);
        exit;
    }
}