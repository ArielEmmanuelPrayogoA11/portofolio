<div class="pt-4 pb-2 bg-red text-white text-center">
    <div class="container">
        <div class="row">

            <p>Jika butuh bantuan silakan hubungi kami di nomer Whatsapps: 812xxxxxx </p>


        </div>
    </div>
</div>




<div class="global-navbar bg-crimson text-white py-2">
    <div class="container ">
        <div class="row">
            <div class="col-md-3 d-none d-sm-none d-md-inline py-1">
                <img src="{{ asset('assets/images/logoutama.png') }}" class="w-100" alt="Logo">
            </div>
            <div class="col-md-9 my-auto">
                <div class="border text-center p-2">
                    <h5>Welcome to our Website! You can advertise here!</h5>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark paddingnav ">
        <div class="container-fluid">


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}#xcontacts">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}#xcateg">Categories</a>
                    </li>
                </ul>
                {{-- SEARCHBAR --}}
                <div class="search-bar">
                    <form method="POST" action="{{ url('searchproduct') }}">
                        @csrf
                    <div class="input-group">
                        <input type="search" id="search_product" name="product_name" class="form-control" placeholder="Search...">
                        <button class="input-group-text" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                </div>
                {{-- SEARCHBAR --}}

                <ul class="navbar-nav ms-auto ml-auto">

                    <li class="nav-item dropdown mx-5">
                        @if (auth()->check())
                            <a class="nav-link dropdown-toggle @if (auth()->user()->role_as == 1) text-bold @endif"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('cart') }}">Cart</a></li>
                                <li><a class="dropdown-item" href="{{ url('my-orders') }}">My Order</a></li>
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
                                    <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('register') }}">Register</a>
                                </li>
                        @endif
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>

</div>

{{-- @php
$categories = App\Models\Category::where('navbar_status', '0')
    ->where('status', '0')
    ->get();
@endphp

@foreach ($categories as $cateitem)
<li class="nav-item">
    <a class="nav-link" href="{{ url('category/' . $cateitem->slug) }}">{{ $cateitem->name }}</a>
</li>
@endforeach --}}
