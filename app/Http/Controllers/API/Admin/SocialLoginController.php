<?php

namespace App\Http\Controllers\API\Admin;
use Socialite;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\MobileUserAuth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialLoginController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(Request $request)
    {
        
        // $get_info = Socialite::driver($provider)->user();
      
        // $user = $this->createUser($get_info,$provider);
        // $response = [
        //     'status' => 200,
        //     'error' => false,
        //     'message' => 'you have been successfully Login',
        // ];

        // echo json_encode($response);
        // exit();
         $user = User::where('provider_id', $request->id)->first();
        if(!$user)
        {
            $user = User::create([
                'name' =>$request->name ? $request->name : '',
                'email' =>isset($request->email) ? $request->email : '',
                'provider' => $request->provider,
                'provider_id' =>$request->id,
                'password' => md5(rand(1,10000)),
            ]); 
        }
         $detailexist = 'True';
        $token = MobileUserAuth::where(['user_id'=> $user->id])->first();
         $auth_code = Str::random(28);
                    if($token) {

                        $input['auth_token'] = $auth_code;
                        $input['expired_at'] = Carbon::now()->addDay(25);
                        $input['is_active'] = 1;
                        $input['fcm_token'] = $request->get('fcm_token');
                        $input['device_type'] = $request->get('device_type');
                        $token->fill($input)->save();

                    } else {

                        $input['user_id'] = $user->id;
                        $input['auth_token'] = $auth_code;
                        $input['expired_at'] = Carbon::now()->addDay(25);
                        $input['fcm_token'] = $request->get('fcm_token');
                        $input['device_type'] = $request->get('device_type');
                        $input['is_active'] = 1;
                        MobileUserAuth::create($input);
                    }
                    
                    if(empty($user->email) ||empty($user->fname) ||empty($user->lname) ||empty($user->address) ||empty($user->phone))
                    {
                        $detailexist = 'False';
                    }
                    
     $response = [
           'status' => 200,
           'error' => false,
            'message' => 'you have been successfully Login',
            'detailexist' => $detailexist,
            'auth_token' =>$auth_code
         ];
          echo json_encode($response);
        exit();
        
    }

    public function createUser($get_info,$provider)
    {
        $user = User::where('provider_id', $get_info->id)->first();
        if(!$user)
        {
            $user = User::create([
                'name' =>$get_info->name ? $get_info->name : '',
                'email' =>isset($get_info->email) ? $get_info->email : '',
                'provider' => $provider,
                'provider_id' =>$get_info->id,
                'password' => md5(rand(1,10000)),
            ]);
            
        }
        return $user;
    }

    //function to delete the user  facebook user details
    public function dataDeletionCallback(Request $request)
    {
        $signed_request = $request->get('signed_request');
        $data = $this->parse_signed_request($signed_request);
        $user_id = $data['user_id'];

        // here will check if the user is deleted
        $isDeleted = User::where([
            ['provider' => 'facebook'],
            ['provider_id' => $user_id]
        ])->find();

        if($isDeleted != null)
        {
            // here will delete the user base on the user_id from facebook
            User::where([
                ['provider' => 'facebook'],
                ['provider_id' => $user_id]
            ])->delete();
        }

        if($isDeleted ===null) {
            return response()->json([
                'url' => url('api/userDeletion'),
                'code' => $data['user_id'], 
            ]);
        }

        return response()->json([
            'message' => 'operation not successful'
        ], 500);
    }

    private function parse_signed_request($signed_request) {
        list($encoded_sig, $payload) = explode('.', $signed_request, 2);

        $secret = config('service.facebook.4b0f4f02ddbe766620c4a9d5affe5a03'); // Use your app secret here

        // decode the data
        $sig = $this->base64_url_decode($encoded_sig);
        $data = json_decode($this->base64_url_decode($payload), true);

        // confirm the signature
        $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
        if ($sig !== $expected_sig) {
            error_log('Bad Signed JSON signature!');
            return null;
        }

        return $data;
    }

    private function base64_url_decode($input) {
        return base64_decode(strtr($input, '-_', '+/'));
    }
}
