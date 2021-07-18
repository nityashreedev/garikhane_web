<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Notice;
use App\Models\Job;
use App\Models\Service;
use App\Models\Popup;
use App\Models\UserIp;
use App\Models\ProjectBankIdea;
use App\Models\GariKhanneProject;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      $ip = request()->ip();
      $old_user = UserIp::updateOrCreate([
        'ip'=>$ip,
      ]);
        
       $events = Event::where('status', 1)->latest()->take(6)->get();
       $jobs = Job::where(['status'=>1, 'publish'=>'1'])->latest()->limit(3)->get();
       $banners = Banner::all();
       $testimonials = Testimonial::all();
       $partners = Partner::all();
       $programs = Service::all();
       $jobcount = Job::all()->count();
       $eventcount = Event::all()->count();
       $projectcount = ProjectBankIdea::all()->count();
       $garikhanneproject = GariKhanneProject::orderBy('created_at','desc')->limit(2)->get();
       $notice = Notice::where('status', 1)->latest()->get();
       $popup = Popup::where('status',1)->first();
       if(!Session::get('variableName'))
       {
           //Session::put('variableName', 'hello');
           
       }
       else
       {
           //Session::forget('variableName');
       }
        // return view('welcome3')->with(compact('events','banners','testimonials','partners','services','popup'));
        return view('index')->with(compact('events','banners','notice','testimonials','partners','programs','jobcount','eventcount','projectcount','jobs','garikhanneproject','popup'));
    }

    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }
}
