<!DOCTYPE html>
<!-- <html lang="en"> -->
<html lang="{{ config('app.locale') }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Coffee cafe</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <html lang="{{ config('app.locale') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/business-casual.css') }}" rel="stylesheet">
    <!-- Temporary navbar container fix -->

    <!-- Datepicker -->
    <link href="{{ asset('datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet">

    <!-- DataTable -->
    <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    /* Temporary fix for img-fluid sizing within the carousel */

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-4 hidden-md-down">KK Coffee</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-4 hidden-md-down">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-light navbar-custom bg-faded py-lg-4">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="#">Start Bootstrap</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="/index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/customer/menu">Menu</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/customer/promotion">PROMOTION</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/customer/giftvoucher">GIFT VOUCHER</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/customer/point">POINT</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/customer/profile">PROFILE</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/customer/order">ORDER</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/login">LOGIN</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/login">REGISTER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">

        <div class="bg-faded p-4 my-4">
            <!-- Image Carousel -->
            <!-- Welcome Message -->
            <div class="text-center mt-4">
        @yield('content')
                <!--                 <div class="text-heading text-muted text-lg">By <strong>Start Bootstrap</strong></div> -->
            </div>
        </div>

</div>
    <!-- /.container -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>




    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/tether/tether.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('script')

</html>
