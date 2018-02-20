<?php

namespace App\Listeners;

use App\Events\EmailVerification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EmailVerification  $event
     * @return void
     */
    public function handle(EmailVerification $event)
    {
        //
    }
}
