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
                        <p class="contact-item-info">+44 7380 308542</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact-item">
                        <h6>Email Adress</h6>
                        <p class="contact-item-info">info@shwartzcode.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact-item">
                        <h6>Local Adress</h6>
                        <p class="contact-item-info">Ukraine, Kiev, Saperno-Slobidska, 22</p>
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
                        <h1 class="text-white">Schwartzcode</h1>
                    </div>
                    <p>Your Digital Specialists</p>
                    <p><img src="images/icons/master_f_darkbg.png" style="width: 60%; padding-top: 1em;"></p>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <h6 class="list-title">Company</h6>
                <ul class="list-items">
                    <li> <a href="{{ url('/about') }}">About</a> </li>
                    {{--<li> <a href="#">Our customers</a> </li>--}}
                    <li> <a href="{{ url('/contact') }}">Contact us</a> </li>
{{--                    <li> <a href="{{ url('/company-details') }}">Company's details</a> </li>--}}
                </ul>
            </div>
            <div class="col-lg-2">
                <h6 class="list-title">Legal</h6>
                <ul class="list-items">
                    <li> <a href="{{ url('/terms-and-conditions') }}">Terms</a> </li>
                    <li> <a href="{{url('/service-and-refund')}}">Service & Refund </a> </li>
                    {{--<li> <a href="#">Cookies</a> </li>--}}
                </ul>
            </div>
        </div>
    </div>
    <p class="copyright text-center text-copyright"> © Schwartzcode 2020</p>
</div>