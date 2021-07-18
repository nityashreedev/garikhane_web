<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use App\Models\MobileUserAuth;
use App\Models\User;
use App\Libraries\PushNotificationLibrary;
use App\Models\Notification;
use App\Models\YearlyProduction;
use App\Models\FixedCapital;

class TestController extends Controller
{
    public function printjson(Request $request)
    {
        $data = $request->all();
        Storage::disk('local')->put('karmabhomi-json.txt', $data);
        $response = [
            'status' => 200,
            'error' => false,
            'message' => 'Request received and written to a file',
        ];
        echo json_encode($response);
        exit();

    }

    public function test()
    {      
        $users = MobileUserAuth::whereNotNull('fcm_token')->get(); 
        PushNotificationLibrary::sendPushNotification($users, 'Karmabhomi', ' New Job has added', 1, 'main', 'default', 'Job', 3);
    }

    public function notifications(Request $request)
    {
        $per_page=($request->per_page ? $request->per_page : 10);
        
        $notifications = Notification::paginate($per_page);
         $response = [
                'status' => 200,
                'error' => false,
                'message' => 'All Notifications',
                'results'=>$notifications
            ];
         echo json_encode($response);
        exit;
    }

    public function testform(Request $request)
    {
        \Log::info("test array input");
        \Log::info($request);
       return $request;
        $production = $request->yearly_production;
        \Log::info("test array input");
        \Log::info($production);
        foreach($request->yearly_production as $pro)
        {
            YearlyProduction::create([
                'karmabhomi_id'=>15,
                'product'=>$pro['ans1'],
                'qty'=>$pro['ans2'],
                'price'=>$pro['ans3'],
                'remarks'=>$pro['ans4'],
            ]);
        }

        foreach($request->fixed_capital as $fixed)
        {
            FixedCapital::create([
                'karmabhomi_id'=>15,
                'fixed_property'=>$fixed['ans1'],
                'approx_price'=>$fixed['ans2'],
                'details'=>$fixed['ans3'],
                'remarks'=>$fixed['ans4'],
            ]);
        }
    }
}
