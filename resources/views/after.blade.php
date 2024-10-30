<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Free HTML Templates">
    <meta name="description" content="Free HTML Templates">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        body {
            overflow: hidden; /* Hides both horizontal and vertical scrollbars */
        }
    </style>
</head>

<body>
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h2 class="text-primary mb-4">Login Berhasil</h2>
            <br>
            <br>
            <h5 class="text-white">Selamat Datang <b>{{Auth::user()->name}}</b></h5>
            <h3 class="text-white">Di Rekayasa Perangkat Lunak (RPL)</h3>
            <h6 class="text-white">Btw Anda Login sebagai <b>{{Auth::user()->role}}</b></h6>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a href="{{ url('index.html') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Lanjutkan</a>
            <br>
            <a href="{{ route('actionlogout') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Logout ?</a>
        </div>
    </div>
    <!-- Header End -->

    <!-- Back to Top -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <!-- Template Javascript -->
</body>

</html>
