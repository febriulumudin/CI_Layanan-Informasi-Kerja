<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/stylereg.css">

    <title>Linker | Masuk Perusahaan</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-md scrolling-navbar bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><strong style="text-shadow: 0.6px 0.6px 1px white !important;">LINKER<span>.com</span></strong></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#Sticky-nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Sticky-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link smth text-light" href="<?= base_url('auth/register_perusahaan') ?>">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smth text-light" href="<?= base_url('auth/login_perusahaan') ?>">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item btn-primary tombolnav waves-effect waves-light" href="<?= base_url('auth/login') ?>">Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid main">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container">
                <div class="text-center mb-3 mt-5">
                    <img src="/img/imgper/gbr2.png">
                </div>
                <div class="alasan">
                    <h4 style="font-size: 1.4rem !important;">Dengan mendaftarkan perusahaan di Linker.com</h4>
                    <div class="row">
                        <div class="col-1">
                            <span><i class="far fa-check-circle"></i></span>
                        </div>
                        <div class="col-10 text">
                            Mudah membuat rancangan iklan lowongan anda untuk mendapatkan pekerja yang berkualitas
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <span><i class="far fa-check-circle"></i></span>
                        </div>
                        <div class="col-10 text">
                            Dapatkan tanggapan cepat dari pencari kerja yang relevan
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <span><i class="far fa-check-circle"></i></span>
                        </div>
                        <div class="col-10 text">
                            Memudahkan untuk memperkenalkan usaha anda ke dunia perindustrian
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 infinity-form-container">
                <div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
                    <!-- Company Logo -->
                    <div class="text-center mb-3 mt-5">
                        <img src="/img/imgper/avtr2.png" width="150px">
                    </div>
                    <div class="text-center mb-4">
                        <h4 class="title text-secondary" style="font-size: 33px;">Masuk Akun Perusahaan</h4>
                    </div>

                    <?php
                    //Pesan Error
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)) { ?>
                        <div class="alert alert-denger" style="margin-left:15px; margin-right: 15px; border-radius:10px;" role="alert">
                            <ul>
                                <?php foreach ($errors as $errors) : ?>
                                    <li><?= esc($errors) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php } ?>

                    <?php
                    //Pesan Berhasil Disimpan
                    if (session()->getFlashdata('Pesan')) {
                        echo '<div class="alert alert-danger"  style="margin-left:15px; margin-right: 15px; border-radius:10px;" role="alert">';
                        echo session()->getFlashdata('Pesan');
                        echo '</div>';
                    }
                    ?>


                    <!-- Form -->
                    <?php echo form_open('auth/cek_login_perusahaan', 'class="form-box px-3"'); ?>
                    <div class="form-input">
                        <span><i class="fa fa-envelope-o"></i></span>
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-key"></i></span>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>


                    <div class="mb-3">
                        <button type="submit" class="btn btn-block text-uppercase">
                            Masuk
                        </button>
                    </div>

                    <hr class="my-4">
                    <div class="text-center mb-2">
                        Belum punya akun?
                        <a href="<?= base_url('auth/register_perusahaan') ?>" class="register-link">
                            Daftar disini
                        </a>
                    </div>
                    <?php form_close(); ?>
                </div>
                <!-- FORM END -->
            </div>
            <!-- FORM CONTAINER END -->
        </div>
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>


    <!--  FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="#about">About</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#contact">Contact</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; All Right Reserved By Creator 2020.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 1000);
    </script>
</body>

</html>