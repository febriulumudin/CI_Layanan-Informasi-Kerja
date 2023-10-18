<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Linker | Layanan Informasi Kerja</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url(); ?>/img/logo/icon.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/css/atlantis.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/css/demo.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/template1/concept-master/assets/libs/css/style.css">
    <style>
        .img-preview img {
            border-radius: 10px !important;
        }
    </style>

</head>


<!-- BODY -->

<body data-background-color="bg3">
    <div class="wrapper compact-wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                <!--  "<= base_url();?>/img/logo/Logo.png" -->
                <a href="/auth/kelowongan/<?= session()->get('id_user') ?>" class="logo ml-auto mr-auto">
                    <img src="<?= base_url(); ?>/img/logo/logo.png" alt="navbar brand" class="navbar-brand" height="55">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- =============================================== -->
        <div class=pt-5>

            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div class="mb-4">
                                <h2 class="text-white pb-2 fw-bold" style="font-family: sans-serif;">Lanjut Pendataan</h2>
                            </div>
                        </div>
                    </div>
                </div>



                <?php $validation = session()->getFlashdata('validation'); ?>

                <?php echo form_open_multipart('auth/save_lanjut/' . session()->get('id_user')) ?>
                <!--  Data Diri  -->
                <div class="page-inner" style="margin-top: -90px;">
                    <div class="card card-post card-round">
                        <div class="row pt-3">
                            <div class="col-12 text-center">
                                <strong style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Data Personal Profil</strong>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-12">
                                <div class="row pl-3 pt-1s">
                                    <div class="col-11 card-body" style="padding-right: 38px;">
                                        <div class="row">
                                            <div class="col-12 mr-5 pl-5">
                                                <table class="table table-striped">
                                                    <tbody>
                                                        <div class="form-check">
                                                            <label>Jenis Kelamin</label>
                                                            <br>
                                                            <label class="form-radio-label">
                                                                <input class="form-radio-input" type="radio" name="jenkel" id=" optionsRadios1" value="L" checked style="display:inherit;">
                                                                <span class="form-radio-sign">Laki-laki</span>
                                                            </label>
                                                            <label class="form-radio-label ml-3">
                                                                <input class="form-radio-input" type="radio" name="jenkel" id=" optionsRadios1" value="P" style="display:inherit;">
                                                                <span class="form-radio-sign">Perempuan</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tempat Lahir</label>
                                                            <input type="text" name="tempat_lahir" class="form-control" style="width: 90%;">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Lahir</label>
                                                            <input type="date" name="date" class="form-control" id="" style="width: 90%;">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Status Pernikahan</label>
                                                            <select class="form-control" name="status_pernikahan" placeholder="status" style="width: 90%;">
                                                                <option value="Lajang" selected>Lajang</option>
                                                                <option value="Menikah">Menikah</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat" style="width: 90%;" required></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kisaran Gaji</label>
                                                            <select class="form-control" name="gaji" style="width: 90%;">
                                                                <option value="4000000" selected="selected">Rp4.000.000</option>
                                                                <option value="5000000">Rp5.000.000</option>
                                                                <option value="6000000">Rp6.000.000</option>
                                                                <option value="7000000">Rp7.000.000</option>
                                                                <option value="8000000">Rp8.000.000</option>
                                                                <option value="9000000">Rp9.000.000</option>
                                                                <option value="10000000">Rp10.000.000</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Poto Profil</label>&nbsp;<span class="text-danger" style="font-size: 11px;">*file dalam bentuk format gambar cont:.jpg/.png</span>
                                                            <div class="custom-file">
                                                                <input type="file" class="form-control-file" name="image" id="image" style="width: 90%;">
                                                                <?php if ($validation && isset($validation['image'])) : ?>
                                                                    <div class="invalid-feedback" style="height: 100px; width: 100px;"><?= $validation['image'] ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="img-preview" value="<?= base_url('profile/' . session()->get('foto')) ?>" style="margin-bottom: 20px; width: 40% !important;"></div>
                                                        </div>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--  Data Pendidikan  -->
                <div class="page-inner" style="margin-top: -65px;">
                    <div class="card card-post card-round">
                        <div class="row pt-3">
                            <div class="col-12 text-center">
                                <strong style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Data Pendidikan</strong>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-12">
                                <div class="row pl-3 pt-1s">
                                    <div class="col-11 card-body" style="padding-right: 38px;">
                                        <div class="row">
                                            <div class="col-6 pl-5">
                                                <div class="form-group">
                                                    <strong style="font-size: 17px;">SD</strong>
                                                </div>
                                                <div class="form-group" style="font-size: 17px; margin-top: -20px;">
                                                    <label>Nama Sekolah</label>
                                                    <input type=" text" name="nama_tempat" class="form-control" style="width: 90%;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Dari Tahun</label>
                                                    <input type="text" name="dari_tahun" class="form-control" style="width: 90%;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Sampai Tahun</label>
                                                    <input type="text" name="sampai_tahun" class="form-control" style="width: 90%;">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <strong style="font-size: 17px;">SMP/MTs</strong>
                                                </div>
                                                <div class="form-group" style="font-size: 17px; margin-top: -20px;">
                                                    <label>Nama Sekolah</label>
                                                    <input type=" text" name="nama_tempat_smp" class="form-control" style="width: 90%;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Dari Tahun</label>
                                                    <input type="text" name="dari_tahun_smp" class="form-control" style="width: 90%;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Sampai Tahun</label>
                                                    <input type="text" name="sampai_tahun_smp" class="form-control" style="width: 90%;">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row mt-4">
                                            <div class="col-6 pl-5">
                                                <div class="form-group">
                                                    <strong style="font-size: 17px;">SMA/SMK</strong>
                                                </div>
                                                <div class="form-group" style="font-size: 17px; margin-top: -20px;">
                                                    <label>Nama Sekolah</label>
                                                    <input type=" text" name="nama_tempat_sma" class="form-control" style="width: 90%;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Dari Tahun</label>
                                                    <input type="text" name="dari_tahun_sma" class="form-control" style="width: 90%;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Sampai Tahun</label>
                                                    <input type="text" name="sampai_tahun_sma" class="form-control" style="width: 90%;">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <strong style="font-size: 17px;">PERGURUAN TINGGI</strong>
                                                </div>
                                                <div class="form-group" style="font-size: 17px; margin-top: -20px;">
                                                    <label>Nama Universitas</label>
                                                    <input type=" text" name="nama_tempat_pt" class="form-control" style="width: 90%;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Dari Tahun</label>
                                                    <input type="text" name="dari_tahun_pt" class="form-control" style="width: 90%;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Sampai Tahun</label>
                                                    <input type="text" name="sampai_tahun_pt" class="form-control" style="width: 90%;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pl-5 mr-3">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary" style="font-size:16px;">Simpan</button>
                                                    <a href="/auth/kelowongan/<?= session()->get('id_user') ?>" style="padding-left: 10px; font-size:16px;">Lewati Halaman</a>
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


                <!-- FOOTER -->
                <footer data-background-color="blue" style="border-top:1px solid #ffffff">
                    <div class="panel-header bg-primary-gradient pb-4">
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <center class="text-white">
                                        <small class='text-footer' style="font-family:sans-serif">Copyright &copy;2020 - <b>Layanan Informasi Kerja</b> - My Company <br>
                                            Jl. Ketintang, Wonokromo, Surabaya - Telp. 089000000 - Fax. 0400 400000</small>
                                    </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- Bootstrap core JavaScript
