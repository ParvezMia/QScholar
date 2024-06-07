<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sharp-regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sharp-solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- dark version css -->
    <link rel="stylesheet" href="{{ asset('css/dark-v.css') }}">
</head>

<body>
    <!-- preloader start -->
    {{-- <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-content">
                    <img class="loading-logo-text" src="images/logo-text.png" alt="Kidba">
                    <div class="loading-stroke">
                        <img class="loading-logo-icon" src="images/logo-icon.png" alt="Pen">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- preloader end -->

    @include('frontned.navbar')

    @yield('content')

    @include('frontned.footer')


    <!-- JS FILES ↓ -->
    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/fslightbox.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('js/eocjs-newsticker.js') }}"></script>
    <script src="{{ asset('js/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
