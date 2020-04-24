@extends('layouts.pages')

@section('page-title-block')
    <div class="container">
        <div class="header-wrap">
            <h2 class="header-title" data-aos="fade-up" data-aos-delay="500">About Us</h2>
        </div>
    </div>
@endsection

@section('content')
    <section class="section is-lg">
        <div class="container">
            <div class="row flex vcenter">

                <div class="col-lg-6 order-1  order-lg-0 ">
                    <div class="section-head mb-0">
                        <h2 class="section-title ">Your Digital Specialists</h2>
                        <p class="section-desc">
                            Hello, we’re Schwartzcode. A team of digital specialists with
                            a passion for our clients’ success.
                        </p>
                        <p class="section-desc">
                            We build web-based solutions to help our clients automate
                            their business processes, custom content management systems,
                            responsive websites and more.
                        </p>
                        <p class="section-desc">
                            We offer consultancy services across the digital spectrum,
                            for a range of private and corporate clients. Book a package
                            today and let us help make your next digital project a success.
                        </p>
                        <a href="{{url('/packages')}}" class="btn btn-primary btn-round">See our packages</a>
                    </div>
                </div>
                <div class="col-lg-6 order-0  order-lg-1  mb-sm-20">
                    <img class="screen" src="images/bg/illustration2.png" alt="">
                </div>


            </div>


        </div>
    </section>
    <!-- =========================== section feautures-->
    <section class="section">
        <div class="container">
            <div class="boxes">
                <div class="row min-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-dark has-left-icon">
                            <div class="box-particles2"></div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-icon">
                                        <ion-icon name="code-download-outline"></ion-icon>                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title">Website Development and Design</h3>
                                    <p class="box-desc">
                                        We design intuitive websites and take care of complex integrations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-dark has-left-icon">
                            <div class="box-particles2"></div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-icon">
                                        <ion-icon name="bookmarks-outline"></ion-icon>                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title">Communication<br /> Systems</h3>
                                    <p class="box-desc">
                                        We build intercom and communication systems for SME’s
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-dark has-left-icon">
                            <div class="box-particles2"></div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-icon">
                                        <ion-icon name="rocket-outline"></ion-icon>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title">Process Mapping and Automation</h3>
                                    <p class="box-desc">
                                        We specialise in automating your processes to optimise your business
                                    </p>
                                </div>
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
    <!-- =========================== section team-->
{{--    @include('pages.sections.team')--}}
@endsection
