<?php

namespace App\Http;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @param string $name
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
        $remember_token = $this->user->remember_token;
        $reset_link = url('/resetPassword/' . $remember_token);
        return $this->subject("ŞİFRE SIFIRLAMA MAİLİ")->view('auth.reset', compact('reset_link'));
    }
}
