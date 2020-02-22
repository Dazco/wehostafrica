@extends('layouts.website')
@section('title')
    <title>
        WehostAfrica.com - Best Web Hosting Provider in Africa
    </title>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{url('vendors/owl-carousel/owl.carousel.min.css')}}">
    <style media="screen">
        body {
            background: url('images/bg.jpg') no-repeat fixed;
            background-size: 100% 100%;
        }

        .dsec {
            border: 1px solid rgba(0, 0, 0, 0.1);
            -webkit-border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 1.5rem;
            -webkit-border-radius: 1.5rem;
            transition: border .3s,;
            background: white;
        }

        .dsec h3 {
            font-size: 28px;
            font-weight: 700;
        }

        .dsec h2 {
            font-size: 25px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .dsec:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
@section('part-header')
    <!-- search domain -->
    <section class="container-fluid bg-primary py-5">
        <div class="container px-0 py-3 text-center wow fadeIn">
            <h2 class="hh2"><strong class="text-white">Find your <span class="wow bounceInUp"
                                                                       data-wow-delay="1s"
                                                                       data-wow-iteration="2">Domain</span> Name
                    Here</strong></h2>
        </div>
        <!--  -->
        <div class="container px-0 py-3 text-center">
            <form class="text-light" action="" method="post">
                <div class="row">
                    <div class="col-md-9 form-group">
                        <input type="text" name="name" value="" class="form-control form-control-lg border-0 py-2"
                               placeholder="Enter your desired domain name">
                    </div>
                    <!--  -->
                    <div class="col-md-3 form-group">
                        <button class="btn btn-bg text-dark btn-lg btn-block font-weight-bold">Search Domain
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- hosting  -->
    <section class="container-fluid bg-white1 py-5" id="head_host">
        <div class="container px-0 py-4 text-center wow fadeIn">
            <h2 class="hh2"><strong class="text-primary">Hosting For Every Website</strong></h2>
            <h5 class="hh5">From small business to enterprise, we've got you covered!</h5>
        </div>
        <!--  -->
        <div class="container px-0 py-5 text-center">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <section class="container-fluid py-3 host_sec w3-section wow fadeIn">
                        <h4>Shared Hosting</h4>
                        <p>
                            Cost Effective <br>
                            99% Server up-time <br>
                            Easy to Setup <br>
                        </p>
                        <h4>
                            <a href="{{route('website.share')}}" class="btn btn-bg">Get Started</a>
                        </h4>
                    </section>
                </div>
                <!--  -->
                <div class="col-md-3 col-sm-6">
                    <section class="container-fluid py-3 host_sec w3-section wow fadeIn" data-wow-delay="1s">
                        <h4>Reseller Hosting</h4>
                        <p>
                            Full Management Tools <br>
                            No hidden charge <br>
                            Pay as You go <br>
                        </p>
                        <h4>
                            <a href="{{route('website.resell')}}" class="btn btn-bg">Get Started</a>
                        </h4>
                    </section>
                </div>
                <!--  -->
                <div class="col-md-3 col-sm-6">
                    <section class="container-fluid py-3 host_sec w3-section wow fadeIn" data-wow-delay="2s">
                        <h4>Dedicated Servers</h4>
                        <p>
                            Total Control <br>
                            Full Management Tools <br>
                            The Ultimate in Performance <br>
                        </p>
                        <h4>
                            <a href="{{route('website.dedicate')}}" class="btn btn-bg">Get Started</a>
                        </h4>
                    </section>
                </div>
                <!--  -->
                <div class="col-md-3 col-sm-6">
                    <section class="container-fluid  py-3 host_sec w3-section wow fadeIn" data-wow-delay="3s">
                        <h4>VPS Hosting</h4>
                        <p>
                            Dedicated Control <br>
                            Full Root Access <br>
                            Scalable Resources
                        </p>
                        <h4>
                            <a href="{{route('website.vps')}}" class="btn btn-bg">Get Started</a>
                        </h4>
                    </section>
                </div>
                <!--  -->
            </div>
        </div>
    </section>
    <!-- notes -->
    <div class="container wow fadeIn py-5" id="head_notes">
        <h1 class="hh2 text-primary pt-2 font-weight-bolder wow fadeIn" data-wow-delay="1s">Africa's Best Web
            Hosting Provider</h1>
        <h6 class="text-primary wow fadeIn" data-wow-delay="2s">We provide different Web hosting spaces according to
            your requirements.</h6>
        <div class="container-fluid py-4 text-secondary wow fadeInLeft" data-wow-delay="2s">
            <p class="w3-large"><i class="fas fa-caret-right text-primary"></i>
                24/7, technical support for Web hosting.
            </p>
            <p class="w3-large"><i class="fas fa-caret-right text-warning"></i>
                99.9% server up time.
            </p>
            <p class="w3-large"><i class="fas fa-caret-right text-primary"></i>
                Shared hosting.
            </p>
            <p class="w3-large"><i class="fas fa-caret-right text-warning"></i>
                VPS hosting.
            </p>
            <p class="w3-large"><i class="fas fa-caret-right text-primary"></i>
                Dedicated hosting.
            </p>
            <p class="w3-large"><i class="fas fa-caret-right text-warning"></i>
                Highest Bandwidth.
            </p>
            <p class="w3-large"><i class="fas fa-caret-right text-primary"></i>
                Unlimited email accounts.
            </p>
        </div>

        <!-- <br>
        <a href="#" class="btn-wehost btn-bg text-dark d-inline-block rounded wow fadeIn" data-wow-delay="4s">Get Started Now</a> -->
    </div>
@endsection

@section('content')
    <!-- main content -->
    <main>

        <!-- domains -->
        <section class="container-fluid py-5 bg-light">
            <div class="container px-0 py-4 text-center wow fadeIn">
                <h2 class="hh2"><strong class="">Our Domain Prices</strong></h2>
                <h5 class="hh5 text-dark">Best Offers.</h5>
            </div>
            <!--  -->
            <div class="container px-0 pt-3 pb-5 text-center">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <section class="container-fluid w3-section dsec pt-5 pb-2 text-center">
                            <h3><b class="text-primary">.com</b></h3>
                            <h6>
                                <small class="text-secondary">Starting From</small>
                            </h6>
                            <h2><b class="text-dark">&#8358;0.00</b></h2>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 50px;">
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <section class="container-fluid w3-section dsec pt-5 pb-2 text-center">
                            <h3><b class="text-primary">.edu</b></h3>
                            <h6>
                                <small class="text-secondary">Starting From</small>
                            </h6>
                            <h2><b class="text-dark">&#8358;0.00</b></h2>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 50px;">
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <section class="container-fluid w3-section dsec pt-5 pb-2 text-center">
                            <h3><b class="text-primary">.org</b></h3>
                            <h6>
                                <small class="text-secondary">Starting From</small>
                            </h6>
                            <h2><b class="text-dark">&#8358;4,500.00</b></h2>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 50px;">
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <section class="container-fluid w3-section dsec pt-5 pb-2 text-center">
                            <h3><b class="text-primary">.net</b></h3>
                            <h6>
                                <small class="text-secondary">Starting From</small>
                            </h6>
                            <h2><b class="text-dark">&#8358;4,800.00</b></h2>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 50px;">
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <section class="container-fluid w3-section dsec pt-5 pb-2 text-center">
                            <h3><b class="text-primary">.ng</b></h3>
                            <h6>
                                <small class="text-secondary">Starting From</small>
                            </h6>
                            <h2><b class="text-dark">&#8358;9,999.00</b></h2>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 50px;">
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <section class="container-fluid w3-section dsec pt-5 pb-2 text-center">
                            <h3><b class="text-primary">.biz</b></h3>
                            <h6>
                                <small class="text-secondary">Starting From</small>
                            </h6>
                            <h2><b class="text-dark">&#8358;3,800.00</b></h2>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 50px;">
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- why -->
        <section class="container-fluid py-5 bg-white">
            <div class="container px-0 py-5 text-center wow fadeIn">
                <h2 class="hh2"><strong class="text-primary">Why Choose Us as Your Hosting Provider?</strong></h2>
                <h5 class="hh5">Honestly, why not?</h5>
            </div>
            <!--  -->
            <div class="container px-0 pt-3 pb-5 text-center">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <section class="container-fluid w3-section  why_sec">
                            <h3><strong class="fas fa-shield-alt fa-3x"></strong></h3>
                            <h4><strong>Secured Server</strong></h4>
                            <p>
                                Our server is always secured and hack free.
                                Trusted by clients all over the world..
                            </p>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6">
                        <section class="container-fluid w3-section  why_sec">
                            <h3><strong class="fas fa-users fa-3x"></strong></h3>
                            <h4><strong>User Friendly</strong></h4>
                            <p>
                                Easy to use and configure and supported
                                by all platforms - Wordpress, Joomla & more.
                            </p>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6">
                        <section class="container-fluid w3-section  why_sec">
                            <h3><strong class="fas fa-phone fa-3x"></strong></h3>
                            <h4><strong>Customer Support</strong></h4>
                            <p>
                                We are always at your service and we
                                are ready to respond to you. Get in touch
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- get -->
        <section class="container-fluid bg-primary pt-3">
            <div class="container px-0">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="container px-0 py-4 text-light wow fadeIn">
                            <h2 class="hh2"><strong class="">Get Your Dream Host From Us</strong></h2>
                            <h5 class="hh5">We offer nothing but the Best..</h5>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-sm-4 pt-sm-4">
                        <div class="container-fluid px-0 py-4 wow fadeIn" data-wow-delay="1s">
                            <h4><a href="#head_host" class="btn btn-bg btn-block font-weight-bold">Get Started</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Testimonials Area =================-->

        <!--================End Testimonials Area =================-->
        <!-- testimonials -->
        <section class="container-fluid py-5 bg-white">
            <div class="container px-0 py-4 text-center wow fadeIn">
                <h2 class="hh2"><strong class="text-primary">Testimonials</strong></h2>
                <h5 class="hh5">We give awesome service, See how customers love us.</h5>
            </div>
            <!--  -->
            <div class="container px-0 py-4">
                <div class="row">
                    <div class="col-sm-8">
                        <section class="testimonials_area">
            <div class="container">
                <div class="testi_slider owl-carousel">
                    <div class="item">
                        <div class="testi_item">
                            <div class="media">
                                <div class="media-body">
                                    <p>“One thing that stands out is wehostafrica’s culture of accountability. The
                                        people
                                        we deal with in operations are professionals.”</p>
                                    <h4>Adewale Micheal</h4>
                                    <h5>CEO at Google</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <div class="media">
                                <div class="media-body">
                                    <p>“Our explosive worldwide growth continues–with wehostafrica’s superb
                                        infrastructure
                                        support, we are taking it to the next level.”</p>
                                    <h4>Njoku David</h4>
                                    <h5>CEO at Google</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                    </div>
                    <!--  -->
                    <div class="col-sm-4">
                        <section class="container-fluid px-0 text-center w3-hide-small">
                            <img src="{{url('images/feedback.png')}}" alt="FeedBack" class="img-fluid wow fadeIn"/>
                        </section>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection

@section('scripts')
    <script src="{{url('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
@endsection
