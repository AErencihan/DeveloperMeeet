<?php

namespace App\Http\Controllers;

class SessionUtil
{
    public static function getUser(): ?User
    {
        session_start();
        return $_SESSION['user'];
    }

}
