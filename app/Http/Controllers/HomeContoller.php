<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Admin Controller 

class HomeContoller extends Controller
{
    public function index()
    {

        return view('admin.index');
        
    }

    public function module()
    {

        return view('admin.module');
        
    }

    public function users()
    {

        return view('admin.users');
        
    }
}
