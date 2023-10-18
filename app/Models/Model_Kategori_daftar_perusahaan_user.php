<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Kategori_daftar_perusahaan_user extends Model
{
    public function tampildata()
    {
        return $this->db->table('perusahaan')
            ->orderBy('id_perusahaan', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function select_by_id($id)
    {
        return $this->db->table('perusahaan')
            ->where('id_perusahaan', $id)
            ->get()
            ->getResultArray();
    }

    public function perusahaan_id($id)
    {
        return $this->db->table('perusahaan')
            ->join('lowongan', 'perusahaan.id_perusahaan=lowongan.id_perusahaan')
            ->where('perusahaan.id_perusahaan', $id)
            ->get()
            ->getResultArray();
    }
}

//Daftar Perusahaan User
