<?php

namespace App\Http\Controllers\API\Admin;

use App\Models\MobileUser;
use App\Models\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\MobileUserAuth;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
   
    public function register(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ]);
        if ($validator->fails()) {
          $response = [
            'status' => 422,
            'error' => true,
            'message' => 'Validation errors, Please check the form',
          ];
        return response()->json($response);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        // $success['token'] = $user->createToken('appToken')->accessToken;
        return response()->json([
          'success' => true,
          'user' => $user,
          'message'=>'User registered',
      ]);
    }

    public function get_fcm(Request $request)
    {
      MobileUserAuth::updateOrCreate([
        'fcm_token'=>$request->fcm_token,
        'device_type'=>$request->device_type,
        'is_active'=>1,
      ]);
      $response = [
        'status' => 200,
        'error' => false,
        'message' => 'Fcm token stored',
        'data' => []
    ];
    return json_encode($response, JSON_FORCE_OBJECT);


    }
}
