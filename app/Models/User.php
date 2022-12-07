<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

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
        $user->save();
        return $user;
    }
}
