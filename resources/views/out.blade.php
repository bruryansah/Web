<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Free HTML Templates">
    <meta name="description" content="Free HTML Templates">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        body {
            overflow: hidden;
            margin: 0;
        }

        .topbar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background:#f04400; /* Warna latar belakang */
            color: white;
            white-space: nowrap; /* Mencegah teks terputus */
            overflow: hidden;
        }

        .topbar-text {
            display: inline-block;
            padding: 10px 0;
            animation: scroll 10s linear infinite; /* Animasi bergerak */
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%); /* Mulai dari kanan */
            }
            100% {
                transform: translateX(-100%); /* Bergerak ke kiri */
            }
        }

        .jumbotron {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            color: white;
        }

        h2, h3, h4 {
            margin: 0.5rem 0;
        }

        .btn {
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="topbar">
        <div class="topbar-text">Trimakasih sudah menggunjungi website saya, shilakan berikan masukan anda di email : bruryansah@gmail.com</div>
    </div>
    <!-- Topbar End -->

    <!-- Header Start -->
    <img src="img/about.jpeg" alt="">
    <div class="jumbotron jumbotron-fluid">
        <h2 class="text-primary">Apakah Anda Yakin ? <b>{{Auth::user()->name}}</b></h3></h2>
        <h4 class="text-white">Keluar Dari Website</h4>
        <br>
        <br>
        <a href="{{ route('actionlogout') }}" class="btn btn-primary py-2 px-4">Logout ?</a>
        <a href="index.html" class="btn btn-primary py-2 px-4">Batalkan</a>

    </div>
    <!-- Header End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>
</body>

</html>
