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
                                    <a href="/lowongan" class="btn btn-primary btn-md" style="white-space: normal;">
                                        Lamar
                                    </a>
                                <?php } else { ?>
                                    <a href="/lowongan" class="btn btn-danger btn-md" id="alert_demo_3_2_2" style="white-space: normal;">
                                        Lamar Non-Aktif
                                    </a>
                                <?php } ?>
                                <br>
                                <a href="/lowongan" class="btn btn-light btn-md mt-2" style="white-space: normal;">
                                    <span class="btn-label">
                                        <i class="fas fa-bookmark"></i>
                                    </span>
                                    Simpan
                                </a>
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
                                            <a href="/pengunjung/lowongan_detail/<?= $valuelain["id_lowongan"] ?>/<?= $valuelain["id_perusahaan"] ?>/<?= session()->get('id_user') ?>">
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
                                    <a href="/pengunjung/perusahaan_detail/<?= $value["id_perusahaan"] ?>" class="btn btn-primary btn-lg" style="width: 100%;">
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