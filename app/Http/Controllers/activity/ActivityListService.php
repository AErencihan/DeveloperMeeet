<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ActivityListService extends Controller
{
    public function viewAllActivities(): Factory|View|Application
    {
        $toDto = Activity::where('status', 'APPROVED')->get();
        $activitiesArray = [];
        for ($i = 0; $i < count($toDto); $i++) {
            $user = User::find($toDto[$i]->user_id);
            $toDto[$i]->first_name = $user->first_name;
            $activities = Activity::toDto($toDto[$i]);
            $activitiesArray[] = $activities;
        }
        $factory = view('activity.activity-list', compact('activitiesArray'));
        return $factory;
    }

    public function viewActivityDetail($id)
    {
        $activity = Activity::find($id);
        $factory = view('activity.activity-view', compact('activity'));
        return $factory;
    }


}
