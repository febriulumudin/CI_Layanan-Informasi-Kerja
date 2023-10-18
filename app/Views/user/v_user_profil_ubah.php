<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="mb-4">
                    <h2 class="text-white pb-2 fw-bold" style="font-family: sans-serif;">Profile User</h2>
                </div>
            </div>
        </div>
    </div>

    <!--  Data Diri  -->
    <div class="page-inner" style="margin-top: -90px;">
        <div class="card card-post card-round">
            <div class="row pt-3">
                <div class="col-12 text-center">
                    <strong style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Data Diri Profile</strong>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-12">
                    <?php foreach ($user as $key => $valueuser) : ?>
                        <div class="row pl-3 pt-1s">
                            <div class="col-3" style="vertical-align: middle; text-align: center;">
                                <img class="card-img-top p-3 rounded" style="vertical-align: middle; padding-top: 200px !important; width: 100% !important;" src="<?= base_url('profile/' . $valueuser['foto']) ?>" alt="Card image cap">
                            </div>
                            <div class="col-9 card-body" style="padding-right: 38px;">
                                <h3 class="card-title text-info pb-2" style="font-family: inherit; font-weight: bold; font-size: 25px;">
                                    <?= $valueuser['nama_depan'] . ' ' . $valueuser['nama_belakang'] ?>
                                </h3>
                                <div class="row">
                                    <div class="col-12 mr-5">
                                        <table class="table table-striped">
                                            <tbody>
                                                <?php foreach ($user as $key => $valueuser) : ?>
                                                    <tr class="mr-5">
                                                        <td width="30%" style="font-size: 16px;">Email</td>
                                                        <td width="4%" style="font-size: 16px;">:</td>
                                                        <td width="65%" style="font-size: 16px;"><?= $valueuser['email'] ?></td>
                                                    </tr>
                                                    <tr class="mr-5">
                                                        <td width="30%" style="font-size: 16px;">Harapan Gajil</td>
                                                        <td width="4%" style="font-size: 16px;">:</td>
                                                        <td width="65%" style="font-size: 16px;"><?= $valueuser['gaji'] ?></td>
                                                    </tr>
                                                    <tr class="mr-5">
                                                        <td width="30%" style="font-size: 16px;">Alamat</td>
                                                        <td width="4%" style="font-size: 16px;">:</td>
                                                        <td width="65%" style="font-size: 16px;"><?= $valueuser['alamat'] ?></td>
                                                    </tr>
                                                    <tr class="mr-5">
                                                        <td width="30%" style="font-size: 16px;">Nomor Telepon</td>
                                                        <td width="4%" style="font-size: 16px;">:</td>
                                                        <td width="65%" style="font-size: 16px;"><?= $valueuser['notelp'] ?></td>
                                                    </tr>
                                                    <tr class="mr-5">
                                                        <td width="30%" style="font-size: 16px;">Status Pernikahan</td>
                                                        <td width="4%" style="font-size: 16px;">:</td>
                                                        <td width="65%" style="font-size: 16px;"><?= $valueuser['status_pernikahan'] ?></td>
                                                    </tr>
                                                    <tr class="mr-5">
                                                        <td width="30%" style="font-size: 16px;">Tempat Lahir</td>
                                                        <td width="4%" style="font-size: 16px;">:</td>
                                                        <td width="65%" style="font-size: 16px;"><?= $valueuser['tempat_lahir'] ?></td>
                                                    </tr>
                                                    <tr class="mr-5">
                                                        <td width="30%" style="font-size: 16px;">Tanggal Lahir</td>
                                                        <td width="4%" style="font-size: 16px;">:</td>
                                                        <td width="65%" style="font-size: 16px;"><?= $valueuser['tgl_lahir'] ?></td>
                                                    </tr>
                                                    <tr class="mr-5">
                                                        <td width="30%" style="font-size: 16px;">Jenis Kelamin</td>
                                                        <td width="4%" style="font-size: 16px;">:</td>
                                                        <td width="65%" style="font-size: 16px;">
                                                            <?php if ($valueuser['jen_kel'] == 'L') {
                                                                echo "Laki-Laki";
                                                            } else {
                                                                echo "Perempuan";
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pl-3 pb-3 mt--3">
                            <div class="col-12 card-body">
                                <div class="row pt-3 pl-3 text-center">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-info btn-md" style="width: 30%; white-space: normal;" data-toggle="modal" data-target="#modalubahdataprofil<?= session()->get('id_user') ?>">
                                            Ubah Data Profil
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>


    <!--  Data Pendidikan -->
    <div class="page-inner" style="margin-top: -65px;">
        <div class="card card-post card-round">
            <div class="row pt-4 pb-2">
                <div class="col-12 pb-2 text-center">
                    <strong style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Data Pendidikan</strong>
                </div>
            </div>
            <div class="row mb-3 mr-2 mt-2" style="padding-left: 30px;">
                <div class="col-12">
                    <div class="row pt-1 pb-3">
                        <div class="col-12">
                            <table class="table table-striped mr--5">
                                <tbody>
                                    <?php foreach ($userpendidikan as $key => $value) : ?>
                                        <tr class="mr-5">
                                            <td width="25%"><?= $value['tingkat_jenjang'] ?></td>
                                            <td width="35%"><?= $value['nama_tempat'] ?></td>
                                            <td width="20%"><?= $value['dari_tahun'] . ' - ' . $value['sampai_tahun'] ?></td>
                                            <td width="20%">
                                                <div class="container text-center">
                                                    <a href="#" class="btn btn-primary btn-xs" style="width: 63%; white-space: normal;" data-toggle="modal" data-target="#modalubahdatapendidikan<?= $value['id_pendidikan'] ?>">
                                                        Ubah Data
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  Data Pengalaman  -->
    <div class="page-inner" style="margin-top: -65px;">
        <div class="card card-post card-round">
            <div class="row pt-4 pb-2">
                <div class="col-12 pb-2 text-center">
                    <strong style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Data Pengalaman Kerja</strong>
                </div>
            </div>
            <div class="row mb-3 mr-2 mt-2" style="padding-left: 30px;">
                <div class="col-12">
                    <div class="row pt-1 pb-3">
                        <div class="col-12">
                            <table class="table table-striped mr--5">
                                <tbody>
                                    <?php foreach ($userpengalaman as $key => $value) : ?>
                                        <tr class="mr-5">
                                            <td width="30%"><?= $value['bagian'] ?></td>
                                            <td width="30%"><?= $value['nama_per'] ?></td>
                                            <td width="20%"><?= $value['dari_tahun'] . ' - ' . $value['sampai_tahun'] ?></td>
                                            <td width="20%">
                                                <a href="#" class="btn btn-primary btn-xs float-left" style="width: 43%; white-space: normal;" data-toggle="modal" data-target="#modalubahdatapengalaman<?= $value['id_pengalaman'] ?>">
                                                    Ubah Data
                                                </a>
                                                <a href="#" class="btn btn-danger btn-xs float-right" data-toggle="modal" data-target="#hapuspengalaman<?= $value['id_pengalaman']; ?>" style="width: 43%; white-space: normal;">
                                                    Hapus Data
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row pt-3 pl-3 text-center">
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-info btn-md" style="width: 30%; white-space: normal;" data-toggle="modal" data-target="#modaltambahdatapengalaman">
                                Tambah Data Pengalaman
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  Data Kemampuan  -->
    <div class="page-inner" style="margin-top: -65px;">
        <div class="card card-post card-round">
            <div class="row pt-4 pb-2">
                <div class="col-12 pb-2 text-center">
                    <strong style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Data Kemampuan Penguasaan</strong>
                </div>
            </div>
            <div class="row mb-3 mr-2 mt-2" style="padding-left: 30px;">
                <div class="col-12">
                    <div class="row pt-1 pb-3">
                        <div class="col-12">
                            <table class="table table-striped mr--5">
                                <tbody>
                                    <?php foreach ($userkemampuan as $key => $value) : ?>
                                        <tr class="mr-5">
                                            <td width="30%"><?= $value['jenis_kemampuan'] ?></td>
                                            <td width="50%"><?= $value['aplikasi'] ?></td>
                                            <td width="20%">
                                                <a href="#" class="btn btn-primary btn-xs float-left" style="width: 43%; white-space: normal;" data-toggle="modal" data-target="#modalubahdatakemampuan<?= $value['id_kemampuan'] ?>">
                                                    Ubah Data
                                                </a>
                                                <a href="#" class="btn btn-danger btn-xs float-right" data-toggle="modal" data-target="#hapuskemampuan<?= $value['id_kemampuan']; ?>" style="width: 43%; white-space: normal;">
                                                    Hapus Data
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row pt-3 pl-3 text-center">
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-info btn-md" style="width: 30%; white-space: normal;" data-toggle="modal" data-target="#modaltambahdatakemampuan">
                                Tambah Data Kemampuan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--  MODAL SEMUA-->



<!--  MODAL EDIT DATA PROFILE-->
<?php foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="modalubahdataprofil<?= session()->get('id_user') ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Edit Data Diri Profil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <?php $validation = session()->getFlashdata('validation'); ?>

                    <?php echo form_open_multipart('profile_user/save_ubah/' . $value['id_user']) ?>
                    <div class="form-group">
                        <label>Nama Depan</label>
                        <input type="text" name="nama_depan" value="<?= $value['nama_depan']; ?>" class="form-control" placeholder="Nama Depan" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Belakang</label>
                        <input type="text" name="nama_belakang" value="<?= $value['nama_belakang']; ?>" class="form-control" placeholder="Nama Belakang" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?= $value['email']; ?>" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" value="<?= $value['password']; ?>" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?= $value['alamat']; ?>" class="form-control" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="notelp" value="<?= $value['notelp']; ?>" class="form-control" placeholder="Handphone" required>
                    </div>
                    <div class="form-group">
                        <label>Harapan Gaji</label>
                        <input type="text" name="gaji" value="<?= $value['gaji']; ?>" class="form-control" placeholder="Gaji" required>
                    </div>
                    <div class="form-group">
                        <label>Status Pernikahan</label>
                        <select class="form-control" name="status_pernikahan" placeholder="Handphone">
                            <?php
                            if ($value['status_pernikahan'] == 'Lajang') { ?>
                                <option value="Lajang" selected>Lajang</option>
                                <option value="Menikah">Menikah</option>
                            <?php } else { ?>
                                <option value="Lajang">Lajang</option>
                                <option value="Menikah" selected>Menikah</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="<?= $value['tempat_lahir']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="<?= $value['tgl_lahir']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jen_kel">
                            <?php
                            if ($value['jen_kel'] == 'L') { ?>
                                <option value="L" selected>Laki-laki</option>
                                <option value="P">Perempuan</option>
                            <?php } else { ?>
                                <option value="L">Laki-laki</option>
                                <option value="P" selected>Perempuan</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Poto Profil</label>
                        <div class="custom-file">
                            <input type="file" class="form-control-file" name="image" id="image">
                            <?php if ($validation && isset($validation['image'])) : ?>
                                <div class="invalid-feedback" style="height: 100px; width: 100px;"><?= $validation['image'] ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="img-preview" value="<?= base_url('profile/' . session()->get('foto')) ?>" style="margin-bottom: 20px; width: 40% !important;"></div>
                    <input type="text" name="foto_ori" value="<?= $value['foto']; ?>" class="form-control hidden" style="visibility: hidden; margin-bottom: -60px;">

                    <div class="form-group">
                        <label>Level</label>
                        <?php
                        if ($value['level'] == 1) { ?>
                            <input type="text" name="level" value="Admin" class="form-control" readonly>
                        <?php } else { ?>
                            <input type="text" name="level" value="User" class="form-control" readonly>
                        <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->


<!--  MODAL EDIT DATA PENDIDIKAN-->
<?php foreach ($userpendidikan as $key => $value) { ?>
    <div class="modal fade" id="modalubahdatapendidikan<?= $value['id_pendidikan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Edit Data Diri Profil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('profile_user/save_ubah_pendidikan/' . $value['id_user'] . '/' . $value['id_pendidikan']) ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8 mb-3">
                                <div class="pb-1" style="font-size: 17px;"><?= $value['tingkat_jenjang']; ?></div>
                                <span>Nama Sekolah</span>
                                <input type="text" name="nama_tempat" value="<?= $value['nama_tempat']; ?>" class="form-control">
                                <span>Dari Tahun</span>
                                <input type="text" name="dari_tahun" value="<?= $value['dari_tahun']; ?>" class="form-control">
                                <span>Sampai Tahun</span>
                                <input type="text" name="sampai_tahun" value="<?= $value['sampai_tahun']; ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->


<!--  MODAL EDIT DATA PENGALAMAN-->
<?php foreach ($userpengalaman as $key => $value) { ?>
    <div class="modal fade" id="modalubahdatapengalaman<?= $value['id_pengalaman'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Edit Data Pengalaman Kerja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('profile_user/save_ubah_pengalaman/' . $value['id_user'] . '/' . $value['id_pengalaman']) ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8 mb-3">
                                <span>Nama Perusahaan</span>
                                <input type="text" name="nama_per" value="<?= $value['nama_per']; ?>" class="form-control">
                                <span>Di Bagian</span>
                                <input type="text" name="bagian" value="<?= $value['bagian']; ?>" class="form-control">
                                <span>Dari Tahun</span>
                                <input type="text" name="dari_tahun" value="<?= $value['dari_tahun']; ?>" class="form-control">
                                <span>Sampai Tahun</span>
                                <input type="text" name="sampai_tahun" value="<?= $value['sampai_tahun']; ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->


<!--  MODAL TAMBAH DATA PENGALAMAN-->
<div class="modal fade" id="modaltambahdatapengalaman">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Tambah Data Pengalaman Kerja</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach ($userpengalaman as $key => $value) { ?>
                    <?php echo form_open('profile_user/save_pengalaman/' . $value['id_user']) ?>
                <?php } ?>
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="nama_per" class="form-control" placeholder="Nama Perusahaan" required>
                </div>
                <div class="form-group">
                    <label>Di Bagian</label>
                    <input type="text" name="bagian" class="form-control" placeholder="Bagian" required>
                </div>
                <div class="form-group">
                    <label>Dari Tahun</label>
                    <input type="text" name="dari_tahun" class="form-control" placeholder="Dari Tahun" required>
                </div>
                <div class="form-group">
                    <label>Sampai Tahun</label>
                    <input type="text" name="sampai_tahun" class="form-control" placeholder="Sampai Tahun" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary" id="alert_demo_3_4_1">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!--  MODAL HAPUS DATA PENGALAMAN-->
<?php foreach ($userpengalaman as $key => $value) { ?>
    <div class="modal fade" id="hapuspengalaman<?= $value['id_pengalaman']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(255,0,0,0.8)!important;">
                    <h4 class="modal-titlet" style="font-weight: bold; color: white;">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Data Pengalaman Yang Anda Pilih
                    <?= 'Pengalaman ' . '<strong>' . $value['bagian'] . '</strong>' . ' Di perusahaan ' . ' <strong>' . $value['nama_per'] . '</strong>'; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('profile_user/hapus_pengalaman/' . $value['id_pengalaman'] . '/' . $value['id_user']) ?>" type="submit" class="btn btn-danger">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->


<!--  MODAL EDIT DATA KEMAMPUAN-->
<?php foreach ($userkemampuan as $key => $value) { ?>
    <div class="modal fade" id="modalubahdatakemampuan<?= $value['id_kemampuan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Edit Data Kemampuan Yang Dimiliki</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('profile_user/save_ubah_kemampuan/' . $value['id_user'] . '/' . $value['id_kemampuan']) ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8 mb-3">
                                <span>Jenis Kemampuan</span>
                                <input type="text" name="jenis_kemampuan" value="<?= $value['jenis_kemampuan']; ?>" class="form-control">
                                <span>Aplikasi Yang Dimanfaatkan</span>
                                <textarea name="aplikasi" class="form-control"><?= $value['aplikasi']; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->


<!--  MODAL TAMBAH DATA KEMAMPUAN-->
<div class="modal fade" id="modaltambahdatakemampuan">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Tambah Data Kemampuan Penguasaan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach ($userkemampuan as $key => $value) { ?>
                    <?php echo form_open('profile_user/save_kemampuan/' . $value['id_user']) ?>
                <?php } ?>
                <div class="form-group">
                    <label>Jenis Kemampuan</label>
                    <input type="text" name="jenis_kemampuan" class="form-control" placeholder="jenis_kemampuan" required>
                </div>
                <div class="form-group">
                    <label>Aplikasi</label>
                    <textarea name="aplikasi" class="form-control" placeholder="Bagian" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary" id="alert_demo_3_4_1">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!--  MODAL HAPUS DATA KEMAMPUAN-->
<?php foreach ($userkemampuan as $key => $value) { ?>
    <div class="modal fade" id="hapuskemampuan<?= $value['id_kemampuan']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(255,0,0,0.8)!important;">
                    <h4 class="modal-titlet" style="font-weight: bold; color: white;">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Data Kemampuan Yang Anda Pilih
                    <?= 'Jenis Kemampuan ' . '<strong>' . $value['jenis_kemampuan'] . '</strong>'; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('profile_user/hapus_kemampuan/' . $value['id_kemampuan'] . '/' . $value['id_user']) ?>" type="submit" class="btn btn-danger">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->