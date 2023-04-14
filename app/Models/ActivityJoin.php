<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityJoin extends Model
{

    protected $table = 'activity_registrations';
    // define connection name
    protected $connection = 'mysql';
    // define primary key
    protected $primaryKey = 'id';
    // define fillable columns
    protected $fillable = [
        'user_id',
        'activity_id',
        'created_at'
    ];

    public static function create(array $array)
    {
        $activityJoin = new ActivityJoin();
        $activityJoin->user_id = $array['user_id'];
        $activityJoin->activity_id = $array['activity_id'];
        $activityJoin->created_at = $array['created_at'];
        $activityJoin->save();
        return $activityJoin;
    }
}
