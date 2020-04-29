<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/logos/fav.png" type="image/x-icon">
    <!-- ========================================= Css files -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>olikit - Plans</title>
</head>

<body>
<!-- =========================== header-->
<header class="header-page">
    <!-- =========================== navbar-->
    @include('layouts.partials.navbar')
    @section('page-title-block')
    @show
</header>




@yield('content')
<!-- =========================== Footer-->
<footer class="footer has-style1">
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
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="js/main.js"></script>
</body>

</html>