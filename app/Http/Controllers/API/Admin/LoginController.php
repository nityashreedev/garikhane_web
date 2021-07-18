<?php
namespace App\Http\Controllers\API\Admin;

use App\Models\MobileUser;
use App\Models\User;
use App\Models\MobileUserAuth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function login(Request $request) {
            try {
                if (!$request->has('email')
                    || !$request->has('password')) {
                   $response =[
                        'status'=>200,
                        'error'=>true,
                        'message'=>'No email or password'
                   ];
                   return response()->json($response);
                   exit;
                }

                $email = $request->get('email');
                $password = $request->get('password');

                $user = User::where('email', $email)->first();
                if(!$user) {

                    $response =[
                        'status'=>200,
                        'error'=>true,
                        'message'=>'The email doesnot exist in our database'
                   ];
                   return response()->json($response);
                   exit;
                }

                $is_login = password_verify($password, $user->password);

                if($is_login) {
                    $data['userId'] = $user->id;
                    $data['email'] = $user->email;
                    $data['fname'] = $user->fname;
                    $data['lname'] = $user->lname;
                    $auth_code = Str::random(28);

                    $token = MobileUserAuth::where(['fcm_token'=> $request->fcm_token])->first();

                    if($token) {
                        $input['user_id'] = $user->id;
                        $input['auth_token'] = $auth_code;
                        $input['expired_at'] = Carbon::now()->addDay(25);
                        $input['is_active'] = 1;
                        $input['fcm_token'] = $request->get('fcm_token');
                        $input['device_type'] = $request->get('device_type');
                        $token->fill($input)->save();

                    }else{

                        $input['user_id'] = $user->id;
                        $input['auth_token'] = $auth_code;
                        $input['expired_at'] = Carbon::now()->addDay(25);
                        $input['is_active'] = 1;
                        $input['fcm_token'] = $request->get('fcm_token');
                        $input['device_type'] = $request->get('device_type');
                        MobileUserAuth::create($input);
                    }

                    $data['auth_token'] = $auth_code;

                    $response['status'] = Response::HTTP_OK;
                    $response['error'] = false;
                    $response['message'] = 'Login Successful';

                } else {
                    $response =[
                        'status'=>200,
                        'error'=>true,
                        'message'=>'Email or password do not matched'
                   ];
                   return response()->json($response);
                   exit;
                }

                $response['data'] = $data;

                return response()->json($response, Response::HTTP_OK);

            } catch (\Exception $exception) {

                $code = !empty($exception->getCode()) ? $exception->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR;
               
                $response = [
                    'status' => 200,
                    'error' => true,
                    'message' =>"Incorrect Email or password",
                    'data' =>null,
                ];
                return response()->json($response);
            }
    }
}
