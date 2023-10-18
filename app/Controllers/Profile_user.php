<?php

namespace App\Controllers;

use App\Models\Model_User_Profile;

class Profile_user extends BaseController
{
    public function __construct()
    {
        $this->Model_User_Profile = new Model_User_Profile();
        helper('form');
    }

    public function index($iduser)
    {
        $data = array(
            'userpendidikan' => $this->Model_Kategori_lowongan_user->userpendidikan($iduser),
            'userpengalaman' => $this->Model_Kategori_lowongan_user->userpengalaman($iduser),
            'userkemampuan' => $this->Model_Kategori_lowongan_user->userkemampuan($iduser),
            'isi' => '/user/v_user_profil'
        );
        return view('layout_user1/v_wrapper', $data);
    }


    public function data($iduser)
    {
        $data = array(
            'user' => $this->Model_User_Profile->user($iduser),
            'userpendidikan' => $this->Model_User_Profile->userpendidikan($iduser),
            'userpengalaman' => $this->Model_User_Profile->userpengalaman($iduser),
            'userkemampuan' => $this->Model_User_Profile->userkemampuan($iduser),
            'isi' => '/user/v_user_profil'
        );
        return view('layout_user1/v_wrapper', $data);
    }


    public function editdata($iduser)
    {
        $data = array(
            'user' => $this->Model_User_Profile->user($iduser),
            'userpendidikan' => $this->Model_User_Profile->userpendidikan($iduser),
            'userpengalaman' => $this->Model_User_Profile->userpengalaman($iduser),
            'userkemampuan' => $this->Model_User_Profile->userkemampuan($iduser),
            'isi' => '/user/v_user_profil_ubah'
        );
        return view('layout_user1/v_wrapper', $data);
    }

    //SAVE-UBAH DATA DIRI
    public function save_ubah($id_user)
    {
        $image = $this->request->getFile('image');

        if ($image != '') {
            $fileName = time() . $image->getClientName();
            $image->move('profile', $fileName);
            $fullname = $fileName;
        } else {
            $fullname = $this->request->getPost('foto_ori');
        }

        $data = array(
            'id_user' => $id_user,
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'alamat' => $this->request->getPost('alamat'),
            'notelp' => $this->request->getPost('notelp'),
            'gaji' => $this->request->getPost('gaji'),
            'status_pernikahan' => $this->request->getPost('status_pernikahan'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jen_kel' => $this->request->getPost('jen_kel'),
            'foto' => $fullname
        );
        $this->Model_User_Profile->usereditdatadiri($data);
        return redirect()->to(base_url('profile_user/editdata/' . $id_user));
    }


    //SAVE-UBAH DATA PENDIDIKAN
    public function save_ubah_pendidikan($id_user, $id_pendidikan)
    {
        $data = array(
            'id_pendidikan' => $id_pendidikan,
            'id_user' => $id_user,
            'nama_tempat'  => $this->request->getPost('nama_tempat'),
            'dari_tahun' => $this->request->getPost('dari_tahun'),
            'sampai_tahun' => $this->request->getPost('sampai_tahun'),
        );
        $this->Model_User_Profile->usereditdatapendidikan($data);
        return redirect()->to(base_url('profile_user/editdata/' . $id_user));
    }


    //SAVE-UBAH DATA PENGALAMAN
    public function save_ubah_pengalaman($id_user, $id_pengalaman)
    {
        $data = array(
            'id_pengalaman' => $id_pengalaman,
            'id_user' => $id_user,
            'nama_per'  => $this->request->getPost('nama_per'),
            'bagian' => $this->request->getPost('bagian'),
            'dari_tahun' => $this->request->getPost('dari_tahun'),
            'sampai_tahun' => $this->request->getPost('sampai_tahun'),
        );
        $this->Model_User_Profile->usereditdatapengalaman($data);
        return redirect()->to(base_url('profile_user/editdata/' . $id_user));
    }


    //SAVE-TAMBAH DATA PENGALAMAN
    public function save_pengalaman($id_user)
    {
        $data = array(
            'id_user' => $id_user,
            'nama_per'  => $this->request->getPost('nama_per'),
            'bagian' => $this->request->getPost('bagian'),
            'dari_tahun' => $this->request->getPost('dari_tahun'),
            'sampai_tahun' => $this->request->getPost('sampai_tahun'),
        );
        $this->Model_User_Profile->save_tambah_pengalaman($data);
        return redirect()->to(base_url('profile_user/editdata/' . $id_user));
    }


    //HAPUS DATA PENGALAMAN
    public function hapus_pengalaman($id_pengalaman, $id_user)
    {
        $data = array(
            'id_pengalaman' => $id_pengalaman
        );
        $this->Model_User_Profile->hapusdatapengalaman($data);
        return redirect()->to(base_url('profile_user/editdata/' . $id_user));
    }


    //SAVE-UBAH DATA KEMAMPUAN
    public function save_ubah_kemampuan($id_user, $id_kemampuan)
    {
        $data = array(
            'id_kemampuan' => $id_kemampuan,
            'id_user' => $id_user,
            'jenis_kemampuan'  => $this->request->getPost('jenis_kemampuan'),
            'aplikasi' => $this->request->getPost('aplikasi'),
        );
        $this->Model_User_Profile->usereditdatakemampuan($data);
        return redirect()->to(base_url('profile_user/editdata/' . $id_user));
    }


    //SAVE-TAMBAH DATA PENGALAMAN
    public function save_kemampuan($id_user)
    {
        $data = array(
            'id_user' => $id_user,
            'jenis_kemampuan'  => $this->request->getPost('jenis_kemampuan'),
            'aplikasi' => $this->request->getPost('aplikasi')
        );
        $this->Model_User_Profile->save_tambah_kemampuan($data);
        return redirect()->to(base_url('profile_user/editdata/' . $id_user));
    }

    //HAPUS DATA KEMAMPUAN
    public function hapus_kemampuan($id_kemampuan, $id_user)
    {
        $data = array(
            'id_kemampuan' => $id_kemampuan
        );
        $this->Model_User_Profile->hapusdatakemampuan($data);
        return redirect()->to(base_url('profile_user/editdata/' . $id_user));
    }

    //--------------------------------------------------------------------

}
