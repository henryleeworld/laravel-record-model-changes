<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get first available User
        $user = User::first();
        $user->name = __('User');
        $user->save();
        /*
        $all = $user->audits;
        echo __('Get all audits: ') . PHP_EOL;
        var_dump($all);
        echo PHP_EOL;
        */		
        echo __('Get the first audit: ') . PHP_EOL;
        $first = $user->audits()->first();
        var_dump($first);
    }
}
