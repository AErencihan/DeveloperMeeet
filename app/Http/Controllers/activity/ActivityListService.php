<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ActivityListService extends Controller
{
    public function viewAllActivities(): Factory|View|Application
    {
        // get status APPROVED
        $activities = Activity::where('status', 'APPROVED')->get();
        $factory = view('activity.list2', compact('activities'));
        return $factory;
    }

    public function viewActivityDetail($id)
    {
        $activity = Activity::find($id);
        $factory = view('activity.activity-view', compact('activity'));
        return $factory;
    }



}
