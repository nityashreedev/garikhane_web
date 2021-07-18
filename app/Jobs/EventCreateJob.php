<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\EventCreate;
use App\Models\User;
use App\Models\Event;
use Mail;

class EventCreateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $events;
    public $user;
    public function __construct($events, $user)
    {
          $this->events = $events;
          $this->user = $user;  
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new EventCreate($this->events);
        Mail::to($this->user->email)->queue($email); 
    }
}
