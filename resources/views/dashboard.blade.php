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
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>

<body>
    <div class="dashboard">
        <div class="content">
            <div class="text-content">
                <p class="arti"> Dan apabila dibacakan Al Quran, maka dengarkanlah baik-baik, dan perhatikanlah dengan tenang agar kamu mendapat rahmat.</p>
                <p class="surat">QS. Al-A'raf (7:204)</p>
            </div>
            <div class="logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
            </div>
            <div class="row">
                <a href="{{route('login')}}" class="btn-masuk btn-primary">Masuk</a>
                <a href="{{route('daftar')}}" class="btn-daftar btn-primary">Daftar</a>
            </div>
        </div>
    </div>
</body>

</html>
