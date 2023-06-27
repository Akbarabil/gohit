<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;
use App\Models\Eventm;

class Login extends BaseController
{
    protected $session;
    public function index()
    {
        $session = session();
        $MyEvent = new MyEventMod();
        $namaPengguna = $session->get('id');
        if (!$session->has('id')) {

            $data = [
                'title' => 'Log In'
            ];
            echo view("home", $data);
        } else {
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $latestProducts = $MyEvent->findAll(3);
            $data = [
                'nama' => $user['nama'],
                'id' => $namaPengguna,
                'compe' => $latestProducts,
                'title' => 'Log In'
            ];
            echo view("home", $data);
        }
    }

    public function login()
    {
        $email = $this->request->getPost('username');
        $password = $this->request->getPost('pass');
        $userModel = new User();
        $user = $userModel->getUserByEmail($email);
        if ($user['email'] == $email && $user['password'] == $password) {
            // Login berhasil, simpan informasi pengguna ke dalam session
            $session = session();
            $session->set('id', $user['id_user']);
            return redirect()->to(base_url('/home'));
        } else {
            $data['error'] = 'Email atau password salah.';
            return redirect()->to(base_url('/login'));
        }
    }
    public function logout()
    {
        // Hapus informasi pengguna dari session saat logout
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }
    public function add()
    {
        $model = new user;
        $data = array(
            'nama' => $this->request->getPost("nama"),
            'email' => $this->request->getPost("email"),
            'password' => $this->request->getPost("password"),
            'jenis' => "1"
        );
        $model->saveuser($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data ");
                window.location="' . base_url('/login') . '"
            </script>';
    }
}
