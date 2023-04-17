<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\SessionUtil;
use Illuminate\Routing\Controller;

class AdminDashboardService extends Controller
{

    public function viewAdminPage()
    {
        $admin = SessionUtil::getUser();
        $role = $admin->role;
        if ($role == 'admin') {
            return view('admin-page');
        } else {
            return view('dashboard');
        }
    }




}
