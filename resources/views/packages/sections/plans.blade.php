@section('page-title-block')
    <div class="container">
        <div class="header-wrap">
            <h2 class="header-title" data-aos="fade-up" data-aos-delay="500">Pricing: Packages</h2>
            <div class="space-4">

            </div>
        </div>
    </div>
@endsection;

@section('content')
<!-- =========================== section Plans-->
<section class="section section-pricing pricing-in-page">
    <img class="section-particle  top-0" src="../images/others/particle.svg" alt="">
    <div class="container">
        <div class="row flex vcenter min-30 ">
            <!-- ====== plan item -->
            <div class="col-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                <div class="plan-item has-style1 in-left">
                    <div class="plan-head">
                        <h4 class="plan-title"> One to One </h4>
                        <div class="flex center">
                            <div class="plan-price">£299</div>
                            <p class="font-weight-bold">For basic projects</p>
                        </div>

                    </div>
                    <div class="plan-body">
                        <ul class="list-items">
                            <li class="item">
                                <img src="images/icons/check.svg" alt=""> One To One Consultancy
                            </li>
                            <li class="item">
                                <img src="images/icons/check.svg" alt=""> Expert Advice
                            </li>
                            <li class="item">
                                <img src="images/icons/check.svg" alt=""> Bespoke Content
                            </li>
                            <li class="item ">
                                <img src="images/icons/check.svg" alt=""> Training Sessions
                            </li>
                            <li class="item ">
                                <img src="images/icons/check.svg" alt=""> Detailed Information
                            </li>
                            <li class="item">
                                <img src="images/icons/check.svg" alt=""> Tailored to your needs
                            </li>
                            <br />
                        </ul>
                        <div class="flex center mt-1">
                            <a href="{{url('/checkout/one-to-one')}}" class="btn btn-dark btn-block"> Get Started </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ====== plan item -->
            <div class="col-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                <div class="plan-item has-style1 in-left gold-plan ">
                    <div class="best-choose">
                        Best Choose
                    </div>
                    <div class="plan-head">
                        <h4 class="plan-title"> Agency Package </h4>
                        <div class="flex center">
                            <div class="plan-price is-primary">£1,299</div>
                            <p class="font-weight-bold">For complex projects</p>
                        </div>

                    </div>
                    <div class="plan-body">
                        <ul class="list-items">
                            <li class="item">
                                <img src="images/icons/check.svg" alt="">  Cross-team consultancy
                            </li>
                            <li class="item">
                                <img src="images/icons/check.svg" alt="">  Structured training programs
                            </li>
                            <li class="item">
                                <img src="images/icons/check.svg" alt="">  Detailed Project Plans
                            </li>
                            <li class="item ">
                                <img src="images/icons/check.svg" alt=""> Guided Support
                            </li>
                            <li class="item ">
                                <img src="images/icons/check.svg" alt=""> Tailored to your needs
                            </li>
                            <br /><br /><br />


                        </ul>
                        <div class="flex center mt-1">
                            <a href="{{url('/checkout/agency-package')}}" class="btn btn-primary btn-block"> Get Started </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ====== plan item -->
            <div class="col-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                <div class="plan-item has-style1 in-left">

                    <div class="plan-head">
                        <h4 class="plan-title"> Bespoke Packages </h4>
                        <div class="flex center">
                            <div class="plan-price">£POA</div>
                            <p class="font-weight-bold">For enterprise clients</p>

                        </div>

                    </div>
                    <div class="plan-body">
                        <ul class="list-items">
                            <li class="item">
                                <img src="images/icons/check.svg" alt="">  Customisable package
                            </li>
                            <li class="item">
                                <img src="images/icons/check.svg" alt="">  Integrated Consultancy
                            </li>
                            <li class="item">
                                <img src="images/icons/check.svg" alt="">  Fixed Project Milestones
                            </li>
                            <li class="item ">
                                <img src="images/icons/check.svg" alt=""> Ongoing training and support
                            </li>
                            <li class="item ">
                                <img src="images/icons/check.svg" alt=""> Tailored to your needs
                            </li>
                            <br /><br /><br />

                        </ul>
                        <div class="flex center mt-1">
                            <a href="" class="btn btn-dark btn-block"> Get Started </a>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
<section class="section is-lg">
    <div class="container">
        <div class="row flex vcenter"></div>
    </div>
</section>
@endsection