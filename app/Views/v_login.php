<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="/css/stylelogin.css">

    <title>Linker | Masuk</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-md scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><strong>LINKER<span>.com</span></strong></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#Sticky-nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Sticky-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link smth" href="<?= base_url('auth/register') ?>">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smth" href="<?= base_url('auth/login') ?>">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item btn-primary tombolnav waves-effect waves-light" href="<?= base_url('auth/login_perusahaan') ?>">Perusahaan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container main">
        <div class="row px-3 rowbody justify-content-center">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="card-body">
                    <h4 class="title text-center mt-2"><span class="text-secondary">Masuk akun</span>
                        <p class="title-p">Jelajahi lebih luas dan dapatkan informasi didunia kerja</p>
                    </h4>

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
                    <?php echo form_open('auth/cek_login', 'class="form-box px-3"'); ?>
                    <div class="form-input">
                        <span><i class="fa fa-envelope-o"></i></span>
                        <input type="text" name="email" placeholder="Email Atau Handphone" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-key"></i></span>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="mb-3">
                        <div class="custom-control custom-checkbox float-left">
                            <input type="checkbox" class="custom-control-input" id="cb1" name="">
                            <label class="custom-control-label" for="cb1">Ingat saya</label>
                        </div>
                        <div class="text-right">
                            <a href="#" class="forget-link">
                                Lupa Password?
                            </a>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-block text-uppercase">
                            Masuk
                        </button>
                    </div>

                    <div class="text-center mb-3">
                        Atau login dengan
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 text-center">
                            <a href="" class="btn btn-social btn-facebook">
                                <span class="fa fa-facebook"></span>
                                <strong class="fbbtn">Masuk dengan facebook</strong>
                            </a>
                            <h6 class="text-left" style="opacity: 70%; padding-top: 7px;">Sangat mudah dan cepat. Kami tidak akan mengunggah apapun tanpa izin dari Anda</h6>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="text-center mb-2">
                        Belum punya akun?
                        <a href="<?= base_url('auth/register') ?>" class="register-link">
                            Daftar Disini
                        </a>
                    </div>
                    </form>
                </div>
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
</body>

</html>