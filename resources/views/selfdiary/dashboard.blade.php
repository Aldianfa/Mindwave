<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MindWave | Selfdiary</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/selfdiary/dashboard.css') }}">
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
            <a class="navbar-brand" href="{{route('home')}}">
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
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="text-header">Self Diary</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{route('selfdiary.create')}}" class="btn-diary btn mb-10">Tambah Diary</a>
                </div>
            </div>
            <br>
            @foreach ($selfdiaries as $mydiary)
            <div class="col-md-12 mt-10 mb-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h5 class="card-title"><a class="card-title" href="{{route('selfdiary.detail', $mydiary->id_diary)}}">{{ $mydiary->judul }}</a></h5>
                                {{-- <h5 class="card-title"> Judul </h5> --}}
                            </div>
                            <div class="col-md-2">
                                <h9 class="card-date">{{$mydiary->tanggal}}</h9>
                                {{-- <h9 class="card-date">20 Februari 2024</h9> --}}
                            </div>
                        </div>
                        <p class="card-text">{{ Str::limit($mydiary->isi, 100) }}</p>
                        {{-- <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab iste quisquam
                            molestias maxime eveniet expedita rerum libero dolores ex minus saepe consequuntur eaque
                            dolore nam, similique accusamus qui asperiores veniam.</p> --}}
                    </div>
                </div>
            </div>
            <br>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $selfdiaries->links('pagination::bootstrap-4') }}
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

