<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;
    public $randomPassword;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($randomPassword,$email)
    {
        $this->randomPassword = $randomPassword;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.forgetmail');
    }
}
