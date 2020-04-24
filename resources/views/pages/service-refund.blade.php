@extends('layouts.pages')

@section('page-title-block')
    <div class="container">
        <div class="header-wrap">
            <h2 class="header-title" data-aos="fade-up" data-aos-delay="500">Service & Refund</h2>
        </div>
    </div>
@endsection

@section('content')
    <section class="section sm section-blog2 mt-6">
        <div class="container">
            {{--<img class="img-post" src="images/bg/header-2.png" alt="">--}}
            <div class="content-post">
                <h5>Service Policy</h5>
                <p class=" color-primary ">
                    All products for sale on this website are classed as Consultancy Services.
                    When you book a consultancy package with us, we will agree on a consultancy
                    program with you, which you will need to approve before we begin the consultancy period.
                    You will need to approve the consultancy program in writing.
                </p>
                <h5>Refund Policy</h5>
                <p class=" color-primary ">
                    Consultancy services sold on this website are not eligible for refund.
                    In the case that you are not satisfied with the service provided,
                    please contact info@schwartzcode.com and we will seek a resolution to your
                    enquiry. We do offer refunds in very specific circumstances, such as in the
                    case of our failure to provide you with the service you have paid for.
                </p>

            </div>
        </div>
    </section>
@endsection