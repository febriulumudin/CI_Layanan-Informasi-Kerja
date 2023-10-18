<div class="row">
    <div class="col-md-12">
        <div class="box box-info box-solid">
            <div class="box-header with-border">
                <h3 class="box-title" style="font-size: 25px;">Data User</h3>
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
                        <th width="21%">Nama Panjang</th>
                        <th width="23%">Email</th>
                        <th width="13%">Password</th>
                        <th width="15%">Nomor Telepon</th>
                        <th width="9%">Level</th>
                        <th width="14%">Aksi</th>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value['nama_depan'], ' ',
                                        $value['nama_belakang'];
                                    ?></td>
                                <td><?= $value['email']; ?></td>
                                <td><?= $value['password']; ?></td>
                                <td><?= $value['notelp']; ?></td>
                                <td class="text-center">
                                    <?php $lvl = $value['level'];
                                    if ($lvl == 1) {
                                        echo "Admin";
                                    } else {
                                        echo "User";
                                    } ?>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#ubah<?= $value['id_user']; ?>">Ubah</button>
                                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapus<?= $value['id_user']; ?>" class="btn btn-xs btn-danger">Hapus</a>
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
                <?php echo form_open('kategori/save_register') ?>
                <div class="form-group">
                    <label>Nama Depan</label>
                    <input type="text" name="nama_depan" class="form-control" placeholder="Nama Depan" required>
                </div>
                <div class="form-group">
                    <label>Nama Belakang</label>
                    <input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="notelp" class="form-control" placeholder="Handphone" required>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select class="form-control select2" name="level" placeholder="Handphone">
                        <option value="1" selected="selected">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
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
<?php foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="ubah<?= $value['id_user']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="font-weight: bold;">Edit Data User</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open('kategori/save_ubah/' . $value['id_user']) ?>
                    <div class="form-group">
                        <label>Nama Depan</label>
                        <input type="text" name="nama_depan" value="<?= $value['nama_depan']; ?>" class="form-control" placeholder="Nama Depan" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Belakang</label>
                        <input type="text" name="nama_belakang" value="<?= $value['nama_belakang']; ?>" class="form-control" placeholder="Nama Belakang" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?= $value['email']; ?>" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" value="<?= $value['password']; ?>" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="notelp" value="<?= $value['notelp']; ?>" class="form-control" placeholder="Handphone" required>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control select2" name="level" placeholder="Handphone">
                            <?php
                            if ($value['level'] == 1) { ?>
                                <option value="1" selected>Admin</option>
                                <option value="2">User</option>
                            <?php } else { ?>
                                <option value="1">Admin</option>
                                <option value="2" selected>User</option>
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
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->



<!--  MODAL HAPUS -->
<?php foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="hapus<?= $value['id_user']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(255,0,0,0.8)!important;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-titlet" style="font-weight: bold; color: white;">Hapus Data</h4>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Akun <?= $value['nama_depan'], ' ', $value['nama_belakang']; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('kategori/hapus/' . $value['id_user']) ?>" type="submit" class="btn btn-danger">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->