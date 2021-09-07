<?php

namespace App\Http\Controllers\API;


use App\Models\GariKhanneProject;
use App\Models\ProjectBankIdea;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function garikhanneproject(Request $request)
    {
        /*
         * url:{{live}}/api/garikhanneproject
         * params: auth_token
         * method: get
         *
         * */
        $garikhanneproject = GariKhanneProject::orderBy('created_at','desc')->take(10)->get();
        if($request->page == 1)
                {
                     $garikhanneproject = GariKhanneProject::orderBy('created_at','desc')->take(10)->get();
                }
             elseif($request->page != 1){
                     $skip = 10 * $request->page -10;
                    $garikhanneproject = GariKhanneProject::orderBy('created_at','desc')->skip($skip)->take(10)->get();
                     if( count($garikhanneproject) < 1){
 
                        $response = [
                        'status' => 200,
                        'error' => false,
                        'message' => 'no more garikhanne projects',
                        'data' => []
                        ];
                        echo json_encode($response);
                        exit();
                    }
 
             }

        

        if($garikhanneproject) {
            $garikhanneprojects = [];

            foreach ($garikhanneproject as $item) {
                $garikhanneprojects[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'description' => strip_tags($item->description),
                    'image' =>url('images/garikhanneproject/'.$item->image),
                ];
            }

            $response = [
                'data' => $garikhanneprojects,
                'status' => 200,
                'error' => false,
                'message' => 'Garikhanne Project List'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no garikhanne project added'
            ];
        }

        echo json_encode($response);
        exit;
    }
     public function garikhanneprojectdetail(Request $request)
    {
        /*
         * url:{{live}}/api/garikhanneproject/detail
         * params: project_id
         * method: get
         *
         * */
        $garikhanneproject = GariKhanneProject::findOrFail($request->project_id);

        if($garikhanneproject) {

                $garikhanneprojects[] = [
                    'id' =>$garikhanneproject->id,
                    'title' => $garikhanneproject->title,
                    'description' => strip_tags($garikhanneproject->description),
                    'detail' =>$garikhanneproject->details,
                    'image' =>url('images/garikhanneproject/'.$garikhanneproject->image),
                    'date'=>date_format($garikhanneproject->created_at,"Y-m-d")
                ];
          

            $response = [
                'data' => $garikhanneprojects,
                'status' => 200,
                'error' => false,
                'message' => 'Gari Khanne project Detail'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no job added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
    
      public function projectideabank(Request $request)
    {
        /*
         * url:{{live}}/api/projectideabank
         * params: project_id
         * method: get
         *
         * */
        // $projectideabank = ProjectBankIdea::orderBy('created_at','desc')->where('project_id',$request->project_id)->take(10)->get();
        if($request->page == 1)
                {
                     $projectideabank = ProjectBankIdea::take(10)->get();
                }
             elseif($request->page != 1){
                     $skip = 10 * $request->page -10;
                    $projectideabank = ProjectBankIdea::skip($skip)->take(10)->get();
                     if( count($projectideabank) < 1){
 
                        $response = [
                        'status' => 200,
                        'error' => false,
                        'message' => 'no more project bank idea',
                        'data' => []
                        ];
                        echo json_encode($response);
                        exit();
                    }
 
             }
        

        if($projectideabank) {
            $projectideabanks = [];

            foreach ($projectideabank as $item) {
                $projectideabanks[] = [
                    'id'=>$item->id,
                    'title' => $item->name,
                    'sector' => $item->sector,
                    'location' => $item->location,
                    'reference'=>$item->reference,
                    'file'=>$item->pdf? url('images/projectbank/pdf/'.$item->pdf):'',
                    'link'=>$item->link? $item->link:'',
                    'image' =>url('images/projectbank/'.$item->image),
                ];
            }

            $response = [
                'data' => $projectideabanks,
                'status' => 200,
                'error' => false,
                'message' => ' Project Idea Bank List'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no  project added'
            ];
        }

        echo json_encode($response);
        exit;
    }
     public function projectideabankdetail(Request $request)
    {
        /*
         * url:{{live}}/api/garikhanneproject/detail
         * params: project_id
         * method: get
         *
         * */
        $projectideabank = ProjectBankIdea::findOrFail($request->project_id);

        if($projectideabank) {

                $projectideabanks[] = [
                    'id' =>$projectideabank->id,
                    'title' => $projectideabank->name,
                    'sector' => $projectideabank->sector,
                     'location' => $projectideabank->location,
                    'description' => strip_tags($projectideabank->description),
                    'project_component' => strip_tags($projectideabank->project_component),
                    'market_opportunity' => strip_tags($projectideabank->market_opportunity),
                     'success_example' => strip_tags($projectideabank->success_example),
                    'd_i_modality' => strip_tags($projectideabank->d_i_modality),
                    'project_cost' =>$projectideabank->project_cost,
                    'irr' =>$projectideabank->irr,
                    'reference' => strip_tags($projectideabank->reference),
                   
                    'image' =>url('images/projectbank/'.$projectideabank->image),
                    'date'=>date_format($projectideabank->created_at,"Y-m-d")
                ];
          

            $response = [
                'data' => $projectideabanks,
                'status' => 200,
                'error' => false,
                'message' => 'Gari Khanne project Detail'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no job added'
            ];
        }

        echo json_encode($response);
        exit;
    }

    public function notifications(Request $request)
    {
        $per_page=($request->per_page ? $request->per_page : 10);
        
        $notifications = Notification::latest()->paginate($per_page);
         $response = [
                'status' => 200,
                'error' => false,
                'message' => 'All Notifications',
                'results'=>$notifications
            ];
         echo json_encode($response);
        exit;
    }
    
}
