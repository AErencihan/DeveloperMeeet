<?php

namespace App\Listeners;

use App\Http\Controllers\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use App\Http\WelcomeEmail;

class SendWelcomeEmail
{
    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $event->user;
        Mail::to("ali.cihan@ogr.gelisim.edu.tr")->send(new WelcomeEmail(new User));
    }
}
