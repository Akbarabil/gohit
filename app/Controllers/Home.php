<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('theme');
    }

    public function login()
    {
        return view('login');
    }

    public function reg()
    {
        return view('register');
    }
}
