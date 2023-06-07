<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    protected $session;
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
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => 'event'
            ];
            echo view("login", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'nama' => $user['nama'],
                'id' => $namaPengguna,
                'title' => 'event'
            ];
            echo view("createCOMP", $data);
        }
    }

    public function list()
    {
        return view('list');
    }

    public function event()
    {
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => 'event'
            ];
            echo view("login", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'nama' => $user['nama'],
                'title' => 'event'
            ];
            echo view("event", $data);
        }
    }

    public function dt()
    {
        return view('detailTour');
    }

    public function join()
    {
        return view('join');
    }

    public function setting()
    {
        return view('setting');
    }
}
