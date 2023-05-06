<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('partial/header');
    }

    public function login()
    {
        return view('login');
    }

    public function reg()
    {
        return view('register');
    }

    public function ww()
    {
        return view('index');
    }

    public function com()
    {
        return view('createCOMP');
    }
}