================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/core/jquery.3.2.1.min.js"></script>
            <script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/core/popper.min.js"></script>
            <script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/core/bootstrap.min.js"></script>
            <!-- jQuery UI -->
            <script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
            <script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

            <!-- jQuery Scrollbar -->
            <script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
            <!-- Atlantis JS -->
            <script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/atlantis.min.js"></script>
            <!-- Atlantis DEMO methods, don't include it in your project! -->
            <script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/setting-demo2.js"></script>
            <script>
                $('#map-example').vectorMap({
                    map: 'world_en',
                    backgroundColor: 'transparent',
                    borderColor: '#fff',
                    borderWidth: 2,
                    color: '#e4e4e4',
                    enableZoom: true,
                    hoverColor: '#35cd3a',
                    hoverOpacity: null,
                    normalizeFunction: 'linear',
                    scaleColors: ['#b6d6ff', '#005ace'],
                    selectedColor: '#35cd3a',
                    selectedRegions: ['ID', 'RU', 'US', 'AU'],
                    showTooltip: true,
                    onRegionClick: function(element, code, region) {
                        return false;
                    },
                    onResize: function(element, width, height) {
                        console.log('Map Size: ' + width + 'x' + height);
                    },
                });
            </script>
            <script src="<?= base_url(); ?>/template1/concept-master/assets/libs/js/gmaps.min.js"></script>
            <script src="<?= base_url(); ?>/template1/concept-master/assets/libs/js/google_map.js">
            </script>
            <script src="<?= base_url(); ?>/template1/Atlantis-Lite-master/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
            <script src="https://maps.google.com/maps/api/js?key=AIzaSyBUb3jDWJQ28vDJhuQZxkC0NXr_zycm8D0&amp;sensor=true"></script>

            <script>
                //== Class definition
                var SweetAlert2Demo = function() {

                    //== Demos
                    var initDemos = function() {
                        //== Sweetalert Demo 1
                        $('#alert_demo_1').click(function(e) {
                            swal('Good job!', {
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                },
                            });
                        });

                        //== Sweetalert Demo 2
                        $('#alert_demo_2').click(function(e) {
                            swal("Here's the title!", "...and here's the text!", {
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                },
                            });
                        });

                        //== Sweetalert Demo 3
                        $('#alert_demo_3_1').click(function(e) {
                            swal("Good job!", "You clicked the button!", {
                                icon: "warning",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-warning'
                                    }
                                },
                            });
                        });

                        $('#alert_demo_3_2').click(function(e) {
                            swal("Good job!", "You clicked the button!", {
                                icon: "error",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-danger'
                                    }
                                },
                            });
                        });


                        //Non-aktif Lamar
                        $('#alert_demo_3_2_2').click(function(e) {
                            swal("Maaf!", "Lowongan ditutup, anda tidak bisa mengakses!", {
                                icon: "error",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-danger'
                                    }
                                },
                            });
                        });
                        //Kirim Lamaran
                        $('#alert_demo_3_3_1').click(function(e) {
                            swal("CV Terkirim!", "Tunggu balasan dari perusahaan melalui gmail anda yang tertera!", {
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                },
                            });
                        });
                        //Tambah Data
                        $('#alert_demo_3_4_1').click(function(e) {
                            swal("Data Ditambahkan!", "Data Anda Berhasil Ditambahkan!", {
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                },
                            });
                        });


                        $('#alert_demo_3_3').click(function(e) {
                            swal("Good job!", "You clicked the button!", {
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                },
                            });
                        });

                        $('#alert_demo_3_4').click(function(e) {
                            swal("Good job!", "You clicked the button!", {
                                icon: "info",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-info'
                                    }
                                },
                            });
                        });

                        //== Sweetalert Demo 4
                        $('#alert_demo_4').click(function(e) {
                            swal({
                                title: "Good job!",
                                text: "You clicked the button!",
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        text: "Confirm Me",
                                        value: true,
                                        visible: true,
                                        className: "btn btn-success",
                                        closeModal: true
                                    }
                                }
                            });
                        });

                        $('#alert_demo_5').click(function(e) {
                            swal({
                                title: 'Input Something',
                                html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
                                content: {
                                    element: "input",
                                    attributes: {
                                        placeholder: "Input Something",
                                        type: "text",
                                        id: "input-field",
                                        className: "form-control"
                                    },
                                },
                                buttons: {
                                    cancel: {
                                        visible: true,
                                        className: 'btn btn-danger'
                                    },
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                },
                            }).then(
                                function() {
                                    swal("", "You entered : " + $('#input-field').val(), "success");
                                }
                            );
                        });

                        $('#alert_demo_6').click(function(e) {
                            swal("This modal will disappear soon!", {
                                buttons: false,
                                timer: 3000,
                            });
                        });

                        $('#alert_demo_7').click(function(e) {
                            swal({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                type: 'warning',
                                buttons: {
                                    confirm: {
                                        text: 'Yes, delete it!',
                                        className: 'btn btn-success'
                                    },
                                    cancel: {
                                        visible: true,
                                        className: 'btn btn-danger'
                                    }
                                }
                            }).then((Delete) => {
                                if (Delete) {
                                    swal({
                                        title: 'Deleted!',
                                        text: 'Your file has been deleted.',
                                        type: 'success',
                                        buttons: {
                                            confirm: {
                                                className: 'btn btn-success'
                                            }
                                        }
                                    });
                                } else {
                                    swal.close();
                                }
                            });
                        });

                        $('#alert_demo_8').click(function(e) {
                            swal({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                type: 'warning',
                                buttons: {
                                    cancel: {
                                        visible: true,
                                        text: 'No, cancel!',
                                        className: 'btn btn-danger'
                                    },
                                    confirm: {
                                        text: 'Yes, delete it!',
                                        className: 'btn btn-success'
                                    }
                                }
                            }).then((willDelete) => {
                                if (willDelete) {
                                    swal("Poof! Your imaginary file has been deleted!", {
                                        icon: "success",
                                        buttons: {
                                            confirm: {
                                                className: 'btn btn-success'
                                            }
                                        }
                                    });
                                } else {
                                    swal("Your imaginary file is safe!", {
                                        buttons: {
                                            confirm: {
                                                className: 'btn btn-success'
                                            }
                                        }
                                    });
                                }
                            });
                        })

                    };

                    return {
                        //== Init
                        init: function() {
                            initDemos();
                        },
                    };
                }();

                //== Class Initialization
                jQuery(document).ready(function() {
                    SweetAlert2Demo.init();
                });
            </script>

            <script>
                function previewImg(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('.img-preview').html(`<img style="width: 100%" src="` + e.target.result + `"/>`);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#image").change(function() {
                    previewImg(this);
                });
            </script>

</body>

</html>