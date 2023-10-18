<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="fw-bold text-white pb-2" style="font-family: sans-serif;">Cari Seseorang </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner" style="margin-top: -70px;">
        <div>
            <br>
        </div>
        <div class="card card-post card-round" style="font-family: sans-serif;">
            <div class=" row justify-content-center pr-4" style="padding-left: 60px;">
                <div class="col-12 pb-2 pt-4">
                    <div class="float-left">
                        <h3 class="fw-bold" style="font-family: sans-serif; padding-top: 7px;">Cari Nama</h3>
                    </div>

                    <?php echo form_open('pengunjung/daftar_teman', 'class="nav-search"'); ?>
                    <div class="float-left ml-3">
                        <form class="nav-search">
                            <div class="input-group float-left">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" name="namadepan" placeholder="Nama depan" class="form-control">
                            </div>
                        </form>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>


        <div class="card card-post card-round mt--3 pb-5" style="font-family: sans-serif;">
            <div class=" row justify-content-center pr-4" style="padding-left: 60px;">
                <div class="col-12 pb-2 pt-4">
                    <div>
                        <h3 class="fw-bold text-center" style="font-family: sans-serif; padding-top: 7px; ">Daftar Nama Yang Anda Cari</h3>
                    </div>
                    <hr>
                </div>
            </div>

            <?php foreach ($caritemanlanjut as $key => $value) : ?>
                <div class=" row pr-4" style="padding-left: 60px;">
                    <div class="col-1 pb-2 pt-4">
                        <div class="avatar-xl">
                            <img src="<?= base_url('profile/' . $value['foto']) ?>" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </div>
                    <div class="col-7 pb-2 pt-4 pl-4">
                        <div>
                            <a href="#<?= $value['nama_depan'] . ' ' . $value['nama_belakang'] ?>" class="text-info fw-bold" style="font-size: 18px;">
                                <?= $value['nama_depan'] . ' ' . $value['nama_belakang'] ?>
                            </a>
                            <br>
                            <div style="font-size: 16px;">
                                <?= $value['status_pekerjaan'] ?>
                            </div>
                            <div style="font-size: 16px; color:rgba(0, 0, 0, 0.4)">
                                <?= $value['alamat'] ?>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>