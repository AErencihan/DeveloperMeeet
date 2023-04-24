<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\activity\Activity;
use App\Http\Controllers\SessionUtil;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class AdminDashboardService extends Controller
{

    public function viewAdminPage()
    {
        $admin = SessionUtil::getUser();
        $role = $admin->role;
        if ($role == 'admin') {
            $activities = $this->getPendingMeetRequests();
            return view('admin-page', compact('activities'));
        } else {
            return view('home.home');
        }
    }

    public function getPendingMeetRequests()
    {
        $pendingMeetRequests = Activity::where('status', 'PENDING')->get();
        return $pendingMeetRequests;
    }

    public function approveMeetRequest($id): Factory|View|Application
    {
        $meetRequest = Activity::find($id);
        $meetRequest->status = 'APPROVED';
        $meetRequest->save();
        return $this->viewAdminPage();
    }

    public function getPendingMeetRequestsCount(): int
    {
        $pendingMeetRequests = Activity::where('status', 'PENDING')->get();
        return count($pendingMeetRequests);
    }





}
