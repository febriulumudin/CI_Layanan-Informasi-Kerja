<?php

namespace App\Controllers;

use App\Models\Model_Kategori_Cariteman;

class Cariteman extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Kategori_Cariteman = new Model_Kategori_Cariteman();
    }

    public function index()
    {
        $data = array(
            'isi' => '/user/v_user_cariteman'
        );
        return view('layout_user1/v_wrapper', $data);
    }

    public function daftar_teman()
    {
        $namdep = $this->request->getPost('namadepan');
        if ($namdep == '') {
            $data = array(
                'isi' => '/user/v_user_cariteman'
            );
            return view('layout_user1/v_wrapper', $data);
        } else {
            $data = array(
                'caritemanlanjut' => $this->Model_Kategori_Cariteman->tampilseseorang($namdep),
                'isi' => '/user/v_user_cariteman_lanjut'
            );
            if ($data['caritemanlanjut'] == null) {
                $data2 = array(
                    'isi' => '/user/v_user_cariteman'
                );
                session()->setFlashdata('Pesan', 'Nama Pengguna Yang Anda Maksud Tidak Ada!!');
                return view('layout_user1/v_wrapper', $data2);
            } else {
                return view('layout_user1/v_wrapper', $data);
            }
        }
    }


    /*
    public function daftar_teman()
    {
        $data = array(
            'cariteman' => $this->Model_Kategori_Cariteman->tampilseseorang(),
            'isi' => '/user/v_user_cariteman'
        );
        return view('layout_user1/v_wrapper', $data);
    }
    */


    //--------------------------------------------------------------------

}
