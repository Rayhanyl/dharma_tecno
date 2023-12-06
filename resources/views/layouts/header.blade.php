<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo_dharma.png') }}">
    <title>
        PT DHARMA TEKNO INDONESIA
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}"
        type="text/css">
    <link href="{{ asset('assets/css/datatables.css') }}" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="http://127.0.0.1:8000/" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    @stack('styles')
</head>

<body class="">
    <div class="container z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-uppercase" href="#">
                            {{ Auth::user()->role ?? '' }}
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                            href="{{ route('landing.page') }}">
                                            <i class="fa fa-home opacity-6 text-dark me-1"></i>
                                            Home
                                        </a>
                                    </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route ('auth.register.page') }}">
                                        <i class="fas fa-registered opacity-6 text-dark me-1"></i>
                                        Sign Up
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route ('auth.login.page') }}">
                                        <i class="fas fa-sign-in-alt opacity-6 text-dark me-1"></i>
                                        Sign In
                                    </a>
                                </li>
                                @endguest
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                            href="{{ route('dashboard.page') }}">
                                            <i class="fas fa-desktop opacity-6 text-dark me-1"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    @if (Auth::user()->role === 'admin')
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                                href="{{ route('data.calon.page') }}">
                                                <i class="fas fa-table opacity-6 text-dark me-1"></i>
                                                Data Calon Pelamar
                                            </a>
                                        </li>
                                    @endif
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                            href="{{ route('data.pelamar.page') }}">
                                            <i class="fas fa-table opacity-6 text-dark me-1"></i>
                                            Histori Data Pelamar
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link me-2" href="{{ route('datadiri.page') }}">
                                            <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                            Data Diri
                                        </a>
                                    </li>
                                    @if (Auth::user()->role === 'applicant')
                                        <li class="nav-item">
                                            <a class="nav-link me-2" href="{{ route('status.page') }}">
                                                <i class="fas fa-info-circle opacity-6 text-dark me-1"></i>
                                                Status Lamaran
                                            </a>
                                        </li>
                                    @endif
                                    <li class="nav-item">
                                        <a class="nav-link me-2"
                                            href="{{ route('auth.logout') }}">
                                            <i class="fas fa-sign-out-alt opacity-6 text-dark me-1"></i>
                                            Log Out
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
