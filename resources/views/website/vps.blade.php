@extends('layouts.website')
@section('title')
    VPS Hosting | WehostAfrica.com - Best Web Hosting Provider in Africa
@endsection
@section('styles')
    body {
    background: url('/images/bg.jpg') no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    }

    .list_sec {
    box-shadow: 0 1px 1px 1px	rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 1px 1px 1px	rgba(0,0,0,0.1);
    text-align: center;
    }
    .list_sec h4 {
    font-size: 18px;
    padding-top: 15px;
    }
    .list_sec h5 {
    margin: 0;
    font-size: 22px;
    color: #212121;
    }
    .list_sec h6 {
    color: #777;
    margin: 0;
    }

    .list_sec:hover, .def {
    box-shadow: 1px 3px 3px 1px	rgba(0,0,0,0.1);
    -webkit-box-shadow: 1px 3px 3px 1px	rgba(0,0,0,0.1);
    border-top: 5px solid #007bff  ;
    transition: all 100ms ease;
    }

@endsection
@section('part-header')
    <div class="container wow fadeIn py-5" id="head_notez">
        <h1 class="hh2 text-primary pt-2 font-weight-bold text-shadow wow fadeIn" data-wow-delay="1s">VPS Hosting</h1>
        <h6 class="wow fadeIn" data-wow-delay="1s">We offer VPS Hosting to our clients, get a free package or domain when you host with our VPS</h6>

        <!-- <br>
        <a href="#" class="btn-wehost btn-bg text-dark d-inline-block rounded wow fadeIn" data-wow-delay="4s">Get Started Now</a> -->
    </div>
@endsection
@section('content')
    <!-- main content -->
    <main>
        <section class="container-fluid bg-primary text-white text-center py-5">
            <div class="container py-2 wow fadeIn" data-wow-delay="1s">
                <h3 class="hh2"><strong>Choose a Plan</strong></h3>
                <h6>Pick a Plan that Best Fits Your Needs.</h6>
            </div>
        </section>
        <!--  -->
        <!-- list -->
        <section class="container-fluid bg-white py-5">
            <div class="container px-0 py-3">
                <div class="row">
                    <div class="col-md-3 col-sm-6">

                    </div>
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="1s">
                            <h4 class="text-primary"><b>Starter</b></h4>
                            <h5><b>$240.88</b></h5>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    <strong>SPACE :</strong> 2GB
                                </p>
                                <p class="m-0 my-1">
                                    <strong>SSD DISK :</strong> 40gb Raid 10
                                </p>
                                <p class="m-0 my-1">
                                    <strong>FREE DOMAIN :</strong> 1
                                </p>
                                <p class="m-0 my-1">
                                    <strong>SUPPORT :</strong> 24/7
                                </p>
                                <p class="m-0 my-1">
                                    <strong>BANDWIDTH :</strong> 1000gb
                                </p>
                                <p class="m-0 my-1">
                                    <strong>CPU CORES :</strong> 2
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="javascript:void()" class="btn btn-outline-warning"><b>Get Started Now</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="1s">
                            <h4 class="text-primary"><b>Best</b></h4>
                            <h5><b>$300.88</b></h5>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    <strong>SPACE :</strong> 10GB
                                </p>
                                <p class="m-0 my-1">
                                    <strong>SSD DISK :</strong> 120gb Raid 10
                                </p>
                                <p class="m-0 my-1">
                                    <strong>FREE DOMAIN :</strong> 1
                                </p>
                                <p class="m-0 my-1">
                                    <strong>SUPPORT :</strong> 24/7
                                </p>
                                <p class="m-0 my-1">
                                    <strong>BANDWIDTH :</strong> 3000gb
                                </p>
                                <p class="m-0 my-1">
                                    <strong>CPU CORES :</strong> 4
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="javascript:void()" class="btn btn-outline-warning"><b>Get Started Now</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">

                    </div>
                    <!--  -->
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
                                                What is VPS Hosting?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques1" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            A virtual private server (VPS) is a virtual machine sold as a service by an internet hosting company which runs its own copy of an operating system (OS) and customers may have super-user level access to that OS and install almost any software that runs on the OS.
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
                                                How soon will the service be ready after i make payment?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques2" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            The Service will be ready as soon as your payment is confirmed.
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
