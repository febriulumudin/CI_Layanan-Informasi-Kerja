<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases.v5.11.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e6aad83b38.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/stylelp.css">
    <title>Linker | Layanan Informasi Kerja </title>
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
                        <a class="nav-item btn-primary tombolnav" href="<?= base_url('auth/login_perusahaan') ?>">Perusahaan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">dapatkan pekerjaan dan temukan perusahaan yang cocok buat anda</h1>
            <a class="nav-item btn tomboljm" href="/pengunjung">Cari Pekerjaan</a>
        </div>
    </div>


    <!--  Main  -->
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img src="/img/imglp/co.jpg" alt="workingspace" class="img-fluid rounded-circle img-thumbnail">
                </div>
                <div class="col-lg-6">
                    <div class="namework">
                        <h2>Cari seseorang untuk terhubung dan memudahkan mencari pekerjaan</h2>
                        <a class="nav-item btn" href="/pengunjung/cariteman">Cari Seseorang -></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  Main 1  -->
    <section class="main1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2 text-center">
                    <img src="/img/imglp/ck.jpg" alt="workingspace" class="img-fluid rounded-circle img-thumbnail">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="namework">
                        <h2>Pelajarilah keahlian baru atau perbaiki kembali kemampuan yang sudah anda miliki</h2>
                        <a class="nav-item btn" href="/pengunjung/keahlian">Cari Keahlian -></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  Main 2  -->
    <section class="main2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2>Posting perusahaan dan temukan orang yang anda butuhkan</h2>
                </div>
                <div class="col-lg-7 text-left">
                    <a class="nav-item btn navbtn" href="<?= base_url('auth/login_perusahaan') ?>">Posting Perusahaan -></a>
                </div>
            </div>
        </div>
    </section>


    <!--  CARD  -->
    <section id="aboutme" class="aboutme pb-4">
        <div class="container">
            <h1>OUT TEAM</h1>
            <div class="row text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="/img/imglp/profile.png" class="img-fluid rounded-circle mb-3 img-thumbnail" alt="card">
                            <h3 class="h3card">Bayu Laksana</h3>
                            <h5 class="h5card">Front-End</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="/img/imglp/profile.png" class="img-fluid rounded-circle mb-3 img-thumbnail" alt="card">
                            <h3 class="h3card">Ikhwan Fahmi</h3>
                            <h5 class="h5card">Back-End</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="/img/imglp/profile.png" class="img-fluid rounded-circle mb-3 img-thumbnail" alt="card">
                            <h3 class="h3card">Febri Nur U</h3>
                            <h5 class="h5card">Back-End</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="/img/imglp/profile.png" class="img-fluid rounded-circle mb-3 img-thumbnail cardimg" alt="card">
                            <h3 class="h3card">Hendrik R</h3>
                            <h5 class="h5card">Front-End</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CONTACT US -->
    <section id="contact" class="contact">
        <!-- Address -->
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-4">
                    <div class="card text-white bg-info mb-3 text-center">
                        <!-- <div class="card-header">JUDUL</div> -->
                        <div class="card-body">
                            <h5 class="card-title contp">Contact Us</h5>
                            <p class="card-text contp">Jika terdapat kendala dapat mendatangi lokasi ini atau menghubungi website dengan mengisi form.</p>
                        </div>
                    </div>
                    <ul class="list-group ">
                        <li class="list-group-item">
                            <h1><i class="fas fa-map-marker-alt pr-3"></i>Location</h1>
                        </li>
                        <li class="list-group-item">Lokasi Perusahaan</li>
                        <li class="list-group-item">JL. Ketintang-Raya No. 38, Surabaya</li>
                        <li class="list-group-item">Jawa Timur, Indonesia</li>
                    </ul>
                </div>
                <!-- Massage -->
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="nama">No Telp</label>
                            <input type="text" class="form-control" id="telp">
                        </div>
                        <div class="form-group">
                            <label for="nama">Pesan</label>
                            <textarea name="pesan" id="pesan" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


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
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script src="/js/scriptlp.js"></script>
</body>

</html>