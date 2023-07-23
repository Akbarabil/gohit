<?php

namespace App\Models;

use CodeIgniter\Model;

class Juara extends Model
{
    protected $table = 'juara';
    protected $primaryKey = 'id_juara';
    protected $allowedFields = ['id_event', 'id_user-semi1', 'id_user-semi2', 'id_user-semi3', 'id_user-semi4', 'id_user-final1', 'id_user-final1'];
    public function saveuser($wew)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($wew);
    }
}
