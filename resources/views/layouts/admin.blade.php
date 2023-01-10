<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolfolio</title>

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--  Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    {{-- Header --}}
    <header class="navbar navbar-light sticky-top bg-warning flex-md-nowrap p-3 shadow">
        <div class="row justify-content-between">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Boolfolio</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap ms-2">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); /* Codice javascript che permette il logout richiamando il submit nella form */
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </header>

    <div class="container-fluid vh-100">
        <div class="row h-100">
            {{-- Sidebar --}}
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ Route::currentRouteName() === 'admin.dashboard' ? 'bg-warning' : '' }}"
                                href="">
                                <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="">
                                <i class="fa-solid fa-rectangle-list"></i>
                                Posts
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>


</body>

</html>