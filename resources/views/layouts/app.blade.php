<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" img src="{{ asset('images/siener.png') }}" alt="Gambar">
    <!-- <title>{{ config('title', 'Login && Register')}}</title> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="icon" img src="{{ asset('images/siener.png') }}" alt="Gambar">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    SIERENT
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Auth::check())
                        @if (Auth::user()->role == 'pembeli')
                        <a class="nav-link" href="{{url('/')}}">Home </a>
                        <a class="nav-link" href="{{url('/about')}}">About</a>
                        <a class="nav-link" href="{{url('/pelayanan')}}">Pelayanan</a>
                        <a class="nav-link" href="{{url('/baskets')}}">Katalog</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Riwayat Belanja
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/history">Riwayat Transaksi COD</a>
                                <a class="dropdown-item" href="/transaksionline">Riwayat transaksi Online</a>
                        </li>  
                        @endif
                        @if (Auth::user()->role == 'admin')
                        <a class="btn btn-primary" href="http://127.0.0.1:8000/admin">Ruang Admin</a>
                        @endif
                        @if (Auth::user()->role == 'penjual')
                        <a class="nav-link" href="http://127.0.0.1:8000/penjual">Ruang Penjual</a>
                        @endif
                        @endif
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        @if (Auth::check())
                        @if(Auth::user()->role == "pembeli")
                        @php
                        $barangs = Auth::user()->barangs->count('stok');
                        echo "<a class='btn btn-dark' href='/barangs'><i class='fa fa-shopping-cart'></i> $barangs</a>";
                        @endphp
                        @else  
                        @endif
                        @endif
                        <div class="dropdown">
                        <a style="background-color: transparent;text-decoration:none;" class="dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <strong class="mt-2 text-light mr-3 ml-3 text-uppercase">{{ Auth::user()->name }}</strong>
                        @if (Auth::user()->gambar === NULL)
                        <img src="https://images.pexels.com/photos/376718/pexels-photo-376718.jpeg?cs=srgb&dl=pexels-daniel-pixelflow-376718.jpg&fm=jpg" class="rounded-circle" alt="user" width="40" height="40">
                        @else
                        <img src="/gambaruser/{{Auth::user()->gambar}}" class="rounded-circle" alt="user" width="40" height="40">
                        @endif
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                            <a class="text-dark" href="user/edit/{{Auth::user()->id}}">Edit</a>
                            <hr>
                            <a class="text-dark" href="change-password">Ubah Password</a>
                            <hr>
                        <a class="btn-link text-dark" style="text-decoration:none;" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                        </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="bg-dark text-white mt-5">
      <div class="container">
      <div class="row">
        <div class="col-md-4 mt-4">
          <h5>Alamat</h5>
          <p>Jl. Wolter Monginsidi No.99A, Bangetayu Kulon, 
            Kec. Genuk, Kota Semarang, 
            Jawa Tengah 50115</p>
        </div>
        <div class="col-md-4  mt-4">
          <h5>SIERENT</h5>
          <a href="about.html" style="color: white;">About</a>
          <br>
        <a href="contact.html" style="color: white;">Contact</a>
        <br>
          <a href="pembayaran.html" style="color: white;">Pembayaran</a>
        </div>
        <div class="col-md-4  mt-4">
          <h5>Hubungi Lebih Lanjut</h5>
          <p>+62 831-5561-6880</p>
          <a href="https://www.instagram.com/fara.dila_/" style="color: white;">Instagram</a>
          <br>
          <a href="https://www.facebook.com/hoshiko.dai/" style="color: white;">Facebook</a>
          <br>
          <a href="https://www.youtube.com/@trikusumafaradila4045" style="color: white;">Youtube</a>
          <br>
          <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=faradilatrikusuma@gmail.com" style="color: white;">Email</a>
          <br>
        </div>
        <div class="col-lg-12 mt-3" style="border-top: 1px solid white;" id="copi">
          <p class="text-center">&copy; copyright SIERENT 2023</p>
        </div>
      </div>
    </footer>
</body>
</html>
