@extends('layouts.pages')

@section('page-title-block')
    <div class="container">
        <div class="header-wrap">
            <h2 class="header-title" data-aos="fade-up" data-aos-delay="500">Contact Us</h2>
        </div>
    </div>
@endsection

@section('content')
    <!-- =========================== section contact -->
    <section class="section is-sm section-contact section-grey">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-6">
                    <div class="section-head">
                        <h2 class="section-title text-center ">Get In Touch</h2>
                        <p class="section-desc mb-0 text-center">
                            If you have specific questions, want to discuss your project
                            before commiting to a plan or just want to say hello, please get
                            in touch via the form below.
                        </p>
                    </div>
                    <form class="contact-form">
                        {{--<div class="form-group">--}}
                            {{--<label>How can I help you?</label>--}}
                            {{--<select required="" name="service-requested" class="form-control has-style1 " id="service">--}}
                                {{--<option value="">Select</option>--}}
                                {{--<option value="Logo Design">Logo Design</option>--}}
                                {{--<option value="Sound Branding">Sound Branding</option>--}}
                                {{--<option value="Front-End Development">Front-End Development</option>--}}
                                {{--<option value="Marketing Digital">Marketing Digital</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <label>Name</label>
                            <input name="fullname" placeholder="Full Name " class="form-control has-style1" id="fullname"
                                   type="text">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" placeholder="example@hello.com" class="form-control has-style1" id="email"
                                   type="text">
                        </div>
                        <label>Your Enquiry </label>
                        <textarea name="textarea" class="textarea has-style1" placeholder="How can we help you today?"></textarea>
                        <div class="form-group">
                            <button class="btn btn-primary btn-round">
                                <span> Submit → </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
