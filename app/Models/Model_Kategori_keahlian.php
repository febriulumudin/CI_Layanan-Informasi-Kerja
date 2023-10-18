<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Kategori_keahlian extends Model
{
    public function tampildata()
    {
        return $this->db->table('keahlian')
            ->join('user', 'keahlian.id_user=user.id_user')
            ->orderBy('id_keahlian', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function tampildatadetail($id)
    {
        return $this->db->table('keahlian')
            ->join('user', 'keahlian.id_user=user.id_user')
            ->where('id_keahlian', $id)
            ->get()
            ->getResultArray();
    }
}

//Daftar Keahlian User
