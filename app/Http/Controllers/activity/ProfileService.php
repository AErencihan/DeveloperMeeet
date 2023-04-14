<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;

class ProfileService extends Controller
{
    public function viewProfile()
    {
        return view('auth.profile');
    }

}
