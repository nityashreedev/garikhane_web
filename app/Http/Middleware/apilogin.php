<?php

namespace App\Http\Middleware;

use App\Models\MobileUser;
use App\Models\MobileUserAuth;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;

class apilogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth_token = $request->get('auth_token');
        if (!$auth_token) {

            http_response_code(401);

            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Authentication error, No Auth Token'
            ];

            echo json_encode($response);
            exit();
        }

        $userAuthToken = MobileUserAuth::where('auth_token', $auth_token)->first();

        $response = [
            'data' => [],
            'status' => 200,
            'error' => true,
            'message' => 'Authentication error'
        ];

        if ($userAuthToken) {

            $id = $userAuthToken->user_id;
            $user = User::find($id);
            if (!$user) {
                echo json_encode($response);
                exit();
            }

            $current_timestamp = Carbon::now();

            if (strtotime($userAuthToken->expired_at) < strtotime($current_timestamp) || $userAuthToken->is_active == 0) {
                http_response_code(401);
                $response = [
                    'status' => 200,
                    'error' => true,
                    'message' => 'Your login token is expired'
                ];
                echo json_encode($response);
                exit();
            }

        } else {
            http_response_code(401);
            echo json_encode($response);
            exit();
        }

        return $next($request);
    }
    
}
