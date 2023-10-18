<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Kategori_Cariteman extends Model
{
    public function tampilseseorang($namadepan)
    {
        return $this->db->table('user')
            ->where('nama_depan', $namadepan)
            ->orWhere('nama_belakang', $namadepan)
            ->get()
            ->getResultArray();
    }
}


// -User- Cari Seseorang 
