<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function credentials(Request $request)
    {
      if(is_numeric($request->get('email'))){
        return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
      }
      elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
        return ['email' => $request->get('email'), 'password'=>$request->get('password')];
      }
     
    }
    public function login(Request $request)
    {

        if(is_numeric($request->get('email'))){

        if (Auth::attempt(['phone' => $request->email, 'password' => $request->password,'role'=>'admin'])) {
          
                return redirect()->intended('admin/dashboard');
             }
             elseif(Auth::attempt(['phone' => $request->email, 'password' => $request->password]))
             {
                return redirect()->intended('/');
             }
           
        
        else{

            $request->session()->flash('failure', 'Wrong user name or password');
            return view('auth.login');
        }
    }
    else
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'role'=>'admin'])) {
          
            return redirect()->intended('admin/dashboard');
         }
         elseif(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
         {
            return redirect()->intended('/');
         }
       
    
    else{

        $request->session()->flash('failure', 'Wrong user name or password');
        return view('auth.login');
    }
    }
    }
     public function logout(Request $request) {
       
            Auth::logout();
            
            return redirect('/');
    }
}
