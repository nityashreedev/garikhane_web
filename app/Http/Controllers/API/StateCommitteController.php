<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commite;

class StateCommitteController extends Controller
{
    public function state1()
    {
        $commite = Commite::where(['type'=>'state committe', 'state'=>'प्रदेश नं १'])->get();

        if(count($commite)) {
               foreach($commite as $item)
               {
                $commites[] = [
                    'id'=>$item->id,
                    'name' => $item->name,
                     'position' => $item->position,
                    'image' =>url('images/commite/'.$item->image)
                ];
               }
          
            $response = [
                'data' => $commites,
                'status' => 200,
                'error' => false,
                'message' => 'Commite Member of state no 1'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no  Commitee Member added for State 1'
            ];
        }

        echo json_encode($response);
        exit;
    }

    public function state2()
    {
        $commite = Commite::where(['type'=>'state committe', 'state'=>'प्रदेश नं २'])->get();

        if(count($commite)) {
               foreach($commite as $item)
               {
                $commites[] = [
                    'id'=>$item->id,
                    'name' => $item->name,
                     'position' => $item->position,
                    'image' =>url('images/commite/'.$item->image)
                ];
               }
            $response = [
                'data' => $commites,
                'status' => 200,
                'error' => false,
                'message' => 'Commite Member of state no 2'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no  Commitee Member added for State no 2'
            ];
        }

        echo json_encode($response);
        exit;
    }

    public function bagmati()
    {
        $commite = Commite::where(['type'=>'state committe', 'state'=>'बागमती प्रदेश'])->get();

        if(count($commite)) {
               foreach($commite as $item)
               {
                $commites[] = [
                    'id'=>$item->id,
                    'name' => $item->name,
                     'position' => $item->position,
                    'image' =>url('images/commite/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $commites,
                'status' => 200,
                'error' => false,
                'message' => 'Commite Member of bagmati pradesh'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no  Commitee Member added for Bagmati pradesh'
            ];
        }

        echo json_encode($response);
        exit;
    }

    public function gandaki()
    {
        $commite = Commite::where(['type'=>'state committe', 'state'=>'गण्डकी प्रदेश'])->get();

        if(count($commite)) {
               foreach($commite as $item)
               {
                $commites[] = [
                    'id'=>$item->id,
                    'name' => $item->name,
                     'position' => $item->position,
                    'image' =>url('images/commite/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $commites,
                'status' => 200,
                'error' => false,
                'message' => 'Commite Member gandaki pradesh'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no  Commitee Member added for Gandaki state'
            ];
        }

        echo json_encode($response);
        exit;
    }

    public function lumbini()
    {
        $commite = Commite::where(['type'=>'state committe', 'state'=>'लुम्बिनी प्रदेश'])->get();

        if(count($commite)) {
               foreach($commite as $item)
               {
                $commites[] = [
                    'id'=>$item->id,
                    'name' => $item->name,
                     'position' => $item->position,
                    'image' =>url('images/commite/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $commites,
                'status' => 200,
                'error' => false,
                'message' => 'Commite Member of lumbini pradesh'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no  Commitee Member added for Lumbini'
            ];
        }

        echo json_encode($response);
        exit;
    }

    public function karnali()
    {
        $commite = Commite::where(['type'=>'state committe', 'state'=>'कर्णाली प्रदेश'])->get();

        if(count($commite)) {
               foreach($commite as $item)
               {
                $commites[] = [
                    'id'=>$item->id,
                    'name' => $item->name,
                     'position' => $item->position,
                    'image' =>url('images/commite/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $commites,
                'status' => 200,
                'error' => false,
                'message' => 'Commite Member of karnali Pradesh'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no  Commitee Member added for Karnali Pradesh'
            ];
        }

        echo json_encode($response);
        exit;
    }

    public function sudurpaschim()
    {
        $commite = Commite::where(['type'=>'state committe', 'state'=>'सुदुरपश्चिम प्रदेश'])->get();

        if(count($commite)) {
               foreach($commite as $item)
               {
                $commites[] = [
                    'id'=>$item->id,
                    'name' => $item->name,
                     'position' => $item->position,
                    'image' =>url('images/commite/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $commites,
                'status' => 200,
                'error' => false,
                'message' => 'Commite Member of sudurpaschim state'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no  Commitee Member added for Sudurpaschim state'
            ];
        }

        echo json_encode($response);
        exit;
    }
}