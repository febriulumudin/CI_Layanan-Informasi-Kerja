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

                    <?php echo form_open('cariteman/daftar_teman', 'class="nav-search"'); ?>
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


        <div class="card card-post card-round mt--3" style="font-family: sans-serif;">
            <div class=" row justify-content-center pr-4" style="padding-left: 60px;">
                <div class="col-12 pb-2 pt-4">
                    <div>
                        <h3 class="fw-bold text-center" style="font-family: sans-serif; padding-top: 7px; ">Daftar Nama Yang Anda Cari</h3>
                    </div>
                    <hr>
                </div>
            </div>

            <div class=" row justify-content-center pr-4" style="padding-left: 60px;">
                <div class="col-12 pb-2 pt-4 text-center">
                    <div>
                        <img src="<?= base_url('img/iconuser.png') ?>" width="15%">
                    </div>
                    <div>
                        <h2>
                            <?php
                            //Pesan Berhasil Disimpan
                            if (session()->getFlashdata('Pesan')) {
                                echo '<div class="alert alert-danger"  style="border-radius:10px;" role="alert">';
                                echo session()->getFlashdata('Pesan');
                                echo '</div>';
                            } else {
                            ?>
                                Temukan Seseorang Yang Anda Cari
                            <?php } ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>