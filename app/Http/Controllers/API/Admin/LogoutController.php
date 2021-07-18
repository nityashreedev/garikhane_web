<?php

namespace App\Http\Controllers\API\Admin;

use App\Models\MobileUser;
use App\Models\MobileUserAuth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgetPasswordMail;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {

        /*calling method*/
        /*
         * url: http://127.0.0.1:8000/api/user/logout
         * params: auth_token
         * method: get
         *
         * */

        $auth_token = $request->get('auth_token');

        /* how to ge user details from auth token*/
        $userAuthToken = MobileUserAuth::where('auth_token', $auth_token)->first();
      
        $input['expired_at'] = Carbon::now();
        $input['fcm_token'] = null;
        $input['is_active'] = 0;
        $userAuthToken->fill($input)->save();
       
        $response = [
            'status' => 200,
            'error' => false,
            'message' => 'you have been successfully logged out',
        ];

        echo json_encode($response);
        exit();
    }
    public function changePassword(Request $request)
    {
        /*calling method*/
        /*
         * url: http://127.0.0.1:8000/api/login/change-password
         * params: email, new_password
         * method: post
         *
         * */

        if (!$request->has('email') || !$request->has('new_password')) {
            $response = [
                'status' => 400,
                'message' => 'Parameter are not sent properly'
            ];

            echo json_encode($response);
            exit;
        }
        $response = [
            'status' => 200,
            'message' => 'Parameter are not sent properly'
        ];

        $email = $request->get('email');
        //$old_password = $request->get('old_password');
        $user = User::where('email', $email)->first();
        /** preventing same password to use */
        if (Hash::check($request->get('new_password'),  $user->password)) {

            $response['status'] = 200;
            $response['error'] = true;
            $response['message'] = 'Sorry, You cannot use old password. Please use another.';
            echo json_encode($response);
            exit();
        }

        /*********/

        $new_password = bcrypt($request->get('new_password'));

        //if(password_verify($old_password, $user->password)) {

        $input['password'] = $new_password;
        //$input['temp_password'] = bcrypt(str_random(8));

        $user->fill($input)->save();

        $response['status'] = 200;
        $response['error'] = false;
        $response['message'] = 'Your password has been successfully changed';

        echo json_encode($response);
        exit();
    }
    public function forgetPassword(Request $request)
    {
        /*calling method*/
        /*
         * url: http://127.0.0.1:8000/api/login/forget-password
         * params: email
         * method: post
         *
         * */

        $email = $request->get('email');
       
        $user= User::where('email', $email)
        ->first();

        if ($user) {
            $randomPassword = Str::random(28);
            $chars = "abcdefgh456789!@#";
            $randomPassword= substr(str_shuffle( $chars ),0,8);

            // Mail sending code here
            Mail::to($email)->send(new ForgetPasswordMail($randomPassword,$email));
            

            $input['password'] = bcrypt($randomPassword);

            $user->fill($input)->save();

            $response = [
                'status' => 200,
                'error' => false,
                'message' => 'Temporary password is sent to your email'
            ];
        } else {
            $response = [
                'status' => 200,
                'error' => true,
                'message' => 'Unregister Email'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
    public function userprofile(Request $request)
    {
        
         $userAuthToken = MobileUserAuth::where('auth_token', $request->auth_token)->first();
         $user = User::findOrFail($userAuthToken->user_id);
         $user->fname = $request->fname;
         $user->lname = $request->lname;
         $user->address = $request->address;
         $user->phone = $request->phone;
         $user->email = $request->email ? $request->email : $user->email ;
         $user->update();
         
         
          $response = [
                'status' => 200,
                'error' => false,
                'message' => 'Successfully updated user profile'
            ];
         
         
          echo json_encode($response);
        exit;
    }
    
    public function userprofiledetail(Request $request)
    {
       
         $userAuthToken = MobileUserAuth::where('auth_token', $request->auth_token)->first();
         $user = User::findOrFail($userAuthToken->user_id);
         $data = [
             'fname' =>$user->fname ? $user->fname : '',
             'lname' =>$user->lname ? $user->lname : '',
             'address' =>$user->address ? $user->address : '',
             'phone' =>$user->phone ?(string)$user->phone: '',
             'email' =>$user->email ? $user->email : '',
             
             ];
               $response = [
                'status' => 200,
                'error' => false,
                'message' => 'user profile detail',
                'data'=>$data
            ];
         
         
          echo json_encode($response);
        exit;
             
    }
}
