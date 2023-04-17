<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityCreatorService extends Controller
{
     public function activityCreate(Request $request)
    {
        $all = $request->all();
        Activity::create($all);
        return redirect("/dashboard")->withSuccess('You have signed-in');
    }

    public function viewActivity()
    {
        return view('activity.activity-create');
    }
}
