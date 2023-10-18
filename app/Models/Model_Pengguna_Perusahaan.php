<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Pengguna_Perusahaan extends Model
{
    public function lowongansaya($idper)
    {
        return $this->db->table('lowongan')
            ->join('perusahaan', 'perusahaan.id_perusahaan=lowongan.id_perusahaan')
            ->where('perusahaan.id_perusahaan', $idper)
            ->orderBy('id_lowongan', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function select_by_id_lowongan($data)
    {
        $id = $data;
        return $this->db->table('lowongan')
            ->join('perusahaan', 'lowongan.id_perusahaan=perusahaan.id_perusahaan')
            ->where('id_lowongan', $id)
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

    public function select_by_id_perusahaan($id)
    {
        return $this->db->table('perusahaan')
            ->where('id_perusahaan', $id)
            ->get()
            ->getResultArray();
    }

    public function lowongan_id($data)
    {
        $id = $data;
        return $this->db->table('lowongan')
            ->where('id_lowongan', $id)
            ->get()
            ->getResultArray();
    }

    public function editdatastatus($data)
    {
        $this->db->table('lowongan')
            ->where('id_lowongan', $data['id_lowongan'])
            ->update($data);
    }

    public function tambahlowongan($data)
    {
        $this->db->table('lowongan')->insert($data);
    }
}
