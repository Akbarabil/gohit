<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;
use App\Models\Peserta;


class DetailEvent extends BaseController
{
    public function index($idevent)
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $peserta = new Peserta();
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
        $peserta = new Peserta();
        $namaPengguna = $session->get('id');
        $selectedevent = $MyEvent->where('id_event', $idevent)->findAll();
        if (!$session->has('id')) {
            return redirect()->to(base_url('/home'));
        } else {
            $peserta1 = $peserta->where('id_event', $idevent)->findAll();
            $primaryKeys = array_column($peserta1, 'id_user');

            // Ambil data dari tabel_lain berdasarkan primary key yang terkait dengan peserta1
            $tabelLainData = [];
            if (!empty($primaryKeys)) {
                $tabelLainData = $userModel->whereIn('id_user', $primaryKeys)->findAll();
            }
            $user = $userModel->getUserById($namaPengguna);
            $MyEvent = new MyEventMod();
            $latestProducts = $MyEvent->getexpertslug('hh');
            $data = [
                'compe' => $tabelLainData,
                'selectedevent' => $selectedevent,
                'nama' => $user['nama'],
                'id_user' => $user['id_user'],
                'isi' => $latestProducts,
                'title' => 'event'
            ];
            echo view("detaileventp", $data);
        }
    }

    public function list($idevent)
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $namaPengguna = $session->get('id');

        $selectedevent = $MyEvent->where('type_sport', $idevent)->findAll();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            return redirect()->to(base_url('/home'));
        } else {
            if (!empty($selectedevent)) {
                $user = $userModel->getUserById($namaPengguna);
                $data = [
                    'compe' => $selectedevent,
                    'nama' => $user['nama'],
                    'id' => $namaPengguna,
                    'title' => 'event'
                ];
                echo view("allevent", $data);
            } else {
                $user = $userModel->getUserById($namaPengguna);
                $data = [
                    'nama' => $user['nama'],
                    'id' => $namaPengguna,
                    'compe' => "",
                ];
                echo view("allevent", $data);
            }
        }
    }
}
