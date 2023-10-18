<?php

namespace App\Controllers;

use App\Models\Model_Kategori_daftar_perusahaan_user;

class Perusahaan extends BaseController
{
    public function __construct()
    {
        $this->Model_Kategori_daftar_perusahaan_user = new Model_Kategori_daftar_perusahaan_user();
    }

    public function index()
    {
        $data = array(
            'perusahaan' => $this->Model_Kategori_daftar_perusahaan_user->tampildata(),
            'isi' => '/user/v_user_perusahaan'
        );
        return view('layout_user1/v_wrapper', $data);
    }

    public function perusahaan_detail($id)
    {
        $data = array(
            'perusahaandetail' => $this->Model_Kategori_daftar_perusahaan_user->select_by_id($id),
            'lowonganlain' => $this->Model_Kategori_daftar_perusahaan_user->perusahaan_id($id),
            'isi' => '/user/v_user_perusahaan_detail'
        );
        return view('layout_user1/v_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
