<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;

class MyEvent extends BaseController
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
            $latestProducts = $MyEvent->orderBy('id_event', 'DESC')->findAll(3);
            $product1 = $latestProducts[0];
            $product2 = $latestProducts[1];
            $product3 = $latestProducts[2];

            $id2 = $product1['id_event'];

            $data = [
                'isi' => $product1,
                'isi2' => $product2,
                'isi3' => $product3,
                'nama' => $user['nama'],
                'id' => $namaPengguna,
                'title' => 'event'
            ];
            echo view("event", $data);
        }
    }

    public function event()
    {
    }
}
