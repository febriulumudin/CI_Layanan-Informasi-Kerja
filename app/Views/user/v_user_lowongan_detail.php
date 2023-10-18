<div class="content">
    <?php foreach ($lowongandetail as $key => $value) : ?>
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div class="mb-5">
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner" style="margin-top: -90px;">
            <div class="card card-post card-round">
                <div class="row pt-3">
                    <div class="col-12">
                        <div class="row pl-3 pt-2 pb-3">
                            <div class="col-4 text-right">
                                <img class="card-img-top container p-1" src="<?= base_url('LogoPer/' . $value['logo_perusahaan']) ?>" style="width: 100% !important; align: center;" alt="Card image cap">
                            </div>
                            <div class="col-5 text-left">
                                <h2 class="fw-bold"><?= $value['judul_lowongan'] ?></h2>
                                <h2 class="fw-bold" style="font-size: 19px;"><?= $value['nama_perusahaan'] ?></h2>
                                <p class="username">
                                    <div class="float-left pr-5">
                                        <i class="icon-grid" style="padding-right: 4px;"></i><?= $value['bidang_usaha'] ?>
                                    </div>
                                    <div>
                                        <i class="icon-location-pin" style="padding-right: 2px;"></i><?= $value['alamat'] ?>
                                    </div>
                                </p>
                                <div class="float-left" style="margin-top: -8px; padding-right: 30px;">
                                    <i class="icon-briefcase" style="padding-right: 4px;"></i>Pengalaman&nbsp; <?= $value['pengalaman'] ?>
                                </div>
                                <div style="margin-top: -8px;">
                                    <i class="far fa-money-bill-alt" style="padding-right: 4px;"></i>Gaji&nbsp; Rp.<?= $value['gaji'] ?>
                                </div>
                                <hr class="fw-bold" style="margin-right: 120px;">
                                <div style="margin-top: -8px;">
                                    <i class="icon-clock" style="padding-right: 4px;"></i>Di Tayangkan pada&nbsp; <?= $value['created_at'] ?>
                                </div>
                            </div>
                            <div class="col-3 text-center" style="padding-top: 40px !important;">
                                <?php
                                if ($value['status_lowongan'] == 'y') { ?>
                                    <a href="#" class="btn btn-primary btn-md" style="white-space: normal;" data-toggle="modal" data-target="#modaluserdata<?= session()->get('id_user') ?>">
                                        Lamar
                                    </a>
                                <?php } else { ?>
                                    <button class="btn btn-danger btn-md" id="alert_demo_3_2_2" style="white-space: normal;">
                                        Lamar Non-Aktif
                                    </button>
                                <?php } ?>
                                <br>
                                <button class="btn btn-light btn-md mt-2" style="white-space: normal;">
                                    <span class="btn-label">
                                        <i class="fas fa-bookmark"></i>
                                    </span>
                                    Simpan
                                </button>
                            </div>
                        </div>
                        <div class="card-body mt-1">
                            <div class="row">
                                <div class="col-4">
                                    <hr>
                                    <div class="username" style="font-size: 15px;">
                                        <strong>Lulusan dari jurusan : </strong><br>
                                        <?= $value['jurusan'] ?>
                                    </div>
                                    <div class="username pt-2" style="font-size: 15px;">
                                        <strong>Lulusan minimal : </strong><br>
                                        <?= $value['lulusan'] ?>
                                    </div>
                                    <hr>
                                    <div>
                                        <div id="map" class="gmaps" style="height: 300px;"></div><br>
                                        <div>
                                            <i class="icon-location-pin" style="padding-right: 2px;"></i><?= $value['alamat'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <h3 class="card-title">
                                            Persayaran Lamaran
                                        </h3>
                                        <hr style="margin-right: 140px;">
                                        <div class="username"><?= $value['persyaratan'] ?></div>
                                    </div>
                                    <div class="pt-5">
                                        <h3 class="card-title">
                                            Tentang Perusahaan
                                        </h3>
                                        <hr style="margin-right: 140px;">
                                        <div class="username"><?= $value['tentang'] ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-7">
                                    <div>
                                        <h3 class="card-title pt-5">
                                            Lowongan kerja lain di perusahaan <?= $value['nama_perusahaan'] ?>
                                        </h3>
                                        <hr style="margin-right: 140px;">
                                        <?php foreach ($lowonganlain as $key => $valuelain) : ?>
                                            <a href="/lowongan/lowongan_detail/<?= $valuelain["id_lowongan"] ?>/<?= $valuelain["id_perusahaan"] ?>/<?= session()->get('id_user') ?>">
                                                <h2 style="font-size: 20px;"><?= $valuelain['judul_lowongan'] ?></h2>
                                            </a>
                                            <div style="margin-top: -8px;">
                                                <div class="float-left">
                                                    <i class="icon-clock" style="padding-right: 4px;"></i>Di Tayangkan pada&nbsp; <?= $valuelain['created_at'] ?>
                                                </div>
                                                <div class="float-left pl-3 pr-4">
                                                    <i class="icon-location-pin" style="padding-right: 2px;"></i><?= $valuelain['alamat'] ?>
                                                </div>
                                                <div>
                                                    <i class="icon-grid" style="padding-right: 4px;"></i><?= $valuelain['bidang_usaha'] ?>
                                                </div>
                                            </div>
                                            <div class="pt-2 pb-3 pr-4 float-left">
                                                <i class="icon-briefcase" style="padding-right: 4px;"></i>Pengalaman&nbsp; <?= $valuelain['pengalaman'] ?>
                                            </div>
                                            <div class="pt-2 pb-3">
                                                <i class="far fa-money-bill-alt" style="padding-right: 4px;"></i>Gaji&nbsp; Rp.<?= $valuelain['gaji'] ?>
                                            </div>

                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="/perusahaan/perusahaan_detail/<?= $value["id_perusahaan"] ?>" class="btn btn-primary btn-lg" style="width: 100%;">
                                        Info Lengkap Perusahaan <strong><?= $value['nama_perusahaan'] ?></strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



<!-- Modal lamar Kerja -->
<?php foreach ($userdata as $key => $value) : ?>
    <div class="modal fade" id="modaluserdata<?= $value['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong style="font-family: 'Times New Roman', Times, serif;">CURRICULUM VITAE</strong></h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center pb-3" style="font-size: 22px; font-family: 'Times New Roman', Times, serif; font-weight: bold; margin-top: -30px">
                                    Data Diri
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div>Nama</div>
                                <div>Tempat, Tgl lahir</div>
                                <div>Jenis Kelamin</div>
                                <div>Kewearga Negaraan</div>
                                <div>Status</div>
                                <div>Alamat Sekarang</div>
                                <div>Telepon</div>
                                <div>E-Mail</div>
                            </div>
                            <div class="col-6">
                                <div>: <?= $value['nama_depan'] . ' ' . $value['nama_belakang'] ?></div>
                                <div>: <?= $value['tempat_lahir'] . ', ' . $value['tgl_lahir'] ?></div>
                                <div>: <?= $value['jen_kel'] ?></div>
                                <div>: Indonesia</div>
                                <div>: <?= $value['status_pernikahan'] ?></div>
                                <div>: <?= $value['alamat'] ?></div>
                                <div>: <?= $value['notelp'] ?></div>
                                <div>: <?= $value['email'] ?></div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <img class="card-img-top container p-4" src="<?= base_url('profile/' . $value['foto']) ?>" style="width: 100% !important; align: left;" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 pt-3">
                                <div class="text-center" style="font-size: 17px; font-family: 'Times New Roman', Times, serif; font-weight: bold; margin-bottom: -17px !important;">
                                    PENDIDIKAN
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-3">
                                <?php foreach ($userpendidikan as $key => $value) : ?>
                                    <div><?= $value['dari_tahun'] . ' - ' . $value['sampai_tahun'] ?></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-9">
                                <?php foreach ($userpendidikan as $key => $value) : ?>
                                    <div><?= $value['nama_tempat'] ?></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 pt-3">
                                <div class="text-center" style="font-size: 17px; font-family: 'Times New Roman', Times, serif; font-weight: bold; margin-bottom: -17px !important;">
                                    PENGALAMAN KERJA
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <?php foreach ($userpengalaman as $key => $value) : ?>
                                    <div><?= $value['bagian'] ?></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-5">
                                <?php foreach ($userpengalaman as $key => $value) : ?>
                                    <div><?= $value['nama_per'] ?></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-2 text-center">
                                <?php foreach ($userpengalaman as $key => $value) : ?>
                                    <div><?= $value['dari_tahun'] . ' - ' . $value['sampai_tahun'] ?></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 pt-3">
                                <div class="text-center" style="font-size: 17px; font-family: 'Times New Roman', Times, serif; font-weight: bold; margin-bottom: -17px !important;">
                                    KEMAMPUAN
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <?php foreach ($userkemampuan as $key => $value) : ?>
                                    <div class="pt-1">
                                        <strong><?= $value['jenis_kemampuan'] ?></strong>
                                        <p>
                                            <?= $value['aplikasi'] ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
                <div class="modal-footer" style="display: inline-block !important;">
                    <div class="date text-muted pt-2" style="display: inline-block !important; padding-left: 21px; font-size: 16px;">Apakah data yang ada diatas sudah sesuai yang dengan data diri anda?</div>
                    <a href="#" class="btn btn-success float-right" data-dismiss="modal" id="alert_demo_3_3_1">Kirim Data</a>
                    <a href="#" class="btn btn-danger float-right" data-dismiss="modal">Batal</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>