<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    protected $session;
    public function home()
    {
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            echo view("login", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'nama' => $user['nama'],
                'id' => $namaPengguna,
                'title' => 'Home'
            ];
            echo view("home", $data);
        }
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
                'title' => 'Login'
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
                'title' => 'Login'
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
            echo view("event", $data);
        }
    }

    public function dt()
    {
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            echo view("login", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'nama' => $user['nama'],
                'id' => $namaPengguna,
                'id_event' => $this->request->getPost('hh'),
                'title' => 'event'
            ];
            echo view("detailTour", $data);
        }
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
