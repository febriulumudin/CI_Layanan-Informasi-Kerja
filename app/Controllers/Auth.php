<?php

namespace App\Controllers;

use App\Models\Model_Auth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Auth = new Model_Auth();
    }


    //REGISTER CODING
    public function register()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('v_register', $data);
    }

    public function save_register()
    {
        if ($this->validate([
            'nama_depan' => [
                'label' => 'Nama Depan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
            'nama_belakang' => [
                'label' => 'Nama Belakang',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ]
        ])) {
            //jika valid
            $data = array(
                'nama_depan' => $this->request->getPost('nama_depan'),
                'nama_belakang' => $this->request->getPost('nama_belakang'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'notelp' => $this->request->getPost('notelp'),
                'level' => 2
            );
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $this->Model_Auth->save_register($data);
            session()->setFlashdata('Pesan', 'Registrasi Berhasil!!');

            $cek = $this->Model_Auth->login($email, $password);
            if ($cek) {
                //Jika Data Cocok
                session()->set('log', true);
                session()->set('id_user', $cek['id_user']);
                session()->set('nama_depan', $cek['nama_depan']);
                session()->set('nama_belakang', $cek['nama_belakang']);
                session()->set('email', $cek['email']);
                session()->set('password', $cek['password']);
                session()->set('notelp', $cek['notelp']);
                session()->set('level', $cek['level']);
                session()->set('jen_kel', $cek['jen_kel']);
                session()->set('tgl_lahir', $cek['tgl_lahir']);
                session()->set('status_pernikahan', $cek['status_pernikahan']);
                session()->set('alamat', $cek['alamat']);
                session()->set('gaji', $cek['gaji']);
                session()->set('status_pekerjaan', $cek['status_pekerjaan']);
                session()->set('foto', $cek['foto']);

                return redirect()->to(base_url('auth/register_lanjut/' . $cek['id_user']));
            } else {
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getError());
            return redirect()->to(base_url('Auth/register'));
        }
    }


    public function register_lanjut()
    {
        $data = array(
            'isi' => 'v_register_lanjut'
        );
        return view('v_register_lanjut', $data);
    }


    public function save_lanjut($id)
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
            'id_user' => $id,
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'jen_kel' => $this->request->getPost('jenkel'),
            'tgl_lahir' => $this->request->getPost('date'),
            'status_pernikahan' => $this->request->getPost('status_pernikahan'),
            'alamat' => $this->request->getPost('alamat'),
            'gaji' => $this->request->getPost('gaji'),
            'foto' => $fullname
        );


        //DATA PENDIDIKAN
        $data_sd = array(
            'id_user' => $id,
            'tingkat_jenjang' => 'SD',
            'nama_tempat' => $this->request->getPost('nama_tempat'),
            'dari_tahun' => $this->request->getPost('dari_tahun'),
            'sampai_tahun' => $this->request->getPost('sampai_tahun'),
        );
        $data_smp = array(
            'id_user' => $id,
            'tingkat_jenjang' => 'SMP',
            'nama_tempat' => $this->request->getPost('nama_tempat_smp'),
            'dari_tahun' => $this->request->getPost('dari_tahun_smp'),
            'sampai_tahun' => $this->request->getPost('sampai_tahun_smp'),
        );
        $data_sma = array(
            'id_user' => $id,
            'tingkat_jenjang' => 'SMA',
            'nama_tempat' => $this->request->getPost('nama_tempat_sma'),
            'dari_tahun' => $this->request->getPost('dari_tahun_sma'),
            'sampai_tahun' => $this->request->getPost('sampai_tahun_sma'),
        );
        $data_pt = array(
            'id_user' => $id,
            'tingkat_jenjang' => 'PERGURUAN TINGGI',
            'nama_tempat' => $this->request->getPost('nama_tempat_pt'),
            'dari_tahun' => $this->request->getPost('dari_tahun_pt'),
            'sampai_tahun' => $this->request->getPost('sampai_tahun_pt'),
        );

        $this->Model_Auth->editdata($data);
        $this->Model_Auth->tambahpendidikanuser($data_sd);
        $this->Model_Auth->tambahpendidikanuser($data_smp);
        $this->Model_Auth->tambahpendidikanuser($data_sma);
        $this->Model_Auth->tambahpendidikanuser($data_pt);

        return redirect()->to(base_url('lowongan'));
    }

    //AUTH KE LOWONGAN
    public function kelowongan($id)
    {
        //SD
        $data_sd = array(
            'id_user' => $id,
            'tingkat_jenjang' => 'SD',
        );
        //SMP
        $data_smp = array(
            'id_user' => $id,
            'tingkat_jenjang' => 'SMP',
        );
        //SMA
        $data_sma = array(
            'id_user' => $id,
            'tingkat_jenjang' => 'SMA',
        );
        //PT
        $data_pt = array(
            'id_user' => $id,
            'tingkat_jenjang' => 'PERGURUAN TINGGI',
        );

        $this->Model_Auth->tambahpendidikanuser($data_sd);
        $this->Model_Auth->tambahpendidikanuser($data_smp);
        $this->Model_Auth->tambahpendidikanuser($data_sma);
        $this->Model_Auth->tambahpendidikanuser($data_pt);

        return redirect()->to(base_url('lowongan'));
    }

    //User Pangguna
    //LOGIN CODING
    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
        ])) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->Model_Auth->login($email, $password);
            if ($cek) {
                //Jika Data Cocok
                session()->set('log', true);
                session()->set('id_user', $cek['id_user']);
                session()->set('nama_depan', $cek['nama_depan']);
                session()->set('nama_belakang', $cek['nama_belakang']);
                session()->set('email', $cek['email']);
                session()->set('password', $cek['password']);
                session()->set('notelp', $cek['notelp']);
                session()->set('level', $cek['level']);
                session()->set('jen_kel', $cek['jen_kel']);
                session()->set('tempat_lahir', $cek['tempat_lahir']);
                session()->set('tgl_lahir', $cek['tgl_lahir']);
                session()->set('status_pernikahan', $cek['status_pernikahan']);
                session()->set('alamat', $cek['alamat']);
                session()->set('gaji', $cek['gaji']);
                session()->set('status_pekerjaan', $cek['status_pekerjaan']);
                session()->set('foto', $cek['foto']);


                if ($cek['level'] == 1) {
                    return redirect()->to(base_url('home'));
                } else {
                    return redirect()->to(base_url('lowongan'));
                }
            } else {
                //jika data tidak cocok
                session()->setFlashdata('Pesan', 'Login Gagal, Email Atau Password Tidak Cocok!!');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getError());
            return redirect()->to(base_url('auth/register'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('id_user');
        session()->remove('nama_depan');
        session()->remove('nama_belakang');
        session()->remove('email');
        session()->remove('password');
        session()->remove('notelp');
        session()->remove('level');
        session()->remove('jen_kel');
        session()->remove('tempat_lahir');
        session()->remove('tgl_lahir');
        session()->remove('status_pernikahan');
        session()->remove('alamat');
        session()->remove('gaji');
        session()->remove('status_pekerjaan');
        session()->remove('foto');
        session()->setFlashdata('Pesan', 'Akun Telah Logout!!');
        return redirect()->to(base_url('auth/login'));

        //Atur di Folder FIlters->Auth_Filter.php dan di Config->Filters.php
    }





    //User Perusahaan
    //REGISTER PERUSAHAAN
    public function register_perusahaan()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('v_register_perusahaan', $data);
    }


    //LOGIN CODING
    public function login_perusahaan()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login_perusahaan', $data);
    }

    public function cek_login_perusahaan()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
        ])) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->Model_Auth->login_per($email, $password);
            if ($cek) {
                //Jika Data Cocok
                session()->set('log', true);
                session()->set('id_perusahaan', $cek['id_perusahaan']);
                session()->set('email_per', $cek['email_per']);
                session()->set('password_per', $cek['password_per']);
                session()->set('nama_perusahaan', $cek['nama_perusahaan']);
                session()->set('alamat', $cek['alamat']);
                session()->set('jumlah_pegawai', $cek['jumlah_pegawai']);
                session()->set('telepon', $cek['telepon']);
                session()->set('tentang', $cek['tentang']);
                session()->set('bidang_usaha', $cek['bidang_usaha']);
                session()->set('hari_aktif', $cek['hari_aktif']);
                session()->set('jam_kerja', $cek['jam_kerja']);
                session()->set('visi', $cek['visi']);
                session()->set('misi', $cek['misi']);
                session()->set('logo_perusahaan', $cek['logo_perusahaan']);
                return redirect()->to(base_url('/user_perusahaan/index_home/' . $cek['id_perusahaan']));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('Pesan', 'Login Gagal, Email Atau Password Tidak Cocok!!');
                return redirect()->to(base_url('auth/login_perusahaan'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getError());
            return redirect()->to(base_url('auth/register_perusahaan'));
        }
    }

    public function logout_perusahaan()
    {
        session()->remove('log');
        session()->remove('id_perusahaan');
        session()->remove('email_per');
        session()->remove('password_per');
        session()->remove('nama_perusahaan');
        session()->remove('alamat');
        session()->remove('jumlahpegawai');
        session()->remove('telepon');
        session()->remove('tentang');
        session()->remove('bidang_usaha');
        session()->remove('hari_aktif');
        session()->remove('jam_kerja');
        session()->remove('visi');
        session()->remove('misi');
        session()->remove('logo_perusahaan');
        session()->setFlashdata('Pesan', 'Akun Telah Logout!!');
        return redirect()->to(base_url('auth/login_perusahaan'));

        //Atur di Folder FIlters->Auth_Filter.php dan di Config->Filters.php
    }

    public function save_register_perusahaan()
    {
        if ($this->validate([
            'nama_per' => [
                'label' => 'Nama Perusahaan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ]
        ])) {
            //jika valid
            $data = array(
                'nama_perusahaan' => $this->request->getPost('nama_per'),
                'email_per' => $this->request->getPost('email'),
                'password_per' => $this->request->getPost('password'),
                'telepon' => $this->request->getPost('notelp')
            );
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $this->Model_Auth->save_register_perusahaan($data);
            session()->setFlashdata('Pesan', 'Registrasi Berhasil!!');

            $cek = $this->Model_Auth->login_per($email, $password);
            if ($cek) {
                //Jika Data Cocok
                session()->set('log', true);
                session()->set('id_perusahaan', $cek['id_perusahaan']);
                session()->set('email_per', $cek['email_per']);
                session()->set('password_per', $cek['password_per']);
                session()->set('nama_perusahaan', $cek['nama_perusahaan']);
                session()->set('alamat', $cek['alamat']);
                session()->set('jumlah_pegawai', $cek['jumlah_pegawai']);
                session()->set('telepon', $cek['telepon']);
                session()->set('tentang', $cek['tentang']);
                session()->set('bidang_usaha', $cek['bidang_usaha']);
                session()->set('hari_aktif', $cek['hari_aktif']);
                session()->set('jam_kerja', $cek['jam_kerja']);
                session()->set('visi', $cek['visi']);
                session()->set('misi', $cek['misi']);
                session()->set('logo_perusahaan', $cek['logo_perusahaan']);

                return redirect()->to(base_url('/auth/register_lanjut_perusahaan/' . $cek['id_perusahaan']));
            } else {
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getError());
            return redirect()->to(base_url('Auth/register_perusahan'));
        }
    }

    public function register_lanjut_perusahaan()
    {
        $data = array(
            'isi' => 'v_register_lanjut_perusahaan'
        );
        return view('v_register_lanjut_perusahaan', $data);
    }


    public function save_lanjut_perusahaan($id)
    {
        $image = $this->request->getFile('image');

        if ($image != '') {
            $fileName = time() . $image->getClientName();
            $image->move('LogoPer', $fileName);
            $fullname = $fileName;
        } else {
            $fullname = $this->request->getPost('foto_ori');
        }
        $data = array(
            'id_perusahaan' => $id,
            'alamat' => $this->request->getPost('alamat'),
            'jumlah_pegawai' => $this->request->getPost('jum_peg'),
            'telepon' => $this->request->getPost('telepon'),
            'tentang' => $this->request->getPost('tentang'),
            'bidang_usaha' => $this->request->getPost('bidang_usaha'),
            'hari_aktif' => $this->request->getPost('hari_aktif'),
            'visi' => $this->request->getPost('visi'),
            'misi' => $this->request->getPost('misi'),
            'logo_perusahaan' => $fullname
        );

        $this->Model_Auth->editdataperusahaan($data);
        return redirect()->to(base_url('/user_perusahaan/index_home/' . $id));
    }
}

    //contoh simpan gambar di Imageupload.php dan cara_upload_gambar/upload.php
