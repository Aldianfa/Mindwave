<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MindWave | Literasi Islam</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/literasi/index.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/selfdiary.css') }}"> --}}

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
            <a class="navbar-brand" href="{{ route('home') }}">
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

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('selfdiary.dashboard') }}">Self Diary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('selfdiary.dashboard') }}">Literasi Islam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('selfdiary.dashboard') }}">Bilik Cerita</a>
                    </li> --}}
                </ul>
                {{-- <li class="nav-item"> --}}
                <img src="{{ asset('assets/img/logo.png') }}" width="50" class="">
                {{-- </li> --}}
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

    {{-- SECTION 2 --}}
    <section class="content mt-10">
        <div class="container justify-content-center">
            <center>
                <div class="menu-circle mb-2">
                    <img src="{{ asset('assets/img/4.png') }}" width="80%" class="">
                </div>
            </center>
            <div class="column justify-content-center text-center">

                <h6>LITERASI ISLAM</h6>

            </div>
            <br>
            <center>
                <a class="card-link"
                    href="https://kumparan.com/faizah-mufiddina/amankan-dirimu-dari-self-diagnosis-kesehatan-mental-21w3pe91T25"
                    target="_blank">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/artikel1.jpg') }}" class="card-img-top" alt="..."
                                width="20%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> www.kumparan.com </h5>
                            <p class="card-text">Amankan dirimu dari Self-Diagnosis Kesehatan Mental</p>
                        </div>
                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://muhammadiyah.or.id/2023/12/hindari-self-diagnosis-dan-upaya-upaya-lainnya-dalam-mengatasi-gangguan-mental/"
                    target="_blank">
                    <div class="card" href="" target="_blank">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/artikel2.jpg') }}" class="card-img-top" alt="..."
                                width="20%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">muhammadiyah.or.id</h5>
                            <p class="card-text">Hindari Self Diagnosis dan Upaya-upaya Lainnya dalam Mengatasi Gangguan
                                Mental</p>
                        </div>
                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://www.beautynesia.id/wellness/jangan-self-diagnose-4-kondisi-ini-bukan-berarti-kamu-alami-depresi/b-278325"
                    target="_blank">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/artikel3.jpeg') }}" class="card-img-top" alt="..."
                                width="20%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">www.beautynesia.id/wellness </h5>
                            <p class="card-text">Jangan Self-Diagnose, 4 Kondisi Ini Bukan Berarti Kamu Alami Depresi
                            </p>
                        </div>
                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://mubadalah.id/seberapa-efektif-psikologi-islam-diterapkan-pada-gen-z-yang-mengidap-penyakit-mental/"
                    target="_blank">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/artikel4.png') }}" class="card-img-top" alt="..."
                                width="20%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">www.Mubadalah.id</h5>
                            <p class="card-text">Seberapa Efektif Psikologi Islam Diterapkan Pada Gen-Z yang Mengidap
                                Penyakit Mental?</p>
                        </div>
                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://www.realitasonline.id/nusantara/102411845973/demi-masa-sungguh-manusia-berada-dalam-kerugian-5-tanda-tanda-kamu-sedang-menghancurkan-masa-depanmu-sendiri-menurut-psikologi-islam"
                    target="_blank">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/artikel5.jpg') }}" class="card-img-top" alt="..."
                                width="10%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">www.realitasonline.id/nusantara/</h5>
                            <p class="card-text">Demi Masa, Sungguh Manusia Berada dalam Kerugian</p>
                        </div>
                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://malangraya.blok-a.com/kesehatan/bedah-insecure-tanpa-self-diagnose-ala-pakar-psikologi-islam-uin-malang/"
                    target="_blank">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/artikel6.jpg') }}" class="card-img-top" alt="..."
                                width="10%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">malangraya.blok-a.com/kesehatan/</h5>
                            <p class="card-text">Bedah Insecure tanpa Self Diagnose ala Pakar Psikologi Islam UIN
                                Malang</p>
                        </div>
                    </div>
                </a>
                <br>
                <a class="card-link" href="https://www.siloamhospitals.com/informasi-siloam/artikel/self-harm"
                    target="_blank">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/artikel7.jpg') }}" class="card-img-top" alt="..."
                                width="10%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">www.siloamhospitals.com/</h5>
                            <p class="card-text">Mengenal Apa itu Self Harm, Penyebab dan Cara Mengatasinya</p>
                        </div>
                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://www.kompasiana.com/imamupsiid/65a65dbcc57afb1aff6ad733/menanggapi-isu-bunuh-diri-imamupsi-berikan-perspektif-melalui-psikologi-islam"
                    target="_blank">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/artikel8.jpg') }}" class="card-img-top" alt="..."
                                width="10%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">www.kompasiana.com/imamupsiid</h5>
                            <p class="card-text">Menanggapi Isu Bunuh Diri, IMAMUPSI Berikan Perspektif Melalui
                                Psikologi Islam</p>
                        </div>
                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://www.depokpos.com/2023/12/pola-asuh-pada-anak-menurut-perspektif-psikologi-islam/"
                    target="_blank">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/artikel9.jpg') }}" class="card-img-top" alt="..."
                                width="10%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">www.depokpos.com/2023</h5>
                            <p class="card-text">Pola Asuh pada Anak menurut Perspektif Psikologi Islam</p>
                        </div>
                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://nationalgeographic.grid.id/read/131886424/bahaya-self-diagnosis-gangguan-mental-pascamenonton-film-joker?page=all"
                    target="_blank">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/artikel10.jpg') }}" class="card-img-top" alt="..."
                                width="10%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">nationalgeographic.grid.id/</h5>
                            <p class="card-text">Bahaya Self Diagnosis Gangguan Mental Pascamenonton Film Joker</p>
                        </div>
                    </div>
                </a>
            </center>
            <br>
            <a href="{{ route('home') }}" class="btn btn-kembali col-12">Kembali</a>

        </div>
    </section>
    {{-- SECTION 2 --}}


    {{-- SECTION 3 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
    @elseif ($message = Session::get('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ $message }}',
                showConfirmButton: true,
                timer: 3000
            })
        </script>
    @endif

</body>
