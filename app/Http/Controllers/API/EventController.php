<?php

namespace App\Http\Controllers\API;


use App\Models\Event;
use App\Models\UserJob;
use App\Models\UserEvent;
use App\Models\MobileUser;
use App\Models\MobileUserAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index(Request $request)
    {
        /*
         * url:{{live}}/api/events
         
         * method: get
         *
         * */  
         $event = Event::where('status', '1')->orderBy('created_at','desc')->take(10)->get();
            if($request->page == 1)
                {
                     $event = Event::orderBy('created_at','desc')->take(10)->get();
                }
             elseif($request->page != 1){
                     $skip = 10 * $request->page -10;
                    $event = Event::where('status', '1')->orderBy('created_at','desc')->skip($skip)->take(10)->get();
                     if( count($event) < 1){
 
                        $response = [
                        'status' => 200,
                        'error' => false,
                        'message' => 'no more events',
                        'data' => []
                        ];
                        echo json_encode($response);
                        exit();
                    }

             }
     

        if($event) {
            $events = [];

            foreach ($event as $item) {
                $events[] = [
                    'id' =>$item->id,
                    'title' => $item->title,
                    'description' => strip_tags($item->description),
                     'image' =>url('images/event/'.$item->image),
                      'location'=>$item->location,
                      'date' =>$item->date,
                ];
            }

            $response = [
                'data' => $events,
                'status' => 200,
                'error' => false,
                'message' => 'Event List'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no event added'
            ];
        }

        echo json_encode($response);
        exit;
    }
     public function eventdetail(Request $request)
    {
        /*
         * url:{{live}}/api/events/detail
         * params: event_id
         * method: get
         *
         * */

        if(!is_null($request->auth_token))
        {
            $user_auth = MobileUserAuth::where('auth_token', $request->auth_token)->first();
            if($user_auth)
            {
                $user_id = $user_auth->user_id;
                $interested_user =  UserEvent::where(['user_id'=>$user_id, 'event_id'=>$request->event_id])->first();
                if($interested_user)
                {
                    $interested = 'true';
                }else
                {
                    $interested = 'false';
                }
            }else
            {
                $interested = 'false';
            }
        }else
        {   
            $interested = 'false';
            
        }

        $event = Event::findOrFail($request->event_id);

        if($event) {

                $events[] = [
                    'id'=>$event->id,
                    'title' => $event->title,
                    'description' =>$event->description,
                    'price' =>$event->price,
                    'location'=>$event->location,
                    'date' =>$event->date,
                    'image' =>url('images/event/'.$event->image),
                    'interested'=>$interested,
                ];
          
            $response = [
                'data' => $events,
                'status' => 200,
                'error' => false,
                'message' => 'Event Detail'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no event added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
    
    
    
    
    
    
    
    public function interested(Request $request)
    {
        /*
         * url:{{live}}/api/interested
         * params: auth_token,type,post_id
         * method: post
         *
         * */
        try{
            
           
            $auth_token = $request->get('auth_token');

        /* how to ge user details from auth token*/
        $userAuthToken = MobileUserAuth::where('auth_token', $auth_token)->first();
        $user_id =  $userAuthToken->user_id;
            if($request->type == 'event')
            {
                $postuser = UserEvent::where('user_id',$user_id)->where('event_id',$request->post_id)->where('type','mobile')->first();
                if($postuser)
                    {
                     
                        $response = [
                            'status' => 200,
                            'error' => false,
                            'message' => 'Your response is already  recorded'
                        ];
                        echo json_encode($response);
                         exit;
                    }
                else
                    {
                          $eventuser = new UserEvent();
                            $eventuser->user_id = $user_id;
                            $eventuser->event_id = $request->post_id;
                              $eventuser->type = 'mobile';
                            $eventuser->save();
                            
                            $response = [
                            'status' => 200,
                            'error' => false,
                            'message' => 'Your response is  recorded'
                        ];
                        echo json_encode($response);
                         exit;
                     }
            }
            
            elseif($request->type == 'job')
            {
                $postuser = UserJob::where('user_id',$user_id)->where('job_id',$request->post_id)->where('type','mobile')->first();
                if($postuser)
                    {
                     
                        $response = [
                            'status' => 200,
                            'error' => false,
                            'message' => 'Your response is already  recorded'
                        ];
                        echo json_encode($response);
                        exit;
                    }
                else
                    {
                          $eventuser = new UserJob();
                            $eventuser->user_id = $user_id;
                            $eventuser->job_id = $request->post_id;
                              $eventuser->type = 'mobile';
                            $eventuser->save();
                            
                            $response = [
                            'status' => 200,
                            'error' => false,
                            'message' => 'Your response is  recorded'
                        ];
                        echo json_encode($response);
                        exit;
                     }
            }
           

        } catch (\Exception $exception) {

            $code = !empty($exception->getCode()) ? $exception->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR;

            $response = [
                'status' => 200,
                'error' => true,
                'message' => $exception->getMessage(),
                'data' => []
            ];

            return response()->json($response);
        }
    }
    
}
