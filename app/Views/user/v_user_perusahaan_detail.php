<div class="content">
    <?php foreach ($perusahaandetail as $key => $value) : ?>
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
                <div class="row pt-3 pb-3">
                    <div class="col-12">
                        <div class="row pl-3 pt-2 pb-3">
                            <div class="col-4 text-center">
                                <img class="card-img-top container p-1" src="<?= base_url('LogoPer/' . $value['logo_perusahaan']) ?>" style="width: 80% !important;" alt="Card image cap">
                            </div>
                            <div class="col-7 text-left pt-5">
                                <h2 class="fw-bold" style="font-family: sans-serif;"><?= $value['nama_perusahaan'] ?></h2>
                                <div class="float-left pr-5 pt-3">
                                    <i class="icon-location-pin" style="padding-right: 2px;"></i><?= $value['alamat'] ?>
                                </div>
                                <div class="float-left pr-5 pt-3">
                                    <i class="icon-grid" style="padding-right: 4px;"></i><?= $value['bidang_usaha'] ?>
                                </div>
                                <div class="float-left pr-5 pt-3">
                                    <i class="far fa-calendar-alt" style="padding-right: 4px;"></i><?= $value['hari_aktif'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-inner" style="margin-top: -75px;">
            <div class="card card-post card-round">
                <div class="row pl-5 pr-5">
                    <div class="col-12">
                        <div class="row pl-3 pb-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-10 text-dark">
                                        <div class="pt-4">
                                            <h3 class="card-title">
                                                Tentang Perusahaan
                                            </h3>
                                            <hr>
                                            <div class="text-justify" style=><?= $value['tentang'] ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10 text-dark">
                                        <div class="pt-4">
                                            <h3 class="card-title">
                                                Visi Dan Misi Perusahaan
                                            </h3>
                                            <div class="col-6">
                                                <hr>
                                                <div class="text-justify text-dark pb-2" style=><?= $value['visi'] ?></div>
                                                <div class="text-justify text-dark" style=><?= $value['misi'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-3 text-dark">
                                        <div style="font-size: 15px;">
                                            <strong>Hari Kerja : </strong><br>
                                            <?= $value['hari_aktif'] ?>
                                        </div>
                                    </div>
                                    <div class="col-3 text-dark">
                                        <div style="font-size: 15px;">
                                            <strong>Jam Kerja : </strong><br>
                                            <?= $value['jam_kerja'] ?>
                                        </div>
                                    </div>
                                    <div class="col-3 text-dark">
                                        <div style="font-size: 15px;">
                                            <strong>Bidang Usaha : </strong><br>
                                            <?= $value['bidang_usaha'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4">
                                    <div class="col-11">
                                        <div id="map" class="gmaps" style="height: 400px; border-radius: 20px"></div><br>
                                        <div class="text-dark" style="font-size: 20px;">
                                            <i class="icon-location-pin" style="padding-right: 2px;"></i><?= $value['alamat'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-5">
                            <div class="col-12">
                                <div>
                                    <h3 class="card-title pt-5">
                                        Lowongan kerja di perusahaan <?= $value['nama_perusahaan'] ?>
                                    </h3>
                                    <hr style="margin-right: 140px;">
                                    <?php foreach ($lowonganlain as $key => $valuelain) : ?>
                                        <a href="/lowongan/lowongan_detail/<?= $valuelain["id_lowongan"] ?>/<?= $valuelain["id_perusahaan"] ?>//<?= session()->get('id_user') ?>">
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
                    </div>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
</div>