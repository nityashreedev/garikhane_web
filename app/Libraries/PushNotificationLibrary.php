<?php
namespace App\Libraries;

use Illuminate\Http\Request;
use App\Models\MobileUserAuth;
use App\Models\Notification;
use App\Models\User;

class PushNotificationLibrary
{

    protected $request;
    protected $serverKey;
    protected $url;

    /**
     * Defining constructor
     */
    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->serverKey = env('FCM_SERVER_KEY');
        $this->url       = "https://fcm.googleapis.com/fcm/send";
    }

    /**
     * Fcm push notification
     * @param array $regIds
     * @param string $title
     * @param string $body
     *
     * @return mixed
     */
    public static function sendPushNotification($regIds, $title, $body, $badge = 1, $screen = 'main', $color = 'default',$type, $itemID)
    {
        
            $sound = 'orangeAndRedSound.mp3';
            \Log::info('!!!!!!!!!!!');
            \Log::info($regIds);
           
        if (!empty($regIds)) {
       
            $androidUsers = MobileUserAuth::whereNotNull('fcm_token')->where('device_type', 'android')->pluck('fcm_token')->toArray();
            
            \Log::info('android users');
            \Log::info($androidUsers);
            //get ios users IDs
            $iosUsers = MobileUserAuth::whereNotNull('fcm_token')->where('device_type', 'ios')->pluck('fcm_token')->toArray();
         
            \Log::info('ios users');
            \Log::info($iosUsers);

            /********************** IOS PUSH ***********************/
            $regIdChunk=array_chunk($iosUsers,1000);
           
            foreach($regIdChunk as $RegId){
               
            $msg = array
                (
                 'body'             => $body,
                 'type'             =>$type,   
                'title'             => $title,
                'vibrate'           => 1,
                'sound'             => $sound,
                'screen'            => $screen,
                'color'            => $color,
                'badge'             => $badge,
                'itemID'            => $itemID,
                'content-available' => 1,                    
                );
                           

                $fields = array
                (

                    'registration_ids' => $RegId,
                    'data' => $msg,
                    'notification' => ['title' => $title, 'body' => $body,'sound' => $sound]
                );
                $headers = array
                (
                    'Authorization: key=' . \App\contants\Constant::FCM_SERVER_KEY,
                    'Content-Type: application/json',
                );

                try {
                    $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                $result = curl_exec($ch);
                \Log::info('Push Notification result');
                \Log::info($result);
                curl_close($ch);
                
                } catch (\Throwable $th) {
                    \Log::info("curl_error");
                    \Log::info($th->getMessage());
                }

            }

            /**********************************************************************/

            /******************************* Android PUSH ****************************/
            $regIdChunk=array_chunk($androidUsers,1000);
        
            foreach($regIdChunk as $RegId) {
                $msg = array
                (
                'body'              => $body,
                'type'              =>$type,
                'title'             => $title,
                'vibrate'           => 1,
                'sound'             => $sound,
                'screen'            => $screen,
                'color'            => $color,
                'badge'             => $badge,
                'itemID'            => $itemID,
                'content-available' => 1,  
                );
                
                $fields = array
                (

                    'registration_ids' => $RegId,
                    'data' => $msg,
                );

                $headers = array
                (
                    'Authorization: key=' . \App\contants\Constant::FCM_SERVER_KEY,
                    'Content-Type: application/json',
                );
                try {
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                    $result = curl_exec($ch);
                    \Log::info('Push Notification result Androids');
                    \Log::info($result);
                    curl_close($ch);
                } catch (\Throwable $th) {
                    \Log::info("curl_error");
                    \Log::info($th->getMessage());
                }               
            }
            /*****************************************/

            Notification::create([
                'send_to'=> 'All',
                'type'=>$type,
                'item_id'=>$itemID,
                'title'=> $title,
                'body'=> $body,
            ]);
        } else {
            return 2;
        }
    }


    public static function sendFcmNotifications( $userIDs = [], $title, $body, $badge = 1, $screen = 'main', $color= 'default', $itemID = 0,$thread_log_id=0)
    {
        if ($color =='#359f1d' )
            $sound = 'greenSound.mp3';
        elseif ($color == '#cf1110'|| $color== '#e8950e') //red and yellow
            $sound = 'orangeAndRedSound.mp3';
        else
            $sound = 'default';

        if (!empty($userIDs)) {
           
            //get all android users 
           
            $androidUsers = MobileUserAuth::whereNotNull('fcm_token')->where('device_type', 'android')->whereIn( 'user_id',$userIDs)->pluck('fcm_token')->toArray();
            
            \Log::info('%%%%%%%%%%%%%%%% and');
            \Log::info($androidUsers);
            //get ios users IDs
            $iosUsers = MobileUserAuth::whereNotNull('fcm_token')->where('device_type', 'ios')->whereIn('user_id', $userIDs)->pluck('fcm_token')->toArray();
         
            \Log::info('%%%%%%%%%%%%%%%% ios');
            \Log::info($iosUsers);
     

            /********************** IOS PUSH ***********************/
            $regIdChunk=array_chunk($iosUsers,1000);
           
            foreach($regIdChunk as $RegId){
                
            $msg = array
                (
                    'body' => $body,
                    'title' => $title,
                    'vibrate' => 1,
                    'sound' => $sound,
                    'screen' => $screen,
                    'color' => $color,
                    'badge' => $badge,
                    'itemID' => $itemID,
                    'content-available' => 1,
                    'thread_log_id'=>$thread_log_id,      
                );

                $fields = array
                (

                    'registration_ids' => $RegId,
                    'data' => $msg,
                    'notification' => ['title' => $title, 'body' => $body,'sound' => $sound]
                );

                $headers = array
                (
                    'Authorization: key=' . \App\contants\Constant::FCM_SERVER_KEY,
                    'Content-Type: application/json',
                );

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                $result = curl_exec($ch);
                \Log::info('Push NOtification result');
                \Log::info($result);
                curl_close($ch);

            }

            /**********************************************************************/



            /******************************* Android PUSH ****************************/
            $regIdChunk=array_chunk($androidUsers,1000);
        
            foreach($regIdChunk as $RegId) {
                $msg = array
                (
                    'body' => $body,
                    'title' => $title,
                    'vibrate' => 1,
                    'sound' => $sound,
                    'screen' => $screen,
                    'color' => $color,
                    'badge' => $badge,
                    'itemID' => $itemID,
                    'content-available' => 1,
                    'thread_log_id'=>$thread_log_id,
                );

                $fields = array
                (

                    'registration_ids' => $RegId,
                    'data' => $msg,
                    // 'notification'     => ['title' => $title, 'body' => $body],
                );


                $headers = array
                (
                    'Authorization: key=' . \App\contants\Constant::FCM_SERVER_KEY,
                    'Content-Type: application/json',
                );
                /* curl_setopt($ch, CURLOPT_URL, 'https://android.googleapis.com/gcm/send'); */
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send'); 
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                $result = curl_exec($ch);
                curl_close($ch);
            }
            /*****************************************/

        } else {
            return 2;
        }
    }

    public static function SpecificUserNotification($regIds, $title, $body, $badge = 1, $screen = 'main', $color = 'default', $type, $itemID)
    {
        
        $sound = 'orangeAndRedSound.mp3';
        $RegId[] = $regIds->fcm_token;  
        if (!empty($regIds)) {
  
            $msg = array
                (
                    'body'              => $body,
                    'title'             => $title,
                    'vibrate'           => 1,
                    'sound'             => $sound,
                    'screen'            => $screen,
                    'color'            => $color,
                    'badge'             => $badge,
                    'itemID'            => $itemID,
                    'content-available' => 1,                    
            );
            if($regIds->device_type == 'ios')
            {
                $fields = array
                (
                   'registration_ids' => $RegId,
                    'data' => $msg,
                    'notification' => ['title' => $title, 'body' => $body,'sound' => $sound]
                );
            }else
            {
                $fields = array
                (
                    'registration_ids' => $RegId,
                    'data' => $msg,
                );
            }
            $headers = array
            (
                'Authorization: key=' . \App\contants\Constant::FCM_SERVER_KEY,
                'Content-Type: application/json',
            );

            try {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                $result = curl_exec($ch);
                \Log::info('Push Notification result');
                \Log::info($result);
                curl_close($ch);
            
            } catch (\Throwable $th) {
                \Log::info("curl_error");
                \Log::info($th->getMessage());
            }

            $fname= User::find($regIds->user_id)->fname;
            $lname= User::find($regIds->user_id)->lname;
            Notification::create([
            'send_to'=> $fname.' '.$lname,
            'type'=>$type,
            'item_id'=>$itemID,
            'title'=> $title,
            'body'=> $body,
            ]);
        }else {
        return 2;
        }
    }

}