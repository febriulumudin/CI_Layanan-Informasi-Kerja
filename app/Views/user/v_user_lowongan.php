<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold" style="font-family: sans-serif;">Daftar Perusahaan</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <!-- Lowongan Pekerjaan -->
        <div>
            <br>
            <hr>
        </div>
        <div class="row justify-content-center">
            <div class="col-3">
                <button class="btn btn-primary btn-md" style="white-space: normal;">
                    <span class="btn-label">
                        <i class="fas fa-dot-circle"></i>
                    </span>
                    Lowongan yang banyak diminati
                </button>
                <br><br>
                <button class="btn btn-primary btn-md" style="white-space: normal;">
                    <span class="btn-label">
                        <i class="fas fa-dot-circle"></i>
                    </span>
                    Lowongan yang sesuai dengan profil anda
                </button>
                <br><br>
                <button class="btn btn-primary btn-md" style="white-space: normal;">
                    <span class="btn-label">
                        <i class="fas fa-dot-circle"></i>
                    </span>
                    Keahlian yang banyak diminati
                </button>
                <br><br>
                <button class="btn btn-primary btn-md" style="white-space: normal;">
                    <span class="btn-label">
                        <i class="fas fa-dot-circle"></i>
                    </span>
                    Keahlian yang cocok dengan profil anda
                </button>
            </div>

            <div class="col-9">
                <?php foreach ($lowongan as $key => $value) : ?>
                    <div class="card card-post card-round">
                        <div class="row mb-4">
                            <div class="col-3" style="vertical-align: middle;">
                                <img class="card-img-top p-3" style="vertical-align: middle; padding-top: 50px !important;" src="<?= base_url('LogoPer/' . $value['logo_perusahaan']) ?>" style="width: 60% !important; align: center;" alt="Card image cap">
                            </div>
                            <div class="col-3 card-body">
                                <div class="d-flex">
                                    <div class="info-post">
                                        <a href="/lowongan/lowongan_detail/<?= $value["id_lowongan"] ?>/<?= $value["id_perusahaan"] ?>/<?= session()->get('id_user') ?> " style="text-decoration:none;">
                                            <h3 class="card-title text-info" style="font-family: inherit; font-weight: bold">
                                                <?= $value['judul_lowongan'] ?>
                                            </h3>
                                        </a>
                                        <p class="date text-muted"><?= $value["created_at"] ?></p>
                                    </div>
                                </div>
                                <p class="card-category text-info mb-1"></p>
                                <div class="username"><?= $value['nama_perusahaan'] ?></div>
                                <p class="card-text"><i class="fas fa-map-marker-alt">&nbsp;</i><?= $value['alamat'] ?></p>
                            </div>
                            <div class="col-3 pt-5">
                                Pengalaman minimal : <br>
                                <?= $value['pengalaman'] ?><br>
                                <div>Jurusan yang dibuka :</div>
                                <div class="username"><?= $value['jurusan'] ?></div>
                                <div>Dengan lulusan minimal : <?= $value['lulusan'] ?></div>
                            </div>
                            <div class="col-3 text-center" style="padding-top: 50px !important;">
                                <?php
                                if ($value['status_lowongan'] == 'y') { ?>
                                    <button class="btn btn-primary btn-md" style="white-space: normal;">
                                        Lamar
                                    </button>
                                <?php } else { ?>
                                    <button type="button" class="btn btn-danger btn-md" id="alert_demo_3_2_2" style="white-space: normal;">
                                        Non-Aktif
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
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>