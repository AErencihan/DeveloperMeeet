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
            $request = $this->getPendingMeetRequests();
            view('admin-page', ['pendingMeetRequests' => $request]);
        } else {
            return view('dashboard');
        }
    }

    public function getPendingMeetRequests(): Factory|View|Application
    {
        $pendingMeetRequests = Activity::where('status', 'PENDING')->get();
        return view('admin-page', ['pendingMeetRequests' => $pendingMeetRequests]);
    }

    public function approveMeetRequest($id): Factory|View|Application
    {
        $meetRequest = Activity::find($id);
        $meetRequest->status = 'APPROVED';
        $meetRequest->save();
        return $this->getPendingMeetRequests();
    }

    public function getPendingMeetRequestsCount(): int
    {
        $pendingMeetRequests = Activity::where('status', 'PENDING')->get();
        return count($pendingMeetRequests);
    }





}
