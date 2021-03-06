<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbar-fixed-top">
            <div class="container">
               <a href="./"><img class="logo" src="{{url('/assets/images/logo/logo.png')}}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <a class="navbar-brand" href="#home">Home</a>
                        <a class="navbar-brand" href="#about">About</a>
                        <a class="navbar-brand" href="#shop">Shop Food</a>
                        <a class="navbar-brand" href="#">Blog</a>
                        <a class="navbar-brand" href="#">Contact us</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                </div>
                        <ul class="navbar-nav ml-auto kek">
                            <a class = "nav-link shop-cart" href="">@include('front.cart-svg')
                                <div id="cart-count">
                                @include('front.mini-cart')
                                </div>
                            </a>
                            <a class = "nav-link user" href="login_register">@include('front.user-svg')
                            </a>
                        </ul>
            </div>
        </nav>

        <main class="py-4">
            
            @yield('content')
        </main>
    </div>
</body>
</html>
