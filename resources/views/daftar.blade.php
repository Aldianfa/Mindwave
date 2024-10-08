<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MindWave | Login</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-days/css/all.min.css') }}">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/daftar.css') }}">
    <style type="text/css">
        @font-face {
            font-family: "Days";
            src: url("{{ asset('assets/plugins/font-days/Days.otf') }}");
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="content">
            <div class="row">
                <div class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                </div>
                
                <h3>Daftarkan kalian!</h3>
            </div>
            <form action="{{ route('pengguna.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="username">Nama Lengkap</label>
                        <input type="text" placeholder="Nama Lengkap" name="nama" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nis">Nomor Induk Sekolah</label>
                        <input type="text" placeholder="Nomor Induk Sekolah" name="nis" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Username" name="username" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" name="password" class="form-control" required>
                    </div>
                </div>
                
                <button type="submit" class="btn">Daftar</button>
                <h8>Sudah punya akun? <a href="{{route('login')}}">Login disini</a></h8>
                
            </form>
        </div>
    </div>
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
    @endif
</body>