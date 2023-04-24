<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\SessionUtil;
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
        'first_name'
    ];

    public static function create(array $array)
    {
        $activity = new Activity();
        $user = SessionUtil::getUser();
        $activity->user_id = $user->id;
        $activity->lat = $array['lat'];
        $activity->lot = $array['lot'];
        $activity->date = $array['date'];
        $activity->title = $array['title'];
        $activity->image_url = $array['resim'];
        $activity->description = $array['description'];
        $activity->status = 'PENDING';
        $activity->created_at = Date('Y-m-d');
        $activity->updated_at = Date('Y-m-d');
        $activity->save();
        return $activity;
    }

    public static function toDto($activity)
    {
        $dto = new Activity();
        $dto->id = $activity->id;
        $dto->user_id = $activity->user_id;
        $dto->lat = $activity->lat;
        $dto->lot = $activity->lot;
        $dto->date = $activity->date;
        $dto->title = $activity->title;
        $dto->image_url = $activity->image_url;
        $dto->description = $activity->description;
        $dto->status = $activity->status;
        $dto->created_at = $activity->created_at;
        $dto->updated_at = $activity->updated_at;
        $dto->first_name = $activity->first_name;
        return $dto;
    }

}
