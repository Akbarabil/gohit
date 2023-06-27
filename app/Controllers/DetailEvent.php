<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;

class DetailEvent extends BaseController
{
    public function index($idevent)
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $namaPengguna = $session->get('id');

        $selectedevent = $MyEvent->where('id_event', $idevent)->findAll();


        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            echo view("login", $data);
        } else {
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $MyEvent = new MyEventMod();
            $latestProducts = $MyEvent->getexpertslug('hh');
            $data = [
                'selectedevent' => $selectedevent,
                'nama' => $user['nama'],
                'isi' => $latestProducts,
                'title' => 'event'
            ];
            echo view("detailTour", $data);
        }
    }

    public function peserta($idevent)
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $namaPengguna = $session->get('id');

        $selectedevent = $MyEvent->where('id_event', $idevent)->findAll();


        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            echo view("login", $data);
        } else {
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $MyEvent = new MyEventMod();
            $latestProducts = $MyEvent->getexpertslug('hh');
            $data = [
                'selectedevent' => $selectedevent,
                'nama' => $user['nama'],
                'isi' => $latestProducts,
                'title' => 'event'
            ];
            echo view("detaileventp", $data);
        }
    }
}
