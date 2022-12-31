<?php

namespace App\Http\Controllers\activity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Activity extends Model
{

    protected $table = 'activity';
    // define connection name
    protected $connection = 'mysql';
    // define primary key
    protected $primaryKey = 'id';
    // define fillable columns
    protected $fillable = [
        'user_id',
        'lat',
        'lot',
        'date',
        'title',
        'image_url',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];

    public static function create(array $array)
    {
        $activity = new Activity();
        $activity->user_id = 1;
        $activity->lat = $array['lat'];
        $activity->lot = $array['lot'];
        $activity->date = $array['date'];
        $activity->title = $array['title'];
        $activity->image_url = $array['image_url'];
        $activity->description = $array['description'];
        $activity->status = $array['status'];
        $activity->created_at = Date('Y-m-d');
        $activity->updated_at = Date('Y-m-d');
        $activity->save();
        return $activity;
    }

}
