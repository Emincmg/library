<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Library application · Ali Emin Çomoğlu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/alertifyjs/css/alertify.css" rel="stylesheet">
    <link href="assets/vendor/alertifyjs/css/themes/semantic.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/jquery-select-picker/picker.css" rel="stylesheet">
    @livewireStyles
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">



</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="{{route('home')}}">Library</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Books</a></li>
                <li><a class="nav-link scrollto" href="#team">Authors</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="#portfolio">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
@yield('content')
<!-- ======= Footer ======= -->
<footer id="footer">
    {{--    <div class="footer-top">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}

    {{--                <div class="col-lg-3 col-md-6">--}}
    {{--                    <div class="footer-info">--}}
    {{--                        <h3>Library</h3>--}}
    {{--                        <p>--}}
    {{--                            A108 Adam Street <br>--}}
    {{--                            NY 535022, USA<br><br>--}}
    {{--                            <strong>Phone:</strong> +1 5589 55488 55<br>--}}
    {{--                            <strong>Email:</strong> info@example.com<br>--}}
    {{--                        </p>--}}
    {{--                        <div class="social-links mt-3">--}}
    {{--                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>--}}
    {{--                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>--}}
    {{--                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>--}}
    {{--                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>--}}
    {{--                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-2 col-md-6 footer-links">--}}
    {{--                    <h4>Useful Links</h4>--}}
    {{--                    <ul>--}}
    {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>--}}
    {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#about">About me</a></li>--}}
    {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Books</a></li>--}}
    {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-3 col-md-6 footer-links">--}}
    {{--                    <h4>Our Services</h4>--}}
    {{--                    <ul>--}}
    {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>--}}
    {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>--}}
    {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>--}}
    {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>--}}
    {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-4 col-md-6 footer-newsletter">--}}
    {{--                    <h4>Our Newsletter</h4>--}}
    {{--                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>--}}
    {{--                    <form action="" method="post">--}}
    {{--                        <input type="email" name="email"><input type="submit" value="Subscribe">--}}
    {{--                    </form>--}}

    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="container">
        <div class="copyright">
             <strong><span>Library application</span></strong>
        </div>
        <div class="credits">
            Designed by <a href="">Ali Emin Çomoğlu</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/alertifyjs/alertify.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
<script src="assets/vendor/jquery-select-picker/picker.min.js"></script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
@include('frontend.scripts')
@yield('scripts')
@livewireScripts
</body>

</html>
