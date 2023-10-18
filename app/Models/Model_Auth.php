<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Auth extends Model
{
    public function save_register($data)
    {
        $this->db->table('user')->insert($data);
    }

    public function login($email, $password)
    {
        return $this->db->table('user')->where([
            'email' => $email,
            'password' => $password,
        ])->get()->getRowArray();
    }

    public function editdata($data)
    {
        $this->db->table('user')
            ->where('id_user', $data['id_user'])
            ->update($data);
    }

    //PERUSAHAAN
    public function save_register_perusahaan($data)
    {
        $this->db->table('perusahaan')->insert($data);
    }

    //Perusahaan
    public function login_per($email, $password)
    {
        return $this->db->table('perusahaan')->where([
            'email_per' => $email,
            'password_per' => $password,
        ])->get()->getRowArray();
    }

    public function editdataperusahaan($data)
    {
        $this->db->table('perusahaan')
            ->where('id_perusahaan', $data['id_perusahaan'])
            ->update($data);
    }


    //SD
    public function editdatasd($data)
    {
        $this->db->table('user_pendidikan')
            ->where('id_user', $data['id_user'])
            ->where('tingkat_jenjang', 'SD')
            ->update($data);
    }


    public function readdata()
    {
        $this->db->table('user')
            ->orderBy('id_user')
            ->get()
            ->getResultArray();
    }



    //TAMBAH USER PENDIDIKAN
    //SD//SMP//SMA//PT
    public function tambahpendidikanuser($iduser)
    {
        $this->db->table('user_pendidikan')->insert($iduser);
    }


    //TAMPILAN USER PENDIDIKAN
    //SD
    public function userpendidikan($iduser)
    {
        return $this->db->table('user_pendidikan')
            ->where('id_user', $iduser)
            ->get()
            ->getResultArray();
    }

    //Login User dan Admin

}
