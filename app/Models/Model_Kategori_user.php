<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Kategori_user extends Model
{
    public function tampildata()
    {
        return $this->db->table('user')
            ->orderBy('id_user', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function save_register($data)
    {
        $this->db->table('user')->insert($data);
    }

    public function editdata($data)
    {
        $this->db->table('user')
            ->where('id_user', $data['id_user'])
            ->update($data);
    }

    public function hapusdata($data)
    {
        $this->db->table('user')
            ->where('id_user', $data['id_user'])
            ->delete($data);
    }
}

//Daftar User Admin
