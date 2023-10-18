<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold" style="font-family: sans-serif;">Daftar Keahlian Yang Dapat Dipelajari</h2>
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
                    <h2 class="text-dark text-center" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Daftar Keahlian</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <?php foreach ($keahlian as $key => $value) : ?>
                    <div class="card card-post card-round">
                        <div class="row mb-4">
                            <div class="col-5" style="vertical-align: middle;">
                                <img class="card-img-top pl-3" style="padding-top: 20px !important;" src="<?= base_url('keahlian/' . $value['thunm']) ?>" style="width: 100% !important; align: right;" alt="Card image cap">
                            </div>
                            <div class="col-4 card-body">
                                <div class="d-flex">
                                    <div class="info-post">
                                        <a href="/keahlian/keahlian_detail/<?= $value["id_keahlian"] ?>" style="text-decoration:none;">
                                            <h3 class="card-title text-info" style="font-family: inherit; font-weight: bold">
                                                <?= $value['judul_keahlian'] ?>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                                <div style="padding-top: 5px; font-size: 15px;">
                                    Bidang Usaha Yang Dipelajarai :
                                </div>
                                <div style="padding-top: 5px; font-size: 15px;">
                                    <?= $value['bidang_usaha_video'] ?>
                                </div>
                                <div style="padding-top: 5px; font-size: 15px;">
                                    Mentor : <?= $value['nama_depan'] ?> <?= $value['nama_belakang'] ?>
                                </div>
                                <div style="padding-top: 5px; font-size: 15px;">
                                    Dibuat <?= $value['created_at'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-4">
                <div class="card card-post card-round">
                    <div class="row mb-2">
                        <div class="col-12 p-3" style="vertical-align: middle;">
                            <strong class="pl-5">Pelajari Keahlian Yang Cocok Buat Anda</strong>
                        </div>
                    </div>
                </div>
                <div class="card card-post card-round">
                </div>
            </div>
        </div>
    </div>
</div>