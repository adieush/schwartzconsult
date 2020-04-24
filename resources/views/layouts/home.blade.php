<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="img/logos/fav.png" type="image/x-icon" />
    <!-- ========================================= Css files -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Schwartzcode - Consulting</title>
</head>

<body>
<!-- =========================== header-->
<header class="header has-style-bg overlay" style="background-image: url(images/bg/header-bg3.png);">
    <!-- =========================== navbar-->
    @include('layouts.partials.navbar')
    <div class="container">
        <div class="mt-8 mb-8" >
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="header-title text-left" data-aos="fade-up" data-aos-delay="500">
                        DIGITAL CONSULTANCY
                    </h2>
                    <p class="header-desc text-left" data-aos="fade-up" data-aos-delay="600">
                        Kickstart your next digital project: book a session with our specialists
                        today and see how we can help optimise your business.

                    </p>
                    <a href="{{ url('/packages') }}" class="btn btn-dark btn-round" data-aos="fade-up" data-aos-delay="700">
                        View Packages
                        <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <div class="col-lg-6">

                </div>

            </div>
        </div>
        <div class=" border-top">
            <div class="row pt-5 pb-5">
                <div class="col-lg-3">
                    <img src="images/logos/slack.png" alt="">
                </div>
                <div class="col-lg-3">
                    <img src="images/logos/envato.png" alt="">

                </div>
                <div class="col-lg-3">
                    <img src="images/logos/slack.png" alt="">

                </div>
                <div class="col-lg-3">
                    <img src="images/logos/slack.png" alt="">

                </div>
            </div>

        </div>
    </div>
</header>
@yield('content')

<!-- ==========================  Footer-->
<footer class="footer has-style2">
    @include('layouts.partials.footer')
</footer>
<!-- ====================================== js files  -->
<script src="js/plugins/jQuery.min.js"></script>
<script src="js/plugins/modernizr.min.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/feather-icons.js"></script>
<script src="js/plugins/slick.min.js"></script>
<script src="js/plugins/owl.carousel.min.js"></script>
<script src="js/plugins/aos.js"></script>
<script src="js/plugins/typed.js"></script>
<script src="js/plugins/all.min.js"></script>
<script src="js/plugins/jquery.waypoints.min.js"></script>
<script src="js/plugins/jquery.counterup.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="js/main.js"></script>
</body>

</html>
{{--<main class="py-4">--}}
    {{--@yield('content')--}}
{{--</main>--}}