<style>
    .navbar-nav a {

        transition: 0.3s ease;
    }

    .navbar-nav a:hover {
        color: black !important;

    }
</style>








<div class="sticky-top">
    <div class="text-center bg-bantuan text-white pt-1">
        <div class="container mt-3">
            <div class="row">
                <p>Jika butuh bantuan silakan hubungi kami di nomer Whatsapps: 081392093441 </p>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-gray paddingnav ">
        <div class="container-fluid">
            <a class="navbar-brand  me-4 text-white" href="{{ url('/') }}"><strong>WD</strong>Klinik</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    @if (auth()->check())
                    <li class="nav-item">
                        @if (auth()->user()->role_as == 0)
                            <a class="nav-link active text-white me-2" href="{{ url('pasien/dashboard') }}">
                                Dashboard</a>
                        @elseif (auth()->user()->role_as == 1)
                            <a class="nav-link active text-white me-2" href="{{ url('admin/dashboard') }}">Dashboard</a>
                        @elseif (auth()->user()->role_as == 2)
                            <a class="nav-link active text-white me-2"
                                href="{{ url('doctor/dashboard') }}">Dashboard</a>
                        @endif
                    </li>
                    @else
                    <a class="nav-link active text-white me-2" href="{{ url('pasien/dashboard') }}">
                        Dashboard</a>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link active text-white me-2" aria-current="page" href="/#dabout">About</a>
                    </li>
                    
                </ul>

                <ul class="navbar-nav ms-auto ml-auto">

                    <li class="nav-item dropdown mx-5">
                        @if (auth()->check())
                            <a class="nav-link dropdown-toggle text-white @if (auth()->user()->role_as == 1) text-bold @endif"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">


                                @if (auth()->user()->role_as == 0)
                                    <a class="dropdown-item" href="{{ url('pasien/dashboard') }}">
                                        Dashboard</a>
                                @elseif (auth()->user()->role_as == 1)
                                    <a class="dropdown-item" href="{{ url('admin/dashboard') }}">Dashboard</a>
                                @elseif (auth()->user()->role_as == 2)
                                    <a class="dropdown-item" href="{{ url('doctor/dashboard') }}">Dashboard</a>
                                @endif


                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                </li>

                                <form action="{{ route('logout') }}" id="logout-form" method="post" class="d-none">
                                    @csrf
                                </form>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link active text-white" aria-current="page"
                                        href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-white" aria-current="page"
                                        href="{{ route('register') }}">Register</a>
                                </li>
                        @endif
                </ul>
                
            </div>
        </div>
    </nav>

</div>
