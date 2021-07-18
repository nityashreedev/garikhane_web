<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use App\Models\Event;
use App\Models\Job;
use App\Models\UserIp;
use App\Models\Service;
use App\Models\Notice;

use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
          
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $setting = Setting::findOrFail(1);
        View::share('setting',$setting );
        $events = Event::orderBy('id','desc')->take(3)->get();
        View::share('events',$events );
        $Jobs = Job::orderBy('created_at','desc')->take(3)->get();
        View::share('Jobs',$Jobs );
        $Programs = Service::orderBy('id','asc')->take(4)->get();
        View::share('Programs',$Programs );
        $user_counts = UserIp::all()->count();
        View::share('user_counts', $user_counts);
        $notices = Notice::where('status', 1)->latest()->get();
        View::share('notices', $notices);
    }
}
