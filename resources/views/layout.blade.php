<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DRE - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap CSS --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/simple.css') }}" rel="stylesheet" type="text/css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="d-flex flex-column min-vh-100">
<<<<<<< Updated upstream
    @if (Request::path() == '/')
        <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-expand-md">
        @else
            <nav class="navbar navbar-expand-lg navbar-light sticky-top"
                style="color: white; box-shadow: 0 4px 4px 0 rgba(0,0,0,.2);">
    @endif
    <div class="container-fluid col-md-10">
        <a class="navbar-brand {{ Request::path() == '/' ? 'text-light' : 'text-dark' }}"
            href="{{ url('/') }}"><b>DRE</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-light fw-bold {{ Request::path() == '/' ? 'text-light' : 'text-dark' }}"
                    href="{{ Route('propertiesHome') }}" style="align-self: center;">
=======
    @if(Request::path() == '/')
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-expand-md">
    @else
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: white; box-shadow: 0 4px 4px 0 rgba(0,0,0,.2);">
    @endif
        <div class="container-fluid col-md-10">
            <a class="navbar-brand {{Request::path() == '/' ? 'text-light' : 'text-dark'}}" href="{{ url('/') }}"><img src="{{asset("storage/DRE_bg_1_25.png")}}" class="rounded" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link text-light fw-bold {{Request::path() == '/' ? 'text-light' : 'text-dark'}}" href="{{ Route('propertiesHome') }}" style="align-self: center;">
>>>>>>> Stashed changes
                    Properties
                </a>
                <a class="nav-link text-light fw-bold {{ Request::path() == '/' ? 'text-light' : 'text-dark' }}"
                    href="{{ Route('aboutUs') }}" style="align-self: center;">
                    About Us
                </a>
                {{-- Add guard buat login, klo udh login ubah jadi nama user --}}
                @if (auth()->user() != null)
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle fw-bold {{ Request::path() == '/' ? 'text-light' : 'text-dark' }}"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, {{ auth()->user()->name }}!
                        </a>
                        <ul class="dropdown-menu fw-bold {{ Request::path() == '/' ? 'text-light' : 'text-dark' }}"
                            aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fw-bold text-dark" href="/profile">
                                    Profile
                                </a></li>
                            <li><a class="dropdown-item fw-bold text-dark" href="/transaction">
                                    View Transaction
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item fw-bold text-dark" href="/logout">
                                    Logout
                                </a></li>
                        </ul>
                    </li>
                @else
                    <a class="nav-link text-light fw-bold {{ Request::path() == '/' ? 'text-light' : 'text-dark' }}"
                        href="{{ Route('loginUser') }}">
                        Login / Register
                    </a>
                @endif
            </div>
        </div>
    </div>
    </nav>

    <div class="container-fluid wrapper flex-grow-1">
        <div class="row">
            @yield('content')
        </div>
    </div>

    <footer>
        <div class="text-center text-light">
            Copyright © 2021 DRE
        </div>
    </footer>
    {{-- Bootstrap JS --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
