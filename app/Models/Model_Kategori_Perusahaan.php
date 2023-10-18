<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Kategori_Perusahaan extends Model
{
    public function tampildata()
    {
        return $this->db->table('perusahaan')
            ->orderBy('id_perusahaan', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function save_register($data)
    {
        $this->db->table('perusahaan')->insert($data);
    }

    public function editdata($data)
    {
        $this->db->table('perusahaan')
            ->where('id_perusahaan', $data['id_perusahaan'])
            ->update($data);
    }

    public function hapusdata($data)
    {
        $this->db->table('perusahaan')
            ->where('id_perusahaan', $data['id_perusahaan'])
            ->delete($data);
    }
}

//Daftar Perushaan Admin
