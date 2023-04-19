<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionUtil;

class ProfileService extends Controller
{
    public function viewProfile()
    {
        $user = SessionUtil::getUser();
        if ($user == null) {
            return redirect('/login');
        }
        $activities = Activity::where('user_id', $user->id)->get();
        return view('auth.profile', compact('user', 'activities'));
    }
}
