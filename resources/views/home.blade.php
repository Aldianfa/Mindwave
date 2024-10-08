<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MindWave | Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <style type="text/css">
        @font-face {
            font-family: "Days";
            src: url("{{ asset('assets/plugins/font-days/Days.otf') }}");
        }
    </style>
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navi fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/7.png') }}" width="40" height="40" class="img-circle">
                <div class="navbar-brand-text fw-bold fs-4 me-auto" href="">
                    Halo {{ Auth::user()->username }} !
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <img src="{{ asset('assets/img/logo.png') }}" width="50" class="">
                    </li>
                </ul>
                <a href="{{ route('pengguna.logout') }}" class="btn btn-logout" role="button"><i
                        class="bi bi-box-arrow-right"></i></a>

            </div>

        </div>
    </nav>
    {{-- NAVBAR --}}

    {{-- SECTION 1 --}}
    <section class="content mt-10">
        <div class="container">
            <h1>Halo</h1>
        </div>
    </section>
    {{-- SECTION 1 --}}

    <!-- Caorusel -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/carousel1.png') }}" class="d-block img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/carousel2.png') }}" class="d-block img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/carousel3.png') }}" class="d-block img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/carousel4.png') }}" class="d-block img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Akhir Carousel -->

    <!-- Section 2 -->
    <section class="content mt-5">
        <div class="container">
            <div class="menu row">

                <div class="col-lg-3 col-md-2 col-sm-4 col-4 mt-3">
                    <div class="column text-center">
                        <center>
                            <a href="{{ route('selfdiary.index') }}">
                                <div class="menu-circle mb-2">
                                    <img src="{{ asset('assets/img/3.png') }}" width="80%" class="">
                                </div>
                            </a>
                        </center>
                        <h6>SELF DIARY</h6>

                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-4 col-4 mt-3">
                    <div class="column justify-content-center text-center">
                        <center>
                            <a href="{{ route('literasi.index') }}">
                                <div class="menu-circle mb-2">
                                    <img src="{{ asset('assets/img/4.png') }}" width="80%" class="">
                                </div>
                            </a>
                        </center>
                        <h6>LITERASI ISLAM</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-4 col-4 mt-3">
                    <div class="column text-center">
                        <center>
                            <a href="{{ route('bilikcerita.index') }}">
                                <div class="menu-circle mb-2">
                                    <img src="{{ asset('assets/img/5.png') }}" width="45%" class="">
                                </div>
                            </a>
                        </center>
                        <h6>BILIK CERITA</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Section 2 -->

    <!-- Section 3 -->
    <section class="content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="">Artikel Terbaru</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-lg-12">
                                    <a href="https://kumparan.com/faizah-mufiddina/amankan-dirimu-dari-self-diagnosis-kesehatan-mental-21w3pe91T25"
                                        target="_blank" class="artikel-carousel">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset('assets/img/artikel1.jpg') }}" class="card-img-top"
                                                    alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">www.kumparan.com</h5>
                                                <p class="card-text">Amankan dirimu dari Self-Diagnosis Kesehatan
                                                    Mental</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <a href="https://muhammadiyah.or.id/2023/12/hindari-self-diagnosis-dan-upaya-upaya-lainnya-dalam-mengatasi-gangguan-mental/"
                                        target="_blank" class="artikel-carousel">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset('assets/img/artikel2.jpg') }}" class="card-img-top"
                                                    alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">muhammadiyah.or.id</h5>
                                                <p class="card-text">Hindari Self Diagnosis dan Upaya-upaya Lainnya
                                                    dalam Mengatasi Gangguan Mental</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <a href="https://www.beautynesia.id/wellness/jangan-self-diagnose-4-kondisi-ini-bukan-berarti-kamu-alami-depresi/b-278325"
                                        target="_blank" class="artikel-carousel">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset('assets/img/artikel3.jpeg') }}" class="card-img-top"
                                                    alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">www.beautynesia.id/wellness</h5>
                                                <p class="card-text">Jangan Self-Diagnose, 4 Kondisi Ini Bukan Berarti
                                                    Kamu Alami Depresi</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <a href="https://mubadalah.id/seberapa-efektif-psikologi-islam-diterapkan-pada-gen-z-yang-mengidap-penyakit-mental/"
                                        target="_blank" class="artikel-carousel">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset('assets/img/artikel4.png') }}" class="card-img-top"
                                                    alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">www.Mubadalah.id</h5>
                                                <p class="card-text">Seberapa Efektif Psikologi Islam Diterapkan Pada
                                                    Gen-Z yang Mengidap Penyakit Mental?</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <a href="https://www.realitasonline.id/nusantara/102411845973/demi-masa-sungguh-manusia-berada-dalam-kerugian-5-tanda-tanda-kamu-sedang-menghancurkan-masa-depanmu-sendiri-menurut-psikologi-islam"
                                        target="_blank" class="artikel-carousel">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset('assets/img/artikel5.jpg') }}" class="card-img-top"
                                                    alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">www.realitasonline.id/nusantara/</h5>
                                                <p class="card-text">Demi Masa, Sungguh Manusia Berada dalam Kerugian:
                                                    5 Tanda-tanda Kamu Sedang Menghancurkan Masa Depanmu Sendiri Menurut
                                                    Psikologi Islam</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <a href="https://malangraya.blok-a.com/kesehatan/bedah-insecure-tanpa-self-diagnose-ala-pakar-psikologi-islam-uin-malang/"
                                        target="_blank" class="artikel-carousel">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset('assets/img/artikel6.jpg') }}" class="card-img-top"
                                                    alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">malangraya.blok-a.com/kesehatan/</h5>
                                                <p class="card-text">Bedah Insecure tanpa Self Diagnose ala Pakar
                                                    Psikologi Islam UIN Malang</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <a href="https://www.siloamhospitals.com/informasi-siloam/artikel/self-harm"
                                        target="_blank" class="artikel-carousel">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset('assets/img/artikel7.jpg') }}" class="card-img-top"
                                                    alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">www.siloamhospitals.com/informasi-siloam</h5>
                                                <p class="card-text">Mengenal Apa itu Self Harm, Penyebab dan Cara
                                                    Mengatasinya</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <a href="https://www.kompasiana.com/imamupsiid/65a65dbcc57afb1aff6ad733/menanggapi-isu-bunuh-diri-imamupsi-berikan-perspektif-melalui-psikologi-islam"
                                        target="_blank" class="artikel-carousel">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset('assets/img/artikel8.jpg') }}" class="card-img-top"
                                                    alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">www.kompasiana.com/imamupsiid</h5>
                                                <p class="card-text">Menanggapi Isu Bunuh Diri, IMAMUPSI Berikan
                                                    Perspektif Melalui Psikologi Islam</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <a href="https://www.depokpos.com/2023/12/pola-asuh-pada-anak-menurut-perspektif-psikologi-islam/"
                                        target="_blank" class="artikel-carousel">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset('assets/img/artikel9.jpg') }}" class="card-img-top"
                                                    alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">www.depokpos.com/2023</h5>
                                                <p class="card-text">Pola Asuh pada Anak menurut Perspektif Psikologi
                                                    Islam</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <a href="https://nationalgeographic.grid.id/read/131886424/bahaya-self-diagnosis-gangguan-mental-pascamenonton-film-joker?page=all"
                                        target="_blank" class="artikel-carousel">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset('assets/img/artikel10.jpg') }}" class="card-img-top"
                                                    alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">nationalgeographic.grid.id/</h5>
                                                <p class="card-text">Bahaya Self Diagnosis Gangguan Mental
                                                    Pascamenonton Film Joker</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Section 3 -->

    <!-- Footer -->
    <div class="footer text-center">
        <p>@MINDWAVE &copy; <?php echo date('Y'); ?></p> <!-- membuat tahun secara dinamic dengan PHP  -->
    </div>
    <!-- Akhir Footer -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ $message }}',
                showConfirmButton: true,
                timer: 3000
            })
        </script>
    @endif
</body>
