@extends('layouts.app')
@section('title', 'Dua Putera Perkasa Farma')
@section('meta_description', 'Dua Putera Perkasa Farma')
@section('meta_keyword', 'Dua Putera Perkasa Farma')

@section('content')


<style>
    .special-card {
        height: 100%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .special-card .card-body {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .special-card .card-title-label,
    .special-card .card-title {
        margin: 0;
    }

    .special-card .card-description {
        flex-grow: 1;
    }

    .special-card .view-detail-btn {
        margin-top: auto;
    }
</style>



    @include('layouts.inc.slider')




    {{-- <div id="carouselExampleSlidesOnly" class="carousel slide owl-carousel category-carousel owl-theme" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/images/deathlogo.png') }}" class="d-block w-40" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
      </div> --}}




    <div id="xhom" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>SELAMAT DATANG</h4>
                    <div class="underline"></div>
                </div>

                <p>
                    Selamat datang di Farmasi PT DUA PUTERA PERKASA FARMA, tempat terpercaya untuk kebutuhan kesehatan Anda!

                    Kami dengan bangga menyambut Anda di platform kami yang didedikasikan untuk menyediakan solusi kesehatan
                    terbaik. Kami memahami betapa pentingnya kesehatan bagi kehidupan Anda, dan kami
                    berkomitmen untuk memberikan layanan terbaik dalam menyediakan obat-obatan berkualitas, informasi
                    kesehatan yang akurat, serta berbagai produk kesehatan lainnya.

                    Dengan tim profesional dan berpengalaman, kami berusaha untuk menjadi mitra kesehatan Anda, memberikan
                    pelayanan yang ramah, cepat, dan terpercaya. Di sini, Anda akan menemukan berbagai produk farmasi
                    terkini, suplemen kesehatan, serta informasi-informasi penting mengenai kesehatan yang dapat
                    meningkatkan pemahaman Anda.

                    Selamat berbelanja dan menjaga kesehatan disini. Terima kasih telah mempercayakan
                    kesehatan Anda kepada kami!

                </p>


                <div class="text-center py-5">
                    <img src="{{ asset('assets/images/deathlogo.jpeg') }}" style="width: 100%;" alt="Logo">

                </div>

                <div class="col-md-12">
                    <h4>Tentang Kami</h4>
                    <div class="underline"></div>
                </div>

                <p>
                    Selamat datang di Farmasi PT DUA PUTERA PERKASA FARMA, tempat terpercaya untuk kebutuhan kesehatan Anda!

                    Kami dengan bangga menyambut Anda di platform kami yang didedikasikan untuk menyediakan solusi kesehatan
                    terbaik. Kami memahami betapa pentingnya kesehatan bagi kehidupan Anda, dan kami
                    berkomitmen untuk memberikan layanan terbaik dalam menyediakan obat-obatan berkualitas, informasi
                    kesehatan yang akurat, serta berbagai produk kesehatan lainnya.

                    Dengan tim profesional dan berpengalaman, kami berusaha untuk menjadi mitra kesehatan Anda, memberikan
                    pelayanan yang ramah, cepat, dan terpercaya. Di sini, Anda akan menemukan berbagai produk farmasi
                    terkini, suplemen kesehatan, serta informasi-informasi penting mengenai kesehatan yang dapat
                    meningkatkan pemahaman Anda.

                    Selamat berbelanja dan menjaga kesehatan disini. Terima kasih telah mempercayakan
                    kesehatan Anda kepada kami!




                </p>

            </div>
        </div>
    </div>




    <div class="py-1 bg-crimson text-white">
        <div class="container">
            <div class="text-center p-3">

                <h4 id="xcateg">KATEGORI FARMASI</h4>

            </div>
        </div>
    </div>

    <div class="py-5 bg-dark">
        <div class="container" style="max-height: 800px; overflow-y: auto;">
            <div class="row">
                <div class="col-md-12 text-white">
                    <h4>All Categories</h4>
                    <div class="underline"></div>
                </div>

                <p class="text-white">
                    Silahkan cari kategori untuk di Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium
                    ducimus illo suscipit dolor temporibus, amet sunt hic! Eius sapiente optio cupiditate nam a provident!
                    Natus quaerat placeat quas aut aperiam harum numquam nulla modi illo tempore neque alias porro, quod
                    voluptatum excepturi officiis autem est distinctio praesentium illum! Atque, placeat?
                </p>

                @foreach ($category as $all_cateitem)
                    <div class="col-md-3">
                        <div class="card card-body shadow mb-3 text-center" style="min-height: 80px;">
                            <a href="{{ url('category/' . $all_cateitem->slug) }}" class="text-decoration-none">
                                <h6 class="text-dark mb-0">{{ $all_cateitem->name }}</h6>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    {{-- PRODUK DISINI --}}

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Produk</h4>
                    <div class="underline " id="xproduk"></div>
                    <p>Gunakan fitur search untuk memudahkan pencarian obat!</p>
                </div>

            </div>
        </div>
    </div>

    <div class="container" >
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-3 mb-4">
                    <div class="card special-card">
                        <div class="card-body">
                            <label style="font-size: 16px;" class="float-end badge bg-red trending_tag card-title-label">{{ $post->category->name }}</label>
                            <h5 class="card-title text-center">{{ $post->name }}</h5>
                            <hr>
                            <p class="card-text card-description">{{ $post->description }}</p>
                            <small>Satuan: {{ $post->satuan }}</small>
                    
                            <h6>Harga: IDR {{ number_format($post->harga, 0, '.', '.') }},-</h6>
                            <div class="underline"></div>
                            <br>
                    
                           
                            <div class="btn btn-primary view-detail-btn">
                                <a href="{{ url('category/' . $post->category->slug) . '/' . $post->slug }}" class="text-white text-decoration-none">
                                    View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Informasi Terkait</h4>
                    <div class="underline"></div>
                </div>

                <div id="xcontacts" class="col-md-8">
                    <p>Dua Putra Perkasa Farma. PT <br>
                        Jl. Semeru Raya No.18, Karangrejo, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50231, Indonesia
                    </p>
                    <p><strong>Terlibat dalam </strong>Farmasi dan toko obat, Perdagangan eceran, kecuali kendaraan bermotor
                        dan motor</p>
                    <h4>Contact Person</h4>
                    <div class="underline"></div>
                    <ul>
                        <li><strong>Telepon</strong>: (024) 3548715</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>







@endsection
