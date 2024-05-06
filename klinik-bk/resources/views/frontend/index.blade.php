@extends('layouts.app')

@section('content')



    <div class="container-fluid"
        style="background-image: url('{{ asset('assets/bg2.jpg') }}'); background-size: cover; background-position: center;">
        <div class="row">
            <div class="paddingbanyak paddingbanyakbawah">
                <div class="container-fluid">
                    <div class="text-center text-white">
                        @if (auth()->check())
                            <h1 class="textbesar">Welcome {{ auth()->user()->name }}</h1>
                            <strong class="waduh">
                                @if (auth()->user()->role_as == 0)
                                    You are logged in as Pasien
                                @elseif(auth()->user()->role_as == 1)
                                    You are logged in as Admin
                                @elseif(auth()->user()->role_as == 2)
                                    You are logged in as Dokter
                                @endif
                            </strong>
                        @else
                            <h1 class="textbesar"><strong>Sistem Temu Janji</strong></h1>
                            <h5>Projek Sertifikasi Web Developer</h5>
                        @endif
                        <div class="card-body pt-4">
                            @if (auth()->check())
                                @if (auth()->user()->role_as == 0)
                                    <a class="text-white btn btn-primary py-3" href="{{ url('pasien/dashboard') }}"><i
                                            class="fas fa-columns"></i> Menuju ke
                                        Dashboard
                                        Pasien</a>
                                @elseif (auth()->user()->role_as == 1)
                                    <a class="text-white btn btn-primary py-3" href="{{ url('admin/dashboard') }}"><i
                                            class="fas fa-columns"></i> Menuju ke Dashboard
                                        Admin</a>
                                @elseif (auth()->user()->role_as == 2)
                                    <a class="text-white btn btn-primary py-3" href="{{ url('doctor/dashboard') }}"><i
                                            class="fas fa-columns"></i> Menuju ke Dashboard
                                        Dokter</a>
                                @endif
                            @else
                                <a href="{{ route('register') }}" class="text-white btn btn-primary py-3"><strong>Daftar
                                        Sekarang</strong></a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid mx-4">
        <div class="row mt-4 pt-4">
            <div class="col-md-6 order-md-1">
                <h4>Informasi Terkait</h4>
                <div class="underline"></div>

                <p>Selamat datang di Sistem Temu Janji kami!

                    Kami sangat senang Anda telah bergabung dengan kami untuk mengeksplorasi kemudahan dan kepraktisan
                    sistem temu janji kami. Di sini, kami memahami bahwa waktu sangat berharga, terutama dalam urusan
                    kesehatan. Oleh karena itu, kami telah merancang sistem ini dengan fokus pada kenyamanan dan kecepatan
                    bagi semua pengguna, baik itu dokter maupun pasien.

                    Salah satu fitur utama yang kami banggakan adalah kemampuan bagi pasien untuk memilih jadwal sesuai
                    dengan kebutuhan mereka. Kami memahami betapa pentingnya fleksibilitas dalam mengatur janji, dan dengan
                    sistem kami, pasien dapat dengan mudah menemukan jadwal yang cocok tanpa harus menghadapi kerumitan atau
                    menunggu lama.
                    <br><br>
                    Tidak hanya itu, dengan berbagai pilihan jadwal yang tersedia, pasien juga dapat memilih waktu yang
                    paling sesuai dengan rutinitas dan preferensi pribadi mereka. Ini memberikan kontrol lebih kepada pasien
                    atas pengalaman mereka dalam mengatur janji, sehingga mereka dapat fokus sepenuhnya pada perawatan
                    mereka tanpa khawatir tentang jadwal yang bertabrakan atau waktu yang terbuang percuma.

                    Kami berkomitmen untuk terus meningkatkan dan memperbarui sistem kami agar selalu memenuhi kebutuhan dan
                    harapan Anda. Dengan demikian, mari bersama-sama menjadikan pengalaman dalam mengatur janji menjadi
                    lebih efisien, efektif, dan menyenangkan bagi semua pihak yang terlibat.

                    Terima kasih telah mempercayakan kami untuk membantu Anda dalam perjalanan kesehatan Anda. Mari
                    bergabung dan manfaatkan layanan kami untuk kesejahteraan yang lebih baik.
                </p>
            </div>
            <div class="col-md-6 order-md-1">
                <h4>Contact Person</h4>
                <div class="underline"></div>
                <div class="row">
                    <div class="col-md-6">
                        <strong>WA:</strong>
                        <p>081392093441</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Facebook:</strong>
                        <p>Klinik 2023 - FB</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Instagram:</strong>
                        <p>Klinik 2023 - IG</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Gmail:</strong>
                        <p>111202012535@mhs.dinus.ac.id</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark mt-5 py-4">

        <div class="container">
            <h3 class="text-white">About</h3>
            <div class="underline"></div>
            <p class="mb-5 text-white">
                Setiap dokter yang terdaftar di bawah memiliki pengalaman dan keahlian dalam bidangnya masing-masing, siap
                membantu Anda dalam menangani berbagai masalah kesehatan. Dengan beragam poli dan dokter yang tersedia, kami
                berharap dapat memberikan layanan kesehatan yang komprehensif dan berkualitas kepada Anda dan keluarga Anda.

                Jangan ragu untuk menghubungi kami untuk mendapatkan informasi lebih lanjut atau untuk membuat janji dengan
                dokter pilihan Anda. Kami siap melayani Anda dengan sepenuh hati dan memberikan perawatan yang terbaik
                sesuai dengan kebutuhan Anda.
            </p>
        </div>


        <div class="container">
            <div class="row" id="dabout">
                <div class="col-md-6 ">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h1>Poli</h1>
                            <small>Beberapa poli yang tersedia untuk didaftar</small>
                            <hr class="mb-4">
                            <ul class="list-unstyled mb-5">
                                @foreach ($poli as $item)
                                    <li class="mb-2"><strong>{{ $item->nama_poli }}</strong>
                                        <br>{{ $item->keterangan }}
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 shadow">
                        <div class="card-body" id="#dcontact">
                            <h1>Dokter</h1>

                            <small></small>
                            <hr class="mb-4">

                            <ul class="list-unstyled mb-5">
                                @foreach ($dokter as $item)
                                    <div class="pb-2">
                                        <li class="mb-1"><i class="fas fa-user mx-3"></i><strong>Dr.
                                                {{ $item->nama }}</strong></li>
                                        <div class="mx-4 underline"></div>
                                        <strong class="mx-3">Poli :</strong>Poli {{ $item->poli->nama_poli }}
                                    </div>
                                @endforeach
                            </ul>


                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
