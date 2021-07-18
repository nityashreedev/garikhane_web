<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;

class SocialLoginController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        
        $get_info = Socialite::driver($provider)->stateless()->user();
        
      
        $user = $this->createUser($get_info,$provider);
      
        auth()->login($user);
        if($user->id == 33)
        {
            return redirect()->to('admin/dashboard');
        }
        else
        {
            if(empty($user->email) ||empty($user->fname) ||empty($user->lname) ||empty($user->address) ||empty($user->phone))
                    {
                        return redirect()->to('/user/profile');
                    }
                    else
                    {
                         return redirect()->to('/');
                    }
            
        }
        
    }

    public function createUser($get_info,$provider)
    {
        $user = User::where('provider_id', $get_info->id)->first();
        if(!$user)
        {
            $user = User::create([
                'name' =>$get_info->name,
                'email' =>isset($get_info->email) ? $get_info->email : 'demo@gmail.com',
                'provider' => $provider,
                'provider_id' =>$get_info->id,
                'password' => md5(rand(1,10000)),
            ]);
            
        }
        return $user;


    }
    
}
