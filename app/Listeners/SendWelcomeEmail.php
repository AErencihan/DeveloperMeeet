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
     * @param  string  $event
     * @return void
     */
    public function handle(string $event): void
    {
        Mail::to($event)->send(new WelcomeEmail($event));
    }
}
