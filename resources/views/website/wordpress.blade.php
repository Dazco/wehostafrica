@extends('layouts.website')
@section('title')
    <title>
        Cheap Wordpress Hosting | WehostAfrica.com - Best Web Hosting Provider in Africa
    </title>
@endsection
@section('styles')
    <style media="screen">
        body {
            background: url('images/bg.jpg') no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .list_sec {
            box-shadow: 0 1px 1px 1px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 1px 1px 1px rgba(0, 0, 0, 0.1);
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
            box-shadow: 1px 3px 3px 1px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 1px 3px 3px 1px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #007bff;
            transition: all 100ms ease;
        }
    </style>
@endsection
@section('part-header')
    <div class="container wow fadeIn py-5" id="head_notez">
        <h1 class="hh2 text-primary pt-2 font-weight-bold text-shadow wow fadeIn">Wordpress Hosting
            Services</h1>
        <h6 class="wow fadeIn" data-wow-delay=".5s">We offer reliable wordpress hosting at an affordable price, Get this
            and
            enjoy with other clients</h6>

        <!-- <br>
        <a href="#" class="btn-wehost btn-bg text-dark d-inline-block rounded wow fadeIn" data-wow-delay="4s">Get Started Now</a> -->
    </div>
@endsection
@section('content')
    <main>

        <!--  -->
        <!-- list -->
        <section class="container-fluid bg-white py-5">
            <div class="container px-0 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec def w3-section wow fadeIn">
                            <h4 class="text-primary"><b>BEGINNER</b></h4>
                            <h5><b>&#8358;1,600.00 / Month</b></h5>
                            <h6>
                                <small>Great Value For Money</small>
                            </h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    10GB SSD Storage
                                </p>
                                <p class="m-0 my-1">
                                    100GB Monthly Bandwidth
                                </p>
                                <p class="m-0 my-1">
                                    0 Additional website
                                </p>
                                <p class="m-0 my-1">
                                    Powered by AWS
                                </p>
                                <p class="m-0 my-1">
                                    No added security settings
                                </p>
                                <p class="m-0 my-1">
                                    Free .NG Domain
                                </p>
                                <p class="m-0 my-1">
                                    Free SSL Certificate
                                </p>
                                <p class="m-0 my-1">
                                    Automatic WordPress and Plugin Updates
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="http://www.wehostafrica.org/clients/cart.php?a=add&pid=2"
                                   class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="1s">
                            <h4 class="text-primary"><b>STANDARD</b></h4>
                            <h5><b>&#8358;2,500.00 / Month</b></h5>
                            <h6>
                                <small>Perfect For Your Website</small>
                            </h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    25GB SSD Storage
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Monthly Bandwidth
                                </p>
                                <p class="m-0 my-1">
                                    2 Additional website
                                </p>
                                <p class="m-0 my-1">
                                    Powered by AWS
                                </p>
                                <p class="m-0 my-1">
                                    Added security settings
                                </p>
                                <p class="m-0 my-1">
                                    Free .NG Domain
                                </p>
                                <p class="m-0 my-1">
                                    Free SSL Certificate
                                </p>
                                <p class="m-0 my-1">
                                    Automatic WordPress and Plugin Updates
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="http://www.wehostafrica.org/clients/cart.php?a=add&pid=3"
                                   class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section def wow fadeIn">
                            <h4 class="text-primary"><b>STANDARD PLUS</b></h4>
                            <h5><b>&#8358;4,000.00 / Month</b></h5>
                            <h6>
                                <small>Create Services and Uptime</small>
                            </h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    Unlimited SSD Storage
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Monthly Bandwidth
                                </p>
                                <p class="m-0 my-1">
                                    4 Additional website
                                </p>
                                <p class="m-0 my-1">
                                    Powered by AWS
                                </p>
                                <p class="m-0 my-1">
                                    Added security settings
                                </p>
                                <p class="m-0 my-1">
                                    Free .NG Domain
                                </p>
                                <p class="m-0 my-1">
                                    Free SSL Certificate
                                </p>
                                <p class="m-0 my-1">
                                    Automatic WordPress and Plugin Updates
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="http://www.wehostafrica.org/clients/cart.php?a=add&pid=1"
                                   class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!-- features -->
        <section class="container-fluid bg-white py-2">
            <div class="container py-1 px-0 text-center w3-section">
                <h3 class="text-primary "><strong class="">Other Hosting Features </strong></h3>
                <h6>
                    <small class="text-secondary"> For all Plans</small>
                </h6>
                <hr class="border-warning d-inline-block p-0 text-center" style="width: 100px;">
            </div>
            <div class="container pt-2 pb-5 px-0 w3-section">
                <div class="row">
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fab fa-wordpress fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>WordPress preinstalled</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-server fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Powered by Nginx</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fab fa-aws fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Hosted on AWS</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn" data-wow-delay="2s">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-globe fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Free domain with annual plan</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn" data-wow-delay="2s">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-database fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Unlimited MySQL databases</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn" data-wow-delay="2s">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-long-arrow-alt-left fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Free hosting transfer</h6>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </section>
        <!--  -->
    </main>

@endsection
