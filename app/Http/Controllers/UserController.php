<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loadAllUsers()
    {
        $users = User::all();
        return view('admin.users',compact('users'));

    }

}

