<div class="row">
    <div class="col-md-12">
        <div class="box box-info box-solid">
            <div class="box-header with-border">
                <h3 class="box-title" style="font-size: 25px;">Data Perusahaan</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#tambah" style="border-radius: 4px;">
                        <i class="fa fa-plus">
                            <span style="font-weight: 600;"> Tambah</span>
                        </i></button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                //Pesan Berhasil Disimpan
                if (session()->getFlashdata('Pesan')) {
                    echo '  <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i>Berhasil!!</h4>
                            ';
                    echo session()->getFlashdata('Pesan');
                    echo '</div>';
                }
                ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th width="5%">No</th>
                        <th width="16%">Email Perusahaan</th>
                        <th width="11%">Password</th>
                        <th width="16%">Nama Perusahaan</th>
                        <th width="15%">Alamat</th>
                        <th width="13%">Nomor telepon</th>
                        <th width="13%">Bidang Usaha</th>
                        <th width="11%">Aksi</th>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($perusahaan as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value['email_per']; ?></td>
                                <td><?= $value['password_per']; ?></td>
                                <td><?= $value['nama_perusahaan']; ?></td>
                                <td><?= $value['alamat']; ?></td>
                                <td><?= $value['telepon']; ?></td>
                                <td><?= $value['bidang_usaha']; ?></td>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#ubah<?= $value['id_perusahaan']; ?>">Ubah</button>
                                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapus<?= $value['id_perusahaan']; ?>" class="btn btn-xs btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>



<!--  MODAL TAMBAH -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="font-weight: bold;">Tambah User</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('kategori_perusahaan/save_register') ?>
                <div class="form-group">
                    <label>Email Perusahaan</label>
                    <input type="email" name="email_per" class="form-control" placeholder="Email Perusahaan" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password_per" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="textarea" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon" required>
                </div>
                <div class="form-group">
                    <label>Bidang Usaha</label>
                    <select class="form-control select2" name="bidang_usaha" placeholder="Bidang Usaha">
                        <option value="Elektronik" selected="selected">Elektronik</option>
                        <option value="Otomotif">Otomotif</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="IT">IT</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<!--  MODAL EDIT-->
<?php foreach ($perusahaan as $key => $value) { ?>
    <div class="modal fade" id="ubah<?= $value['id_perusahaan']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="font-weight: bold;">Edit Data Perusahaan</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open('kategori_perusahaan/save_ubah/' . $value['id_perusahaan']) ?>
                    <div class="form-group">
                        <label>Email Perusahaan</label>
                        <input type="email" name="email_per" value="<?= $value['email_per']; ?>" class="form-control" placeholder="Email Perusahaan" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password_per" value="<?= $value['password_per']; ?>" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" value="<?= $value['nama_perusahaan']; ?>" class="form-control" placeholder="Nama Perusahaan" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="textarea" name="alamat" value="<?= $value['alamat']; ?>" class="form-control" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="telepon" value="<?= $value['telepon']; ?>" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
                    <div class="form-group">
                        <label>Bidang Usaha</label>
                        <select class="form-control select2" name="bidang_usaha" placeholder="Bidang Usaha">
                            <?php
                            if ($value['bidang_usaha'] == 'Elektronik') { ?>
                                <option value="Elektronik" selected="selected">Elektronik</option>
                                <option value="Otomotif">Otomotif</option>
                                <option value="Kesehatan">Kesehatan</option>
                                <option value="IT">IT</option>
                            <?php } elseif ($value['bidang_usaha'] == 'Otomotif') { ?>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Otomotif" selected="selected">Otomotif</option>
                                <option value="Kesehatan">Kesehatan</option>
                                <option value="IT">IT</option>
                            <?php } elseif ($value['bidang_usaha'] == 'Kesehatan') { ?>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Otomotif">Otomotif</option>
                                <option value="Kesehatan" selected="selected">Kesehatan</option>
                                <option value="IT">IT</option>
                            <?php } elseif ($value['bidang_usaha'] == 'IT') { ?>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Otomotif">Otomotif</option>
                                <option value="Kesehatan">Kesehatan</option>
                                <option value="IT" selected="selected">IT</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
<?php } ?>
<!-- /.modal -->



<!--  MODAL HAPUS -->
<?php foreach ($perusahaan as $key => $value) { ?>
    <div class="modal fade" id="hapus<?= $value['id_perusahaan']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(255,0,0,0.8)!important;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-titlet" style="font-weight: bold; color: white;">Hapus Data</h4>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Akun <?= $value['nama_perusahaan']; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('kategori_perusahaan/hapus/' . $value['id_perusahaan']) ?>" type="submit" class="btn btn-danger">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->