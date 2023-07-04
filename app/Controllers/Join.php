<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Peserta;

class Join extends BaseController
{
    public function join()
    {
        $model = new Peserta;
        $data = array(
            'id_event' => $this->request->getPost("idevent"),
            'id_user' => $this->request->getPost("iduser"),
        );
        $model->saveuser($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data ");
                window.location="' . base_url('/home') . '"
            </script>';
    }
}
