<?php

namespace App\Controllers;

use App\Models\Model_Kategori_daftar_lowongan_user;

class Lowongan extends BaseController
{
    public function __construct()
    {
        $this->Model_Kategori_lowongan_user = new Model_Kategori_daftar_lowongan_user();
    }

    public function index()
    {
        $data = array(
            'lowongan' => $this->Model_Kategori_lowongan_user->tampillowongan(),
            'perusahaan' => $this->Model_Kategori_lowongan_user->tampilperusahaan(),
            'isi' => '/user/v_user_home'
        );
        return view('layout_user1/v_wrapper', $data);
    }

    public function daftar_lowongan()
    {
        $data = array(
            'lowongan' => $this->Model_Kategori_lowongan_user->tampillowongan(),
            'perusahaan' => $this->Model_Kategori_lowongan_user->tampilperusahaan(),
            'isi' => '/user/v_user_lowongan'
        );
        return view('layout_user1/v_wrapper', $data);
    }

    public function lowongan_detail($id, $idper, $iduser)
    {
        $data = array(
            'lowongandetail' => $this->Model_Kategori_lowongan_user->select_by_id($id),
            'lowonganlain' => $this->Model_Kategori_lowongan_user->perusahaan_id($idper),
            'userdata' => $this->Model_Kategori_lowongan_user->userid($iduser),
            'userpendidikan' => $this->Model_Kategori_lowongan_user->userpendidikan($iduser),
            'userpengalaman' => $this->Model_Kategori_lowongan_user->userpengalaman($iduser),
            'userkemampuan' => $this->Model_Kategori_lowongan_user->userkemampuan($iduser),
            'isi' => '/user/v_user_lowongan_detail'
        );
        return view('layout_user1/v_wrapper', $data);
    }
    //--------------------------------------------------------------------

}
