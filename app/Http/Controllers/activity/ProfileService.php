<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionUtil;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;

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

    public function myProfile()
    {
        $user = SessionUtil::getUser();
        if ($user == null) {
            return redirect('/login');
        }
        $activities = Activity::where('user_id', $user->id)->get();
        return view('auth.myProfile', compact('user', 'activities'));
    }

    public function profil($id)
    {
        $activities = DB::table('activity')->where('user_id', $id)->get();
        return view('profile', ['activity' => $activities]);
    }


    //
    //        $activities =User::table('activity')->where('id', $id)->get();
    //        return view('profile', ['activity' => $activities]);

}
