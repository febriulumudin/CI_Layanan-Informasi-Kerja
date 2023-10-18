<?php

namespace App\Models;

use ArrayObject;
use CodeIgniter\Model;

class Model_User_Profile extends Model
{
    public function user($iduser)
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

    //EDIT DATA DIRI
    public function usereditdatadiri($data)
    {
        $this->db->table('user')
            ->where('id_user', $data['id_user'])
            ->update($data);
    }

    //EDIT DATA PENDIDIKAN
    public function usereditdatapendidikan($data)
    {
        $this->db->table('user_pendidikan')
            ->where('id_pendidikan', $data['id_pendidikan'])
            ->update($data);
    }

    //EDIT DATA PENGALAMAN
    public function usereditdatapengalaman($data)
    {
        $this->db->table('user_pengalaman_kerja')
            ->where('id_pengalaman', $data['id_pengalaman'])
            ->update($data);
    }

    //TAMBAH DATA PENGALAMAN
    public function save_tambah_pengalaman($data)
    {
        $this->db->table('user_pengalaman_kerja')->insert($data);
    }

    //HAPUS DATA PENGALAMAN
    public function hapusdatapengalaman($data)
    {
        $this->db->table('user_pengalaman_kerja')
            ->where('id_pengalaman', $data['id_pengalaman'])
            ->delete($data);
    }

    //EDIT DATA KEMAMPUAN
    public function usereditdatakemampuan($data)
    {
        $this->db->table('user_kemampuan')
            ->where('id_kemampuan', $data['id_kemampuan'])
            ->update($data);
    }

    //TAMBAH DATA KEMAMPUAN
    public function save_tambah_kemampuan($data)
    {
        $this->db->table('user_kemampuan')->insert($data);
    }

    //HAPUS DATA KEMAMPUAN
    public function hapusdatakemampuan($data)
    {
        $this->db->table('user_kemampuan')
            ->where('id_kemampuan', $data['id_kemampuan'])
            ->delete($data);
    }
}

//Daftar lowongan User   