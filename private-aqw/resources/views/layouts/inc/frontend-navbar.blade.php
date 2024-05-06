<style>
    .navbar {
        background-color: #1b1b1b;
        /* Mengubah warna latar belakang navbar */
    }

    .navbar-nav {
        margin-left: auto;
        display: flex;
        gap: 10px;
        /* Adjust the gap size as needed */
    }

    .navbar-nav .nav-item {
        margin: 0;
        font-size: 20px !important;
        /* Mengubah ukuran font */
    }

    .navbar-nav .nav-link {
        transition: color 0.3s ease, font-weight 0.3s ease;
        /* Menambahkan transisi untuk warna dan font-weight */
        font-size: 20px;
        color: #fff;
        /* Menentukan warna teks awal */
    }

    .navbar-nav .nav-link:hover {
        color: #feff07 !important;
        /* Ubah warna teks saat hover */
        font-weight: bold;
        /* Membuat teks menjadi tebal saat hover */
    }
</style>

<div class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-slate paddingnav ">
        <div class="container-fluid">
            <a class="navbar-brand me-4 text-white" href="{{ url('/') }}"><strong>PhedraGON</strong></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link active me-2 text-white" aria-current="page" href="/#dabout">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-2 text-white" aria-current="page" href="/#dabout">Farming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-2 text-white" aria-current="page" href="/#dabout">Storyline</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item dropdown mx-2 ">
                        @if (auth()->check())
                            <a class="nav-link dropdown-toggle @if (auth()->user()->role_as == 1) text-bold @endif"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                </li>
                                <form action="{{ route('logout') }}" id="logout-form" method="post" class="d-none">
                                    @csrf
                                </form>
                            @else
                                <li class="nav-item">
                                    <a class="text-white nav-link active" aria-current="page"
                                        href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="text-white nav-link active" aria-current="page"
                                        href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a>
                                </li>
                        @endif
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
