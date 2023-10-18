<?php

namespace App\Controllers;

use App\Models\Model_Kategori_daftar_lowongan_user;
use App\Models\Model_Kategori_daftar_perusahaan_user;
use App\Models\Model_Kategori_keahlian;
use App\Models\Model_Kategori_Cariteman;

class Pengunjung extends BaseController
{
    public function __construct()
    {
        $this->Model_Kategori_lowongan_user = new Model_Kategori_daftar_lowongan_user();
        $this->Model_Kategori_daftar_perusahaan_user = new Model_Kategori_daftar_perusahaan_user();
        $this->Model_Kategori_keahlian = new Model_Kategori_keahlian();
        helper('form');
        $this->Model_Kategori_Cariteman = new Model_Kategori_Cariteman();
    }

    public function index()
    {
        $data = array(
            'lowongan' => $this->Model_Kategori_lowongan_user->tampillowongan(),
            'perusahaan' => $this->Model_Kategori_lowongan_user->tampilperusahaan(),
            'isi' => '/user_pengunjung/v_user_home'
        );
        return view('layout_pengunjung/v_wrapper', $data);
    }

    public function daftar_lowongan()
    {
        $data = array(
            'lowongan' => $this->Model_Kategori_lowongan_user->tampillowongan(),
            'perusahaan' => $this->Model_Kategori_lowongan_user->tampilperusahaan(),
            'isi' => '/user_pengunjung/v_user_lowongan'
        );
        return view('layout_pengunjung/v_wrapper', $data);
    }

    public function lowongan_detail($id, $idper)
    {
        $data = array(
            'lowongandetail' => $this->Model_Kategori_lowongan_user->select_by_id($id),
            'lowonganlain' => $this->Model_Kategori_lowongan_user->perusahaan_id($idper),
            'isi' => '/user_pengunjung/v_user_lowongan_detail'
        );
        return view('layout_pengunjung/v_wrapper', $data);
    }

    //PERUSAHAAN
    public function perusahaan()
    {
        $data = array(
            'perusahaan' => $this->Model_Kategori_daftar_perusahaan_user->tampildata(),
            'isi' => '/user_pengunjung/v_user_perusahaan'
        );
        return view('layout_pengunjung/v_wrapper', $data);
    }

    public function perusahaan_detail($id)
    {
        $data = array(
            'perusahaandetail' => $this->Model_Kategori_daftar_perusahaan_user->select_by_id($id),
            'lowonganlain' => $this->Model_Kategori_daftar_perusahaan_user->perusahaan_id($id),
            'isi' => '/user_pengunjung/v_user_perusahaan_detail'
        );
        return view('layout_pengunjung/v_wrapper', $data);
    }

    //CARI TEMAN
    public function cariteman()
    {
        $data = array(
            'isi' => '/user_pengunjung/v_user_cariteman'
        );
        return view('layout_pengunjung/v_wrapper', $data);
    }

    public function daftar_teman()
    {
        $namdep = $this->request->getPost('namadepan');
        if ($namdep == '') {
            $data = array(
                'isi' => '/user_pengunjung/v_user_cariteman'
            );
            return view('layout_pengunjung/v_wrapper', $data);
        } else {
            $data = array(
                'caritemanlanjut' => $this->Model_Kategori_Cariteman->tampilseseorang($namdep),
                'isi' => '/user_pengunjung/v_user_cariteman_lanjut'
            );
            if ($data['caritemanlanjut'] == null) {
                $data2 = array(
                    'isi' => '/user_pengunjung/v_user_cariteman'
                );
                session()->setFlashdata('Pesan', 'Nama Pengguna Yang Anda Maksud Tidak Ada!!');
                return view('layout_pengunjung/v_wrapper', $data2);
            } else {
                return view('layout_pengunjung/v_wrapper', $data);
            }
        }
    }


    //KEAHLIAN
    public function keahlian()
    {
        $data = array(
            'keahlian' => $this->Model_Kategori_keahlian->tampildata(),
            'isi' => '/user_pengunjung/v_user_keahlian'
        );
        return view('layout_pengunjung/v_wrapper', $data);
    }


    //TENTANG APLIKASI
    public function tentangapp()
    {
        $data = array(
            'isi' => '/user_pengunjung/v_user_tentang_aplikasi'
        );
        return view('layout_pengunjung/v_wrapper', $data);
    }
    //--------------------------------------------------------------------

}
