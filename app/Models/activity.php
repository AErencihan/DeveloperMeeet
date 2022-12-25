<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;

    protected $table = 'activity';
    // define connection name
    protected $connection = 'mysql';
    // define primary key
    protected $primaryKey = 'id';
    // define fillable columns


    // values = id, name, firstname
    protected $fillable = [
        'name',
        'firstname',
        'created_at',
        'updated_at',
    ];

    public static function create(array $array)
    {
        $activity = new activity();
        $activity->name = $array['name'];
        $activity->firstname = $array['firstname'];
        $activity->created_at = $array['created_at'];
        $activity->updated_at = $array['updated_at'];
        $activity->save();
        return $activity;
    }


}
