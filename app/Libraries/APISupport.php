<?php
/**
 * Created by PhpStorm.
 * User: Rakshya
 * Date: 8/17/2018
 * Time: 7:23 AM
 */

namespace App\Libraries;


use App\Models\AdminUserAuthToken;
use App\Models\MobileUser;
use App\Models\UserAuthToken;

class APISupport
{
    public static function ApiAuth()
    {
        $request = request();
        $auth_token = $request->get('auth_token');
        $userAuthToken = UserAuthToken::where('auth_token', $auth_token)->first();
        $userId = $userAuthToken->user_id;

        return (object) [
            'user_id' => $userId
        ];
    }

    public static function ApiAuthAdmin()
    {
        $request = request();
        $auth_token = $request->get('auth_token');
        //$userAuthToken = AdminUserAuthToken::where('auth_token', $auth_token)->first();
        $userAuthToken = UserAuthToken::where('auth_token', $auth_token)->first();
        $userId = $userAuthToken->user_id;

        return (object) [
            'user_id' => $userId
        ];
    }

    public static function authUser()
    {
        $user = self::ApiAuth();
        $user_id = $user->user_id;

        $user = MobileUser::find($user_id);

        return $user;
    }
}