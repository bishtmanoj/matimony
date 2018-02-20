<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
Use App\User;
use Carbon\Carbon;

class UserVerification extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $reset = $this->user->resets()->create([
            'token' => uniqid(),
            'created_at' => Carbon::now()
        ]);

        return $this->markdown('emails.users.email-verification',['user' => $this->user, 'reset' => $reset]);
    }
}
