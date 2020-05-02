<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        // Get first available User
        $user = User::first();
        $user->name = 'Yon Rogg';
        $user->save();
        // Get all associated Audits
        /*
        $all = $user->audits;
        echo '取得全部稽核：' . PHP_EOL;
        var_dump($all);
        echo PHP_EOL;
        */		
        // Get first Audit
        $first = $user->audits()->first();
        echo '取得第一次稽核：' . PHP_EOL;
        var_dump($first);
    }
}
