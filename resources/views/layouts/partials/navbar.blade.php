<nav class="navbar">
    <div class="container">
        <div class="flex">
            <a href="{{ url('/') }}" class=" text-white navbar-brand flex vcenter" href="#"><img
                        data-aos="fade-right" class="logo" src="images/logos/logosh.svg" alt="" /></a>

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
                        <li><a class="fade-page" href="{{ url('/about') }}">About</a>
                        </li>
                        <li><a class="fade-page" href="page_plans.html">Plans</a>
                        </li>
                        <li><a class="fade-page" href="page_blog.html">Blog</a>
                        </li>

                        <li><a class="fade-page" href="page_Article.html"> Article</a>
                        </li>

                        <li><a class="fade-page" href="{{ url('/contact') }}"> Contact</a>
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
                <a href="{{ url('/packages') }}" data-aos="fade-left" data-aos-delay="400" class="btn btn-dark btn-round">
                    View Packages
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