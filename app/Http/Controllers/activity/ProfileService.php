<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionUtil;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class ProfileService extends Controller
{
    public function viewProfile(): View|Factory|Redirector|RedirectResponse|Application
    {
        $user = SessionUtil::getUser();
        if ($user == null) {
            return redirect('/login');
        }
        $activities = Activity::where('user_id', $user->id)->get();
        return view('auth.profile', compact('user', 'activities'));
    }
}
