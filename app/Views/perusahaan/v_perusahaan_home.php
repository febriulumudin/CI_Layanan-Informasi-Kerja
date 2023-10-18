<div class="content">
    <div class="panel-header bg-info-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold" style="font-family: sans-serif;"><?= session()->get('nama_perusahaan') ?></h2>
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
                            </ol>
                            <div class="carousel-inner text-center">
                                <div class="carousel-item active">
                                    <img class="m-4 p-2" src="<?= base_url('LogoPer/' . session()->get('logo_perusahaan')) ?>" alt="First slide" style="border-radius: 6px;" width="90%">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev" style="display: flex !important;">
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

        <div>
            <br>
            <h3 class="text-dark text-center" style="font-size: 30px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Lowongan</h3>
            <hr>
        </div>
        <div class="row justify-content-center">
            <?php $i = 1; ?>
            <?php foreach ($lowongansaya as $key => $value) : ?>
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
                                <a href="/user_perusahaan/lowongan_detail/<?= $value["id_lowongan"] ?>/<?= $value["id_perusahaan"] ?>" class="btn btn-primary btn-rounded btn-sm">Lihat Lebih</a>
                            </div>
                        </div>
                    </div>
                <?php } else {
                    break;
                } ?>
            <?php endforeach; ?>
        </div>

        <div>
            <br>
            <h3 class="text-dark text-center" style="font-size: 30px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Alamat Perusahaan</h3>
            <hr>
        </div>


        <?php foreach ($perusahaan as $key => $value) : ?>
            <div class="row">
                <div class="col-12">
                    <center>
                        <div id="map" class="gmaps text-left" style="height: 370px; width: 90%; border-radius: 20px"></div><br>
                        <div class="text-dark" style="font-size: 20px;">
                            <i class="icon-location-pin"></i><?= $value['alamat'] ?>
                        </div>
                    </center>
                </div>
            </div>

            <div>
                <br>
                <h3 class="text-dark text-center" style="font-size: 24px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Visi Misi Perusahaan</h3>
                <hr>
                <h3 class="text-dark text-center" style="font-size: 24px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Visi</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <div class="text-dark" style="font-size: 20px;">
                        <?= $value['visi'] ?>
                    </div>
                </div>
            </div>
            <div>
                <br>
                <h3 class="text-dark text-center" style="font-size: 24px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Misi</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <div class="text-dark" style="font-size: 20px;">
                        <?= $value['misi'] ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- Modals Lowongan -->