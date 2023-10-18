<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold" style="font-family: sans-serif;">LAYANAN INFORMASI KERJA</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <!-- Slider-->
        <div class="row mt--3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?= base_url(); ?>/img/slide/slide1.jpg" alt="First slide" style="border-radius: 6px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="text-white" style="text-shadow: 2px 1px 1px black;">Heading Title Carousel</h2>
                                        <p style="text-shadow: 2px 1px 1px black;">Mauris fermentum elementum ligula in efficitur. Aliquam id congue lorem. Proin consectetur feugiat enim ut luctus. Aliquam pellentesque ut tellus ultricies bibendum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url(); ?>/img/slide/slide2.jpg" alt="Second slide" style="border-radius: 6px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="text-white" style="text-shadow: 2px 1px 1px black;">Heading Title Carousel</h2>
                                        <p style="text-shadow: 2px 1px 1px black;">Mauris fermentum elementum ligula in efficitur. Aliquam id congue lorem. Proin consectetur feugiat enim ut luctus. Aliquam pellentesque ut tellus ultricies bibendum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url(); ?>/img/slide/slide3.jpg" alt="Third slide" style="border-radius: 6px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="text-white" style="text-shadow: 2px 1px 1px black;">Heading Title Carousel</h2>
                                        <p style="text-shadow: 2px 1px 1px black;">Mauris fermentum elementum ligula in efficitur. Aliquam id congue lorem. Proin consectetur feugiat enim ut luctus. Aliquam pellentesque ut tellus ultricies bibendum.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span> </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daftar Bookmark -->
        <div class="container">
            <div class="row mb-3 justify-content-center">
                <div class="col-xs-3 text-center pr-2 mb-2">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                            <span class="btn-label">
                                <i class="fa fa-cog"></i>
                            </span>
                            Lowongan yang banyak diminati
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-3 text-center pr-2 mb-2">
                    <button class="btn btn-primary btn-sm">
                        <span class="btn-label">
                            <i class="fas fa-dot-circle"></i>
                        </span>
                        Lowongan yang sesuai dengan profil anda
                    </button>
                </div>
                <div class="col-xs-3 text-center pr-2 mb-2">
                    <button class="btn btn-primary btn-sm">
                        <span class="btn-label">
                            <i class="fas fa-dot-circle"></i>
                        </span>
                        Keahlian yang banyak diminati
                    </button>
                </div>
                <div class="col-xs-3 text-center pr-2">
                    <button class="btn btn-primary btn-sm">
                        <span class="btn-label">
                            <i class="fas fa-dot-circle"></i>
                        </span>
                        Keahlian yang cocok dengan profil anda
                    </button>
                </div>
            </div>
        </div>

        <!-- Lowongan Pekerjaan -->
        <div>
            <br>
            <h3 class="text-dark"> &nbsp; Lowongan Pekerjaan</h3>
            <hr>
        </div>
        <div class="row justify-content-center">
            <?php $i = 1; ?>
            <?php foreach ($lowongan as $key => $value) : ?>
                <?php
                $i = $i + 1;
                if ($i <= 9) {
                ?>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card card-post card-round">
                            <div style="height: 75px;">
                                <img class="card-img-top container p-4" src="<?= base_url('LogoPer/' . $value['logo_perusahaan']) ?>" style="width: 60% !important; align: center;" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <div class="d-flex" style="height: 65px;">
                                    <div class="info-post ml-2">
                                        <h3 class="card-title">
                                            <?= $value['judul_lowongan'] ?>
                                        </h3>
                                        <p class="date text-muted"><?= $value["created_at"] ?></p>
                                    </div>
                                </div>
                                <div class="separator-solid mt-5" style="padding-top: 10px;"></div>
                                <p class="card-category text-info mb-1"></p>
                                <div class="username"><?= $value['nama_perusahaan'] ?></div>
                                <p class="card-text"><i class="fas fa-map-marker-alt">&nbsp;</i><?= $value['alamat'] ?></p>
                                <a href="#" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#modallowongan<?= $value['id_lowongan'] ?>">Lihat Lebih</a>
                            </div>
                        </div>
                    </div>
                <?php } else {
                    break;
                } ?>
            <?php endforeach; ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <a href="/pengunjung/daftar_lowongan" class="btn btn-primary">
                    <span class="btn-label">
                        <i class="fas fa-hdd"></i>
                    </span>
                    &nbsp;Lihat Lebih Banyak Lowongan
                </a>
            </div>
        </div>

        <!-- Perusahaan -->
        <div>
            <br>
            <h2 class="text-dark text-center">Rekomendasi Perusahaan</h2>
            <hr>
        </div>
        <div class="row justify-content-center">
            <?php $i = 1; ?>
            <?php foreach ($perusahaan as $key => $value) : ?>
                <?php
                $i = $i + 1;
                if ($i <= 5) {
                ?>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card card-info card-annoucement card-round">
                            <div class="card-body container">
                                <div class="row pb-5" style="height: 80px !important;">
                                    <img class="card-img-top container" style="border-radius: 20px; height: 80 !important;  width: 90%!important;" src="<?= base_url('LogoPer/' . $value['logo_perusahaan']) ?>" style="width: 90% !important; align: center;" alt="Card image cap">
                                </div>
                                <div class="row justify-content-center" style="height: 60px !important;">
                                    <div class="col">
                                        <div class="card-detail pt-2 text-center">
                                            <div class="card-opening text-center">
                                                <button class="btn btn-info text-center" style="white-space: normal; margin-top: 20px;">
                                                    <h3 class="fw-bold text-light" style="font-family:sans-serif; font-size: 13px !important;"> <?= $value['nama_perusahaan'] ?></h3>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else {
                    break;
                } ?>
            <?php endforeach; ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <a href="/pengunjung/perusahaan" class="btn btn-primary">
                    <span class="btn-label">
                        <i class="fas fa-industry"></i>
                    </span>
                    &nbsp;Lihat Lebih Banyak Perusahaan
                </a>
            </div>
        </div>
    </div>
</div>


<!-- Modals Lowongan -->
<?php foreach ($lowongan as $key => $value) : ?>
    <div class="modal fade" id="modallowongan<?= $value['id_lowongan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Lowongan</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">

                    <div class="row pl-3 pt-2 pb-3">
                        <div class="col-7 text-right">
                            <img class="card-img-top container p-1" src="<?= base_url('LogoPer/' . $value['logo_perusahaan']) ?>" style="width: 70% !important; align: center;" alt="Card image cap">
                        </div>
                        <div class="col-5 text-left">
                            <h2>
                                <?= $value['judul_lowongan'] ?>
                            </h2>
                            <p class="username"><?= $value['bidang_usaha'] ?></p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="username"><?= $value['nama_perusahaan'] ?></div>
                                <div class="username"><?= $value['telepon'] ?></div>
                                <p class="card-text"><i class="fas fa-map-marker-alt">&nbsp;</i><?= $value['alamat'] ?></p>
                            </div>
                            <div class="col-6">
                                Pengalaman : <br>
                                <?= $value['pengalaman'] ?><br>
                                <div>Jurusan yang dibuka :</div>
                                <div class="username"><?= $value['jurusan'] ?></div>
                                <div>Dengan lulusan minimal : <?= $value['lulusan'] ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3>
                                    Persayaran Lamaran
                                </h3>
                                <div class="username"><?= $value['persyaratan'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            Tentang Perusahaan
                        </h3>
                        <div class="username"><?= $value['tentang'] ?></div>
                    </div>
                </div>
                <div class="modal-footer" style="display: inline-block !important;">
                    <div class="date text-muted pt-2" style="display: inline-block !important; padding-left: 21px;"><?= $value["created_at"] ?></div>
                    <a href="/pengunjung/lowongan_detail/<?= $value["id_lowongan"] ?>/<?= $value["id_perusahaan"] ?>" class="btn btn-success float-right">Lanjut</a>
                    <a href="#" class="btn btn-danger float-right" data-dismiss="modal">Keluar</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>