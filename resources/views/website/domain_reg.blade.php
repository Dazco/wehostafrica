@extends('layouts.website')
@section('title')
    Register Your Domain | WehostAfrica.com - Best Web Hosting Provider in Africa
    @endsection
@section('styles')
    body {
    background: url('/images/bg.jpg') no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    }
    @endsection
@section('part-header')
    <div class="container wow fadeIn py-5" id="head_notez">
        <h1 class="hh2 text-primary pt-2 font-weight-bold text-shadow wow fadeIn" data-wow-delay="1s">Register a Domain</h1>
        <h6 class="wow fadeIn" data-wow-delay="1s">Get your perfect domain name at an amazing price</h6>
    </div>
    @endsection
@section('content')
    <main>
        <section class="container-fluid bg-primary text-white text-center py-5">
            <div class="container px-0 py-3 text-center">
                <form class="text-light" action="" method="post">
                    <div class="row">
                        <div class="col-md-9 form-group">
                            <input type="text" name="name" value="" class="form-control form-control-lg border-0 py-2" placeholder="Enter your desired domain name">
                        </div>
                        <!--  -->
                        <div class="col-md-3 form-group">
                            <button class="btn btn-bg text-dark btn-lg btn-block font-weight-bold">Search Domain</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--  -->
        <section class="container-fluid py-5 bg-white1">
            <div class="container px-0 py-5">
                <div class="row">
                    <div class="col-md-6 w3-section">
                        <h4><strong>Why you need a domain name</strong></h4>
                        <p class="pt-3 w3-medium">
                            The right domain name is crucial on today's internet. It's the first thing people see when they visit your site, and nothing beats a great first impression.
                        </p> <br>
                        <a href="#head_notez" class="btn btn-xs btn-warning">Get Started</a>
                    </div>
                    <div class="col-md-6 text-center w3-section w3-hide-small">
                        <img src="{{url('/images/reg.png')}}" alt="ResellerIcon" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="container-fluid py-5 bg-light">
            <div class="container px-0 py-4 text-dark text-center w3-section">
                <h3><strong class="hh2">FAQ</strong></h3>
                <h6>Check out some of the frequently asked questions</h6>
            </div>
            <!--  -->
            <div class="container px-0 py-4 w3-section">
                <div id="accordion" role="tablist">
                    <div class="row">
                        <div class="col-md-6">
                            <section class="container-fluid px-0 w3-section">
                                <div class="card">
                                    <div class="card-header bg-white border-0" role="tab" id="headingOne">
                                        <h5 class="mb-0 w3-medium">
                                            <a data-toggle="collapse" href="#ques1" aria-expanded="true" aria-controls="collapseOne">
                                                What is a Domain?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques1" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            A domain is the address of your website. It is what people type in to visit your website
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- ques2 -->
                        <div class="col-md-6">
                            <section class="container-fluid px-0 w3-section">
                                <div class="card">
                                    <div class="card-header bg-white border-0" role="tab" id="headingOne">
                                        <h5 class="mb-0 w3-medium">
                                            <a data-toggle="collapse" href="#ques2" aria-expanded="true" aria-controls="collapseOne">
                                                Is purchasing a Domain a one-time payment?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques2" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <span class="text-danger">No</span>, it is not. You need to continue renewing your domain to continue having access to the domain.
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- ques 3 -->
                        <div class="col-md-6">
                            <section class="container-fluid px-0 w3-section">
                                <div class="card">
                                    <div class="card-header bg-white border-0" role="tab" id="headingOne">
                                        <h5 class="mb-0 w3-medium">
                                            <a data-toggle="collapse" href="#ques3" aria-expanded="true" aria-controls="collapseOne">
                                                How long does a domain name registration last?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques3" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            It lasts for the period it was registered.
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- ques 4 -->
                        <div class="col-md-6">
                            <section class="container-fluid px-0 w3-section">
                                <div class="card">
                                    <div class="card-header bg-white border-0" role="tab" id="headingOne">
                                        <h5 class="mb-0 w3-medium">
                                            <a data-toggle="collapse" href="#ques4" aria-expanded="true" aria-controls="collapseOne">
                                                What do i do if a domain name is not available?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques4" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            You would have to choose a different domain name.
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
