<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'remember_token',
        'role'
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
        $user->role = $array['user'];
        $user->save();
        return $user;
    }
}
