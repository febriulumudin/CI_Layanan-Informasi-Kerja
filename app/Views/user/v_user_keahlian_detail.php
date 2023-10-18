<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="mb-4">
                    <h2 class="text-white pb-2 fw-bold" style="font-family: sans-serif;">Keahlian</h2>
                </div>
            </div>
        </div>
    </div>

    <!--  Data Diri  -->
    <?php foreach ($keahlian as $key => $value) : ?>
        <div class="page-inner" style="margin-top: -90px;">
            <div class="card card-post card-round">
                <div class="row mb-1">
                    <div class="col-12">
                        <div class="row justify-content-center pl-3 pt-1 mt-3">
                            <div class="col-10" style="vertical-align: middle; text-align: center;">
                                <div class="card bg-dark" style="padding: 5px;">
                                    <video width="100%" height="100%" controls style="border: 2px;">
                                        <source src="<?= base_url('keahlianvideo/' . $value['video']) ?>">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card pl-3 pr-3">
                <div class="card-header">
                    <h4 class="card-title">
                        <strong style="font-family: sans-serif;">
                            <?= $value['judul_keahlian'] ?>
                        </strong>
                        - <?= $value['bidang_usaha_video'] ?>
                    </h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills nav-info  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                                <i class="flaticon-home"></i>
                                Deskripsi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                                <i class="flaticon-user-4"></i>
                                Transkripsi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab-icon" data-toggle="pill" href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon" aria-selected="false">
                                <i class="flaticon-mailbox"></i>
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                        <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
                            <p style="font-size: 17px;"><strong>Deskripsi Umum</strong></p>
                            <div style="text-align: justify; font-size: 16px;"><?= $value['deskripsi'] ?></div>
                            <br>
                            <p style="font-size: 17px;"><strong>Keahlian Yang Dibahas Adalah</strong></p>
                            <div style="text-align: justify; font-size: 16px;"><?= $value['keahlian_kursus'] ?></div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                            <p style="font-size: 17px;"><strong><?= $value['judul_transkrip'] ?></strong></p>
                            <div style="text-align: justify; font-size: 16px;"><?= $value['transkrip'] ?></div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
                            <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                            <p> But nothing the copy said could convince her and so it didnâ€™t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>