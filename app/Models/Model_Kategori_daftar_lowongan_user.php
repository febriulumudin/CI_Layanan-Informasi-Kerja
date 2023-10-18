<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Kategori_daftar_lowongan_user extends Model
{
    public function tampillowongan()
    {
        return $this->db->table('lowongan')
            ->join('perusahaan', 'perusahaan.id_perusahaan=lowongan.id_perusahaan')
            ->where('status_lowongan', 'y')
            ->orderBy('id_lowongan', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function tampilperusahaan()
    {
        return $this->db->table('perusahaan')
            ->orderBy('id_perusahaan', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function select_by_id($data)
    {
        $id = $data;
        return $this->db->table('lowongan')
            ->join('perusahaan', 'lowongan.id_perusahaan=perusahaan.id_perusahaan')
            ->where('id_lowongan', $id)
            ->get()
            ->getResultArray();
    }

    public function perusahaan_id($idper)
    {
        return $this->db->table('lowongan')
            ->join('perusahaan', 'lowongan.id_perusahaan=perusahaan.id_perusahaan')
            ->where('lowongan.id_perusahaan', $idper)
            ->where('status_lowongan', 'y')
            ->get()
            ->getResultArray();
    }

    public function userid($iduser)
    {
        return $this->db->table('user')
            ->where('id_user', $iduser)
            ->get()
            ->getResultArray();
    }

    public function userpendidikan($iduser)
    {
        return $this->db->table('user_pendidikan')
            ->where('id_user', $iduser)
            ->get()
            ->getResultArray();
    }

    public function userpengalaman($iduser)
    {
        return $this->db->table('user_pengalaman_kerja')
            ->where('id_user', $iduser)
            ->get()
            ->getResultArray();
    }

    public function userkemampuan($iduser)
    {
        return $this->db->table('user_kemampuan')
            ->where('id_user', $iduser)
            ->get()
            ->getResultArray();
    }
}

//Daftar lowongan User