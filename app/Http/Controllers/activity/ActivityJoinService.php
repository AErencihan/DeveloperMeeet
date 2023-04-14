<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
use App\Models\ActivityJoin;
use Illuminate\Support\Facades\Auth;

class ActivityJoinService extends Controller
{

    public function joinActivity($id)
    {
        $userId = $this->findUserFromSessionEmail();

        $first = ActivityJoin::where('user_id', $userId)->where('activity_id', $id)->first();
        if ($first) {
            return view('activity.etkinlik-hata');
        }
        ActivityJoin::create([
            'user_id' => $userId,
            'activity_id' => $id,
            'created_at' => Date('Y-m-d'),
        ]);


        return redirect("/profile")->withSuccess('You have signed-in');
    }

    public function leaveActivity($id)
    {
        $activity = Activity::find($id);
        $activity->users()->detach(Auth::user()->id);
        return redirect("/profile")->withSuccess('You have signed-in');
    }

    private function findUserFromSessionEmail()
    {
        session_start();
        $email = $_SESSION['user.email'];
        $user = User::where('email', $email)->first();
        return $user->id;
    }
}
