<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold" style="font-family: sans-serif;">Daftar Lowongan Pekerjaan</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <!-- Lowongan Pekerjaan -->
        <div>
            <br>
        </div>
        <!-- Perusahaan -->
        <div class="row">
            <div class="col-12">
                <div>
                    <br>
                    <h2 class="text-dark text-center">Daftar Keahlian</h2>
                    <hr>
                </div>
                <?php foreach ($keahlian as $key => $value) : ?>
                    <div class="card card-post card-round">
                        <div class="row mb-4">
                            <div class="col-3" style="vertical-align: middle;">
                                <img class="card-img-top p-3" style="vertical-align: middle; padding-top: 50px !important;" src="<?= base_url('LogoPer/' . $value['thunm']) ?>" style="width: 60% !important; align: center;" alt="Card image cap">
                            </div>
                            <div class="col-4 card-body">
                                <div class="d-flex">
                                    <div class="info-post">
                                        <a href="/pengunjung/perusahaan_detail/<?= $value["id_keahlian"] ?> ?> " style="text-decoration:none;">
                                            <h3 class="card-title text-info" style="font-family: inherit; font-weight: bold">
                                                <?= $value['judul_keahlian'] ?>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                                <p class="card-category text-info mb-1"></p>
                            </div>
                            <div class="col-3 pt-5">
                                <div style="padding-top: 16px; font-size: 15px;">
                                    <?= $value['harga_kursus'] ?>
                                </div>
                                <div style="font-size: 15px;">Bidang Usaha Yang Dipelajarai :</div>
                                <div class="username" style="font-size: 15px;"><?= $value['bidang_usaha_video'] ?></div>
                            </div>
                            <div class="col-2 text-center" style="padding-top: 50px !important;">

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>