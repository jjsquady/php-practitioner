<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::all();
        return view('users-index', [
            'users' => $users
        ]);
    }
}
