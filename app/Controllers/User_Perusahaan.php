<?php

namespace App\Controllers;

use App\Models\Model_Pengguna_Perusahaan;

class User_Perusahaan extends BaseController
{
    public function __construct()
    {
        $this->Model_Pengguna_Perusahaan = new Model_Pengguna_Perusahaan();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'isi' => '/perusahaan/v_perusahaan_home'
        );
        return view('layout_perusahaan/v_wrapper', $data);
    }

    public function index_home($idper)
    {
        $data = array(
            'lowongansaya' => $this->Model_Pengguna_Perusahaan->lowongansaya($idper),
            'perusahaan' => $this->Model_Pengguna_Perusahaan->select_by_id_perusahaan($idper),
            'isi' => '/perusahaan/v_perusahaan_home'
        );
        return view('layout_perusahaan/v_wrapper', $data);
    }

    public function lowongan_saya($idper)
    {
        $data = array(
            'lowongansaya' => $this->Model_Pengguna_Perusahaan->lowongansaya($idper),
            'isi' => '/perusahaan/v_perusahaan_lowongan_saya'
        );
        return view('layout_perusahaan/v_wrapper', $data);
    }

    public function perusahaan_detail($id)
    {
        $data = array(
            'perusahaandetail' => $this->Model_Pengguna_Perusahaan->select_by_id_perusahaan($id),
            'lowonganlain' => $this->Model_Pengguna_Perusahaan->perusahaan_id($id),
            'isi' => '/perusahaan/v_perusahaan_perusahaan_detail'
        );
        return view('layout_perusahaan/v_wrapper', $data);
    }

    public function lowongan_detail($id, $idper)
    {
        $data = array(
            'lowongandetail' => $this->Model_Pengguna_Perusahaan->select_by_id_lowongan($id),
            'lowonganlain' => $this->Model_Pengguna_Perusahaan->perusahaan_id($idper),
            'lowongan' => $this->Model_Pengguna_Perusahaan->lowongan_id($id),
            'isi' => '/perusahaan/v_perusahaan_lowongan_detail'
        );
        return view('layout_perusahaan/v_wrapper', $data);
    }

    public function ubahstatus($id, $idper)
    {
        $data = array(
            'id_lowongan' => $id,
            'status_lowongan' => $this->request->getPost('status'),
        );
        $this->Model_Pengguna_Perusahaan->editdatastatus($data);

        $data2 = array(
            'lowongandetail' => $this->Model_Pengguna_Perusahaan->select_by_id_lowongan($id),
            'lowonganlain' => $this->Model_Pengguna_Perusahaan->perusahaan_id($idper),
            'lowongan' => $this->Model_Pengguna_Perusahaan->lowongan_id($id),
            'isi' => '/perusahaan/v_perusahaan_lowongan_detail'
        );
        return view('layout_perusahaan/v_wrapper', $data2);
    }

    public function tambahlowongan()
    {
        $data = array(
            'isi' => '/perusahaan/v_perusahaan_tambah_lowongan'
        );
        return view('layout_perusahaan/v_wrapper', $data);
    }

    public function save_tambahlowongan($id)
    {
        $data = array(
            'id_perusahaan' => $id,
            'judul_lowongan' => $this->request->getPost('judul'),
            'pengalaman' => $this->request->getPost('pengalaman'),
            'jurusan' => $this->request->getPost('jurusan'),
            'lulusan' => $this->request->getPost('lulusan'),
            'persyaratan' => $this->request->getPost('syarat'),
            'gaji' => $this->request->getPost('gaji'),
            'status_lowongan' => 'y',
            'created_at' => $this->request->getPost('date'),
            'updated_at' => $this->request->getPost('date'),
        );

        $this->Model_Pengguna_Perusahaan->tambahlowongan($data);
        return redirect()->to(base_url('/user_perusahaan/lowongan_saya/' . $id));
    }
    //--------------------------------------------------------------------

}
