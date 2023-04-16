<?php

namespace App\Http\Controllers;

use App\Http\PasswordResetMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PasswordReminder extends Controller
{
    public function passwordReminderPost(Request $request): \Illuminate\Http\RedirectResponse
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if ($user) {
            $token = Str::random(60);
            $user->update([
                'remember_token' => $token
            ]);
            Mail::to($user->email)->send(new PasswordResetMail($user));
            return redirect()->back()->with('success', 'Şifre sıfırlama linki mail adresinize gönderildi.');
        } else {
            return redirect()->back()->with('error', 'Bu mail adresi sistemde kayıtlı değil.');
        }
    }

    public function passwordReset($token)
    {
        $user = User::where('remember_token', $token)->first();
        $token2 = $user->remember_token;
        if ($user) {
            return view('auth.reset-finish', compact('token2'));
        } else {
            return redirect()->route('password.reminder')->with('error', 'Şifre sıfırlama linki geçersiz.');
        }
    }

}
