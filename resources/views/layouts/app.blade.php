<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Home
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        @if (Auth::guest())
                            <li class="nav-item px-lg-3">
                                <a class="nav-link text-uppercase text-expanded" href="/customer/menu">Menu</a>
                            </li>
                            <li class="nav-item px-lg-3">
                                <a class="nav-link text-uppercase text-expanded" href="/customer/promotion">PROMOTION</a>
                            </li>
                        @else
                            <?php
                            $user = \App\User::where('email', '=', Auth::user()->email)->first();

                            if ($user->role == 'admin'){?>
                                <li><a href="/product">Product</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>

                            <?php }
                            else {
                              if($user->role == 'customer'){?>
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

                            <?php  }
                              else{ ?>
                                <li class="nav-item px-lg-3">
                                    <a class="nav-link text-uppercase text-expanded" href="/customer/order">changepassword</a>
                                </li>

                            <?php  }
                            }?>

                        @endif

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>

                            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
