<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MindWave | Bilik Cerita</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bilik/index.css') }}">
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
                    <img src="{{ asset('assets/img/5.png') }}" width="50%" class="">
                </div>
            </center>
            <div class="column justify-content-center text-center">

                <h5>BILIK CERITA</h5>
                <br>
                <h5 class="text-pink">Pilih Konselormu!</h5>

            </div>
            <br>
            <center>
                <a class="card-link"
                    href="https://wa.link/6qb29z"
                    target="_blank">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('assets/img/guru1.jpg') }}" class="img-guru-circle" alt="..."
                                    width="10%">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h5 class="card-title">KONSELOR </h5>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-3">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-text">M. Agus Salim, S.pd</p>
                                    <p class="card-tap">Tap to chat!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://wa.link/kklqwy"
                    target="_blank">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('assets/img/guru2.jpg') }}" class="img-guru-circle" alt="..."
                                    width="10%">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h5 class="card-title">KONSELOR </h5>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-3">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-text">Fauzul Mutmainah. S. Psi</p>
                                    <p class="card-tap">Tap to chat!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://wa.link/59e38y"
                    target="_blank">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('assets/img/guru3.jpg') }}" class="img-guru-circle" alt="..."
                                    width="10%">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h5 class="card-title">KONSELOR </h5>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-3">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-text">Ita Puspita Dianaotavia, S. Pd</p>
                                    <p class="card-tap">Tap to chat!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
                <br>
                <a class="card-link"
                    href="https://wa.link/f51dwj"
                    target="_blank">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('assets/img/guru4.jpg') }}" class="img-guru-circle" alt="..."
                                    width="10%">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h5 class="card-title">KONSELOR </h5>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-3">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <p class="card-text">Ardi Wira Kusuma. M.Pd</p>
                                    <p class="card-tap">Tap to chat!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
                <br>
                

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
