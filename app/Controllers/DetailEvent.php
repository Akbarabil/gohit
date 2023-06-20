<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;

class DetailEvent extends BaseController
{
    public function index()
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
            $MyEvent = new MyEventMod();
            $latestProducts = $MyEvent->getexpertslug('hh');
            $data = [
                'nama' => $user['nama'],
                'isi' => $latestProducts,
                'title' => 'event'
            ];
            echo view("detailTour", $data);
        }
    }
}
