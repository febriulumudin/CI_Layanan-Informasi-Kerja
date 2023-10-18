<?php

namespace App\Controllers;

class Tentang_App extends BaseController
{
    public function index()
    {
        $data = array(
            'isi' => '/user/v_user_tentang_aplikasi'
        );
        return view('layout_user1/v_wrapper', $data);
    }

    public function perusahaan()
    {
        $data = array(
            'isi' => '/perusahaan/v_perusahaan_tentang_aplikasi'
        );
        return view('layout_perusahaan/v_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
