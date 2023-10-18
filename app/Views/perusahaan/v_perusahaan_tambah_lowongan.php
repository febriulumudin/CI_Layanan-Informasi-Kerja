<div class="content">
    <div class="panel-header bg-info-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="mb-4">
                    <h2 class="text-white pb-2 fw-bold" style="font-family: sans-serif;">Tambah Lowongan Baru</h2>
                </div>
            </div>
        </div>
    </div>


    <?php echo form_open_multipart('/user_perusahaan/save_tambahlowongan/' . session()->get('id_perusahaan')) ?>
    <!--  Data Diri  -->
    <div class="page-inner" style="margin-top: -90px;">
        <div class="card card-post card-round mr-5 ml-5">
            <div class="row pt-3">
                <div class="col-12 text-center">
                    <strong style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Data Lowongan</strong>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-12">
                    <div class="row pl-3 pt-1">
                        <div class="col-11 card-body" style="padding-right: 38px;">
                            <div class="row">
                                <div class="col-lg-9 col-md-11 pl-5">
                                    <div class="form-group">
                                        <label>Perusahaan</label>
                                        <input type="text" name="nama_per" value="<?= session('nama_perusahaan') ?>" class="form-control" style="width: 90%;" placeholder="<?= session('nama_perusahaan') ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Judul Lowongan</label>
                                        <input type="text" name="judul" class="form-control" style="width: 90%;" placeholder="Judul Lowongan" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengalaman</label>
                                        <select class="form-control" name="pengalaman" style="width: 90%;">
                                            <option value="Minimal 0 Tahun" selected="selected">Minimal 0 Tahun</option>
                                            <option value="Minimal 1 Tahun">Minimal 1 Tahun</option>
                                            <option value="Minimal 2 Tahun">Minimal 2 Tahun</option>
                                            <option value="Minimal 3 Tahun">Minimal 3 Tahun</option>
                                            <option value="Lebih Dari 3 Tahun">Lebih Dari 3 Tahun</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan Yang Sesuai</label>
                                        <select class="form-control" name="jurusan" style="width: 90%;">
                                            <option value="Elektro" selected="selected">Elektro</option>
                                            <option value="Informatika">Informatika</option>
                                            <option value="Jaringan">Jaringan</option>
                                            <option value="Listrik">Listrik</option>
                                            <option value="Manajement">Management</option>
                                            <option value="Administrasi">Administrasi</option>
                                            <option value="Akuntansi">Akuntansi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Lulusan Minimal</label>
                                        <select class="form-control" name="lulusan" style="width: 90%;">
                                            <option value="SMA/SMK" selected="selected">SMA/SMK</option>
                                            <option value="D3">D3</option>
                                            <option value="D4/S1">D4/S1</option>
                                            <option value="S2">S2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Persyaratan</label>
                                        <textarea class="form-control" name="syarat" rows="3" placeholder="Persyaratan..." style="width: 90%;" placeholder="Visi" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Gaji</label>
                                        <input type="number" name="gaji" class="form-control" style="width: 90%;" placeholder="Gaji" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Dibuat Pada Tanggal</label>
                                        <input type="date" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="" style="width: 90%;" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 pl-5 mr-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" style="font-size:16px;">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php form_close(); ?>

</div>