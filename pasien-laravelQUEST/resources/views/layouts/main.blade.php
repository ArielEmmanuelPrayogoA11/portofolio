<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap  --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    {{-- Bootstrap Icon --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Google Font: Source Sans Pro -->

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
    <!-- Font Awesome Icons -->
    {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}

    <!-- IonIcons -->
    {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}


    {{-- <!-- Theme style --> --}}
    {{-- <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css"> --}}

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- <link rel="icon" type="image/png" href="/img/favicon-artixdragon.png"> --}}

    <style>
        body {
            background-color: #404040;
            color: #fff;
        }

        /* Untuk membuat tulisan "Penitence" tetap di kiri */
        .navbar-brand {
            margin-right: auto;
        }

        /* Untuk memberikan efek hover dengan warna orange box */
        .navbar-nav .nav-link { 
            margin-left: 30px;
            padding: 20px;
            /* Menambahkan margin kanan sebesar 140px antara tombol navigasi */
            transition: background-color 0.3s ease;
            /* Menambahkan animasi smooth selama 0.3 detik dengan efek ease */
        }

        .navbar-nav .nav-link:hover {
            background-color: orange;

            /* Warna latar belakang saat hover */
        }

        .homehoverpasien li:hover {
            background-color: white;
            color: black;
        }

        .homehoverpasien li:hover a {
            color: black;
            /* Atur warna teks ketika dihover */
        }

        .homehoverpasien li:hover .bi-person-fill {
            color: black;
            /* Atur warna ikon ketika dihover */
        }

        .signature-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .signature-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .signature {
            width: 45%;
            /* Atur lebar tanda tangan di sini */
        }

        .form-group.signature label,
        .form-group.signature a {
            display: block;
        }

        .nogaris {
            text-decoration: none;
        }

        .hoverfooterhe li:hover a {
            text-decoration: underline;
            color: white;
        }

        .hoverfooterhe li a {
        text-decoration: none;
        color: orange;
        }
        
    </style>


    <title>{{ $title }}</title>

</head>

<body>



    <div class="container mt-4">
        @yield('container')

    </div>

   
    <footer>
        <div class="bg-dark text-white py-4 mt-5 border-top">
            <div class="container">
                <div class="row hoverfooterhe">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <strong>Penitence</strong>
                        <ul class="list-unstyled">
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Developer Info</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <strong>Navigation</strong>
                        <ul class="list-unstyled">
                            <li><a href="/">Home Page</a></li>
                            <li><a href="/spm">Surat Pasien</a></li>
                            <li><a href="/quest">Quest</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <strong>Account</strong>
                        <ul class="list-unstyled">
                            {{-- Belom Login Maka : --}}
                            @if (!Auth::check()) 
                            <li><a href="/register">Registration</a></li>
                            <li><a href="/login">Login</a></li>
                            @endif
                            <li><a href="/">Help</a></li>
                            <li><a href="/password/edit">Reset Password</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <strong>News</strong>
                        <ul class="list-unstyled">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus iure dolore veritatis exercitationem, quas, commodi placeat officiis nisi nobis repellendus dolorem cumque totam assumenda, error eius quis illum mollitia debitis.</p>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="pt-15 bg-black text-center border-top">
            <div class="py-5">

                <h1>P E N I T E N C E</h1>
                
                <p class="">Copyright (&copy;) 2023 <br>
                    All Rights Reserved. All wrongs avenged by Ariel Emmanuel Prayogo</p>
                
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
