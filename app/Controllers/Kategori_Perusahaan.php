<?php

namespace App\Controllers;

use App\Models\Model_Kategori_Perusahaan;

class Kategori_Perusahaan extends BaseController
{
    public function __construct()
    {
        $this->Model_Kategori = new Model_Kategori_Perusahaan();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => '',
            'perusahaan' => $this->Model_Kategori->tampildata(),
            'isi' => '/admin/v_perusahaan'
        );
        return view('layout/v_wrapper', $data);
    }

    public function save_register()
    {
        $data = array(
            'email_per' => $this->request->getPost('email_per'),
            'password_per' => $this->request->getPost('password_per'),
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'bidang_usaha' => $this->request->getPost('bidang_usaha')
        );
        $this->Model_Kategori->save_register($data);
        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan.  Silahkan cek kembali.');
        return redirect()->to(base_url('kategori_perusahaan'));
    }

    public function save_ubah($id_perusahaan)
    {
        $data = array(
            'id_perusahaan' => $id_perusahaan,
            'email_per' => $this->request->getPost('email_per'),
            'password_per' => $this->request->getPost('password_per'),
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'bidang_usaha' => $this->request->getPost('bidang_usaha')
        );
        $this->Model_Kategori->editdata($data);
        session()->setFlashdata('Pesan', 'Data berhasil dirubah!!!');
        return redirect()->to(base_url('kategori_perusahaan'));
    }

    public function hapus($id_perusahaan)
    {
        $data = array(
            'id_perusahaan' => $id_perusahaan
        );
        $this->Model_Kategori->hapusdata($data);
        session()->setFlashdata('Pesan', 'Data berhasil dihapus!!!');
        return redirect()->to(base_url('kategori_perusahaan'));
    }
    //--------------------------------------------------------------------

}
