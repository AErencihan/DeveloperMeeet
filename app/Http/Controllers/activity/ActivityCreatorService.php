<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActivityCreatorService extends Controller
{
     public function activityCreate(Request $request)
    {
        $all = $request->all();
        try {
            $all['resim'] = $request->file('resim')->store('images', 's3');
            $fullImageUrl = Storage::disk('s3')->url($all['resim']);
        }catch (\Exception $e){
            $fullImageUrl = 'https://i.hizliresim.com/m0hjl0f.jpg';
        }
        $all['resim'] = $fullImageUrl;
        Activity::create($all);
        return redirect("/dashboard")->withSuccess('You have signed-in');
    }

    public function viewActivity()
    {
        return view('activity.activity-create');
    }

    public function loadMap()
    {
        return redirect('/harita');
    }
}
