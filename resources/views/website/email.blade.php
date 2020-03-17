@extends('layouts.website')
@section('title')
    <title>
        Cheap Email Hosting | WehostAfrica.com - Best Web Hosting Provider in Africa
    </title>
@endsection
@section('styles')
    <style media="screen">
        body {
            background: url('images/bg.jpg') no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .nav-link.active {
            color: white !important;
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
        <h1 class="hh2 text-primary pt-2 font-weight-bold text-shadow wow fadeIn">Email Hosting
            Services</h1>
        <h6 class="wow fadeIn" data-wow-delay=".5s">We offer customizable emails at an affordable price</h6>

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
                <nav class="nav nav-pills nav-justified" id="nav-tab">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-business"
                       role="tab"
                       aria-controls="nav-business" aria-selected="true">Business Emails</a>
                    <a class="nav-item nav-link" id="nav-enterprise-tab" data-toggle="tab" href="#nav-enterprise"
                       role="tab"
                       aria-controls="nav-enterprise" aria-selected="false">Enterprise Emails</a>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-business" role="tabpanel"
                         aria-labelledby="nav-business-tab">
                        <!-- list -->
                        <section class="container-fluid bg-white py-5">
                            <div class="container px-0 py-3">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <section class="container-fluid py-3 list_sec def w3-section wow fadeIn">
                                            <h4 class="text-primary"><b>BE LEVEL 1</b></h4>
                                            <h5><b>&#8358; 500.00 </b></h5>
                                            <h6>
                                                <small>Per Email Monthly</small>
                                            </h6>
                                            <hr class="border-warning d-inline-block p-0 text-center"
                                                style="width: 50px;">
                                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                                <p class="m-0 my-1">
                                                    Free dotNG domain
                                                </p>
                                                <p class="m-0 my-1">
                                                    Starting from 1 Email
                                                </p>
                                                <p class="m-0 my-1">
                                                    Up to 5 Email Accounts
                                                </p>
                                                <p class="m-0 my-1">
                                                    5Gb Storage per Account
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
                                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn"
                                                 data-wow-delay="1s">
                                            <h4 class="text-primary"><b>BE LEVEL 2</b></h4>
                                            <h5><b>&#8358;480.00</b></h5>
                                            <h6>
                                                <small>Per Email Monthly</small>
                                            </h6>
                                            <hr class="border-warning d-inline-block p-0 text-center"
                                                style="width: 50px;">
                                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                                <p class="m-0 my-1">
                                                    Free dotNG domain
                                                </p>
                                                <p class="m-0 my-1">
                                                    Starting from 6 Email
                                                </p>
                                                <p class="m-0 my-1">
                                                    Up to 25 Email Accounts
                                                </p>
                                                <p class="m-0 my-1">
                                                    5Gb Storage per Account
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
                                            <h4 class="text-primary"><b>BE LEVEL 3</b></h4>
                                            <h5><b>&#8358;450</b></h5>
                                            <h6>
                                                <small>Per Email Monthly</small>
                                            </h6>
                                            <hr class="border-warning d-inline-block p-0 text-center"
                                                style="width: 50px;">
                                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                                <p class="m-0 my-1">
                                                    Free dotNG domain
                                                </p>
                                                <p class="m-0 my-1">
                                                    Starting from 26 Emails
                                                </p>
                                                <p class="m-0 my-1">
                                                    Up to 49 Email Accounts
                                                </p>
                                                <p class="m-0 my-1">
                                                    5Gb Storage per Account
                                                </p>
                                            </div>
                                            <div class="container-fluid w3-section">
                                                <a href="http://www.wehostafrica.org/clients/cart.php?a=add&pid=1"
                                                   class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                                            </div>
                                        </section>
                                    </div>
                                    <!--  -->
                                    <div class="col-md-3 col-sm-6">
                                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn"
                                                 data-wow-delay="2s">
                                            <h4 class="text-primary"><b>BE LEVEL 4</b></h4>
                                            <h5><b>&#8358;420</b></h5>
                                            <h6>
                                                <small>Per Email Monthly</small>
                                            </h6>
                                            <hr class="border-warning d-inline-block p-0 text-center"
                                                style="width: 50px;">
                                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                                <p class="m-0 my-1">
                                                    Free dotNG domain
                                                </p>
                                                <p class="m-0 my-1">
                                                    Starting from 50 Email
                                                </p>
                                                <p class="m-0 my-1">
                                                    Up to 200,000 Email Accounts
                                                </p>
                                                <p class="m-0 my-1">
                                                    5Gb Storage per Account
                                                </p>
                                            </div>
                                            <div class="container-fluid w3-section">
                                                <a href="http://www.wehostafrica.org/clients/cart.php?a=add&pid=5"
                                                   class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                                            </div>
                                        </section>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="nav-enterprise" role="tabpanel" aria-labelledby="nav-enterprise-tab">
                        ...
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
                                    <strong class="fas fa-envelope fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Personalised Emails</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-desktop fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Works with any desktop email client</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-mobile fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Compatible with mobile email apps</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-envelope fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Anti-spam protection</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-lock fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Email Encryption</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-database fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Abundant Storage</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-clock fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Guaranteed 99.9% Network Uptime</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fab fa-cpanel fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Administrative Area</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-clock fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>24/7 customer support</h6>
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
