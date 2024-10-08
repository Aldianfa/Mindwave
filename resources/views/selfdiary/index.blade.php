<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MindWave | Self Diary</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/selfdiary/selfdiary.css') }}">

</head>

<body>
    <div class="dashboard">
        <div class="content">
            <div class="logo">
                <img src="{{ asset('assets/img/3.png') }}" alt="Logo">
            </div>
            <div class="text-content">
                <h4 class="text-header">Selamat Datang, Di Self Diary!</h4>
                <p class="text"> Ceritakan segala kesahmu disini, Rahasia akan selalu menjadi milikmu</p>
            </div>
            
            <div class="row">
                <a href="{{route('selfdiary.dashboard')}}" class="btn-masuk btn-primary">Masuk</a>
            </div>
        </div>
    </div>
</body>

</html>
