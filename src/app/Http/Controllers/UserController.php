<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admin()
    {
    return view('admin');
    }

    public function register()
    {
    return view('auth/register/step1');
    }

    public function login()
    {
    return view('auth/login');
    }

    public function logout()
    {
    return view('logout');
    }

}
