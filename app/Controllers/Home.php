<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        return view('home');
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

    public function form()
    {
        return view('createCOMP');
    }
    
    public function list()
    {
        return view('list');
    }

    public function event()
    {
        return view('event');
    }

}
