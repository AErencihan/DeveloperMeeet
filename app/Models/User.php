<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    // define connection name
    protected $connection = 'mysql';
    // define primary key
    protected $primaryKey = 'id';
    // define fillable columns
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'status',
        'created_at',
        'updated_at',
    ];

    public static function create(array $array)
    {
        $user = new User();
        $user->first_name = $array['first_name'];
        $user->last_name = $array['last_name'];
        $user->phone = $array['phone'];
        $user->status = 'active';
        $user->email = $array['email'];
        $user->password = $array['password'];
        $user->created_at = $array['created_at'];
        $user->updated_at = $array['updated_at'];
      //  dd($user);
        $user->save();
        return $user;
    }
}
