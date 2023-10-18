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
                        <div class="row pl-3 pt-1">
                            <div class="col-3" style="vertical-align: middle; text-align: center;">
                                <img class="card-img-top p-3 rounded" style="vertical-align: middle; padding-top: 20px !important; width: 80% !important;" src="<?= base_url('profile/' . $valueuser['foto']) ?>" alt="Card image cap">
                            </div>
                            <div class="col-7 card-body">
                                <h3 class="card-title text-info" style="font-family: inherit; font-weight: bold; font-size: 25px;">
                                    <?= $valueuser['nama_depan'] . ' ' . $valueuser['nama_belakang'] ?>
                                </h3>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="pt-1" style="font-size: 17px;">Email</div>
                                        <div class="pt-2" style="font-size: 17px;">Harapan Gaji</div>
                                        <div class="pt-2" style="font-size: 17px;">Alamat</div>
                                        <div class="pt-2" style="font-size: 17px;">Nomor Telepon</div>
                                    </div>
                                    <div class="col-5">
                                        <div class="pt-1" style="font-size: 17px;">: <?= $valueuser['email'] ?></div>
                                        <div class="pt-2" style="font-size: 17px;">: <?= $valueuser['gaji'] ?></div>
                                        <div class="pt-2" style="font-size: 17px;">: <?= $valueuser['alamat'] ?></div>
                                        <div class="pt-2" style="font-size: 17px;">: <?= $valueuser['notelp'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pl-3 pb-3 mt--3">
                            <div class="col-12 card-body">
                                <div class="row pl-4">
                                    <div class="col-3">
                                        <div class="pt-1" style="font-size: 17px;">Status Pernikahan </div>
                                        <div class="pt-2" style="font-size: 17px;">Tempat Lahir</div>
                                        <div class="pt-2" style="font-size: 17px;">Tanggal Lahir</div>
                                        <div class="pt-2" style="font-size: 17px;">Jenis Kelamin</div>
                                    </div>
                                    <div class="col-8">
                                        <div class="pt-1" style="font-size: 17px;">: <?= $valueuser['status_pernikahan'] ?></div>
                                        <div class="pt-2" style="font-size: 17px;">: <?= $valueuser['tempat_lahir'] ?></div>
                                        <div class="pt-2" style="font-size: 17px;">: <?= $valueuser['tgl_lahir'] ?></div>
                                        <div class="pt-2" style="font-size: 17px;">
                                            <?php if ($valueuser['jen_kel'] == 'L') {
                                                echo ": Laki-Laki";
                                            } else {
                                                echo ": Perempuan";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Pendidikan -->
    <div class=" page-inner" style="margin-top: -65px;">
        <div class="card card-post card-round">
            <div class="row pt-3">
                <div class="col-12 pb-2 text-center">
                    <strong style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Data Pendidikan</strong>
                </div>
            </div>
            <div class="row mb-3" style="padding-left: 30px;">
                <div class="col-12">
                    <div class="row pl-3 pt-1 pb-3">
                        <div class="col-3">
                            <div class="pt-2" style="font-size: 17px;">SD</div>
                            <div class="pt-2" style="font-size: 17px;">SMP/MTs</div>
                            <div class="pt-2" style="font-size: 17px;">SMA/SMK</div>
                            <div class="pt-2" style="font-size: 17px;">PERGURUAN TINGGI</div>
                        </div>
                        <div class="col-5">
                            <?php foreach ($userpendidikan as $key => $value) : ?>
                                <div class="pt-2" style="font-size: 17px;">: <?= $value['nama_tempat'] ?></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-3">
                            <?php foreach ($userpendidikan as $key => $value) : ?>
                                <div class="pt-2" style="font-size: 17px;"><?= $value['dari_tahun'] . ' - ' . $value['sampai_tahun'] ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Data Pengalaman  -->
    <div class="page-inner" style="margin-top: -65px;">
        <div class="card card-post card-round">
            <div class="row pt-3">
                <div class="col-12 pb-2 text-center">
                    <strong style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Data Pengalaman Kerja</strong>
                </div>
            </div>
            <div class="row mb-3" style="padding-left: 30px;">
                <div class="col-12">
                    <div class="row pl-3 pt-1 pb-3">
                        <div class="col-3">
                            <?php foreach ($userpengalaman as $key => $value) : ?>
                                <div class="pt-2" style="font-size: 17px;"><?= $value['bagian'] ?></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-5">
                            <?php foreach ($userpengalaman as $key => $value) : ?>
                                <div class="pt-2" style="font-size: 17px;"><?= $value['nama_per'] ?></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-3">
                            <?php foreach ($userpengalaman as $key => $value) : ?>
                                <div class="pt-2" style="font-size: 17px;"><?= $value['dari_tahun'] . ' - ' . $value['sampai_tahun'] ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  Data Kemampuan  -->
    <div class="page-inner" style="margin-top: -65px;">
        <div class="card card-post card-round">
            <div class="row pt-3">
                <div class="col-12 pb-1 text-center">
                    <strong style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Data Kemampuan Penguasaan</strong>
                </div>
            </div>
            <div class="row mb-3" style="padding-left: 30px;">
                <div class="col-12">
                    <div class="row pl-3 pt-1 pb-3">
                        <div class="col-12">
                            <?php foreach ($userkemampuan as $key => $value) : ?>
                                <div class="pt-2" style="font-size: 18px;">
                                    <strong><?= $value['jenis_kemampuan'] ?></strong>
                                    <p>
                                        <?= $value['aplikasi'] ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>