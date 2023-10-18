<?php

namespace App\Controllers;

use App\Models\Model_Kategori_keahlian;

class Keahlian extends BaseController
{
    public function __construct()
    {
        $this->Model_Kategori_keahlian = new Model_Kategori_keahlian();
    }

    public function index()
    {
        $data = array(
            'isi' => '/user/v_user_keahlian'
        );
        return view('layout_user1/v_wrapper', $data);
    }

    public function index_keahlian()
    {
        $data = array(
            'keahlian' => $this->Model_Kategori_keahlian->tampildata(),
            'isi' => '/user/v_user_keahlian'
        );
        return view('layout_user1/v_wrapper', $data);
    }

    public function keahlian_detail($id)
    {
        $data = array(
            'keahlian' => $this->Model_Kategori_keahlian->tampildatadetail($id),
            'isi' => '/user/v_user_keahlian_detail'
        );
        return view('layout_user1/v_wrapper', $data);
    }



    //--------------------------------------------------------------------

}
