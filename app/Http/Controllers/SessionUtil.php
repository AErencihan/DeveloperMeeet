<?php

namespace App\Http\Controllers;

class SessionUtil
{
    public static function getUser(): ?User
    {
        try {
            session_start();
            return $_SESSION['user'];
        }catch (\Exception $e){
            return null;
        }
    }

}
