<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CC Store | Situs Jual Beli Terpercaya</title>
    <link rel="shortcut icon" href="{{ 'logo2.png' }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .nav-item:hover {
            background: [jrgba(0, 0, 0, 0.1)
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            display: none;
        }
    </style>
</head>

<body style="min-height: 100vh; height:100vh;">
    <nav>
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
    </nav>
    {{-- <nav class="navbar navbar-expand bg-white sticky-top border-bottom mb-3">
        <div class="container">
            <div class="d-flex align-items-center">
                <a href="/" class="navbar-brand text-success mx-2 ms-auto">
                    <a href="{{ url('/') }}" class="btn btn-outline-success"><i
                            class="bi bi-house-door-fill"></i></a>
                    <img src="{{ asset('logo2.png') }}" alt="Logo" height="45px" width="45px"
                        style="margin-left: 30px;">
                </a>
            </div>
        </div>

    </nav> --}}
    @yield('content')
</body>
</html>