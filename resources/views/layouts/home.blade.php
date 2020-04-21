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
    <title>olikit - Home 3</title>
</head>

<body>
<!-- =========================== header-->
<header class="header has-style-bg overlay" style="background-image: url(images/bg/header-bg3.png);">
    <!-- =========================== navbar-->
    <nav class="navbar">
        <div class="container">
            <div class="flex">
                <a href="../index.html " class=" text-white navbar-brand flex vcenter" href="#"><img
                            data-aos="fade-right" class="logo" src="images/logos/logo-white.svg" alt="" /></a>

                <ul class="navbar-menu">
                    <li data-aos="fade-left" data-aos-delay="100">
                        <a class="fade-page" href="../index.html">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a>Demos</a>
                        <ul class="sub-menu">
                            <li><a class="fade-page" href="Home_1.html">Home 1</a>
                            </li>
                            <li><a class="fade-page" href="Home_2.html">Home 2</a>
                            </li>
                            <li><a class="fade-page" href="Home_3.html">Home 3</a>
                            </li>
                            <li><a class="fade-page" href="Home_4.html">Home 4</a>
                            </li>


                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a>Pages</a>
                        <ul class="sub-menu">
                            <li><a class="fade-page" href="page_about.html">About</a>
                            </li>
                            <li><a class="fade-page" href="page_plans.html">Plans</a>
                            </li>
                            <li><a class="fade-page" href="page_blog.html">Blog</a>
                            </li>

                            <li><a class="fade-page" href="page_Article.html"> Article</a>
                            </li>

                            <li><a class="fade-page" href="page_contact.html"> Contact</a>
                            </li>

                            <li><a class="fade-page" href="page_help.html"> Help Center </a>
                            </li>
                        </ul>
                    </li>
                    <li data-aos="fade-left" data-aos-delay="400"> <a class="fade-page"
                                                                      href="#">support</a> </li>
                </ul>
            </div>
            <div class="level-right">
                <!-- your list menu here -->
                <div class="navbar-menu">
                    <a href="" data-aos="fade-left" data-aos-delay="400" class="btn btn-dark btn-round">
                        Get Started
                    </a>
                </div>
                <div class="mobile-menu">
                    <!-- your list menu in mobile here -->
                    <ul>
                        <li><a class="fade-page" href="Home_1.html">Home 1</a></li>
                        <li><a class="fade-page" href="Home_2.html">Home 2</a></li>
                        <li><a class="fade-page" href="Home_3.html">Home 3</a></li>
                        <li><a class="fade-page" href="Home_4.html">Home 4</a></li>
                        <li><a class="fade-page" href="Home_5.html">Home 5</a></li>

                    </ul>
                </div>
                <div class="flex">
                    <div class="menu-toggle-icon">
                        <div class="menu-toggle">
                            <div class="menu">
                                <input type="checkbox" />
                                <div class="line-menu"></div>
                                <div class="line-menu"></div>
                                <div class="line-menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="mt-8 mb-8" >
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="header-title text-left" data-aos="fade-up" data-aos-delay="500">
                        {{ $someName }}  {{ $rofofo ?? 'default'  }} Template
                        for Business                        </h2>
                    <p class="header-desc text-left" data-aos="fade-up" data-aos-delay="600">
                        Keep track of all the important KPIs in your organization across
                        departments, employees, projects, and campaigns.
                    </p>
                    <a href="#" class="btn btn-dark btn-round" data-aos="fade-up" data-aos-delay="700">Let's Get Started
                        <ion-icon name="arrow-forward"></ion-icon></a>
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
    <div class="footer-head">
        <button class="to-top">
            <ion-icon name="arrow-up"></ion-icon>
        </button>
        <div class="container">
            <div class="section is-sm container pb-0">
                <div class="row footer-contact">
                    <div class="col-lg-4 col-md-4">
                        <div class="contact-item">
                            <h6>Phone Number</h6>
                            <p class="contact-item-info">+212 6 46 05 26 56</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="contact-item">
                            <h6>Email Adress</h6>
                            <p class="contact-item-info">creabik@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="contact-item">
                            <h6>Local Adress</h6>
                            <p class="contact-item-info">United State, Casablanca, 72</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-body">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="footer-desc">
                        <div class="logo">
                            <h1 class="text-white">olikit</h1>
                        </div>
                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
                            .</p>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <h6 class="list-title">Company</h6>
                    <ul class="list-items">
                        <li> <a href="#">About</a> </li>
                        <li> <a href="#">Our customers</a> </li>
                        <li> <a href="#">Contact us</a> </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <h6 class="list-title">Useful links</h6>
                    <ul class="list-items">
                        <li> <a href="#">Media kit</a> </li>
                        <li> <a href="#">Affiliate program</a> </li>
                        <li> <a href="#">Contact us</a> </li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h6 class="list-title">Legal</h6>
                    <ul class="list-items">
                        <li> <a href="#">Terms</a> </li>
                        <li> <a href="#">Privacy </a> </li>
                        <li> <a href="#">Cookies</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="copyright text-center text-copyright"> All rights reserved 2019</p>
    </div>
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