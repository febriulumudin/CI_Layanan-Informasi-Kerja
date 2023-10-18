<?php

namespace App\Controllers;

use App\Models\Model_Kategori_user;

class Kategori extends BaseController
{
    public function __construct()
    {
        $this->Model_Kategori = new Model_Kategori_user();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => '',
            'user' => $this->Model_Kategori->tampildata(),
            'isi' => '/admin/v_user'
        );
        return view('layout/v_wrapper', $data);
    }

    public function save_register()
    {
        $data = array(
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'notelp' => $this->request->getPost('notelp'),
            'level' => $this->request->getPost('level')
        );
        $this->Model_Kategori->save_register($data);
        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan.  Silahkan cek kembali.');
        return redirect()->to(base_url('kategori'));
    }

    public function save_ubah($id_user)
    {
        $data = array(
            'id_user' => $id_user,
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'notelp' => $this->request->getPost('notelp'),
            'level' => $this->request->getPost('level')
        );
        $this->Model_Kategori->editdata($data);
        session()->setFlashdata('Pesan', 'Data berhasil dirubah!!!');
        return redirect()->to(base_url('kategori'));
    }

    public function hapus($id_user)
    {
        $data = array(
            'id_user' => $id_user
        );
        $this->Model_Kategori->hapusdata($data);
        session()->setFlashdata('Pesan', 'Data berhasil dihapus!!!');
        return redirect()->to(base_url('kategori'));
    }
    //--------------------------------------------------------------------

}
