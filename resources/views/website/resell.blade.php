@extends('layouts.website')

@section('title')
    <title>
        Reseller Hosting | WehostAfrica.com - Best Web Hosting Provider in Africa
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
        <h1 class="hh2 text-primary pt-2 font-weight-bold text-shadow wow fadeIn">Reseller Hosting
            Services</h1>
        <h6 class="wow fadeIn" data-wow-delay=".5s">Join over 200 resellers using our platform, Pay for what you
            actually
            use. No hidden charge!</h6>

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
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn def">
                            <h4 class="text-primary"><b>Reseller 1</b></h4>
                            <h5><b>$20 / Year</b></h5>
                            <h6>
                                <small>Start as a reseller</small>
                            </h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    20 GB Disk space
                                </p>
                                <p class="m-0 my-1">
                                    1000 GB Bandwith
                                </p>
                                <p class="m-0 my-1">
                                    25 Resold Accounts
                                </p>
                                <p class="m-0 my-1">
                                    Free cpanel/WHM
                                </p>
                                <p class="m-0 my-1">
                                    24/7 Support
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="https://www.wehostafrica.com/clients/cart.php?a=add&pid=6"
                                   class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="1s">
                            <h4 class="text-primary"><b>Reseller 2</b></h4>
                            <h5><b>$30 / Year</b></h5>
                            <h6>
                                <small>More space & unlimited</small>
                            </h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    75 GB Disk space
                                </p>
                                <p class="m-0 my-1">
                                    2000 GB Bandwith
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Resold Accounts
                                </p>
                                <p class="m-0 my-1">
                                    Free cpanel/WHM
                                </p>
                                <p class="m-0 my-1">
                                    24/7 Support
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="https://www.wehostafrica.org/clients/cart.php?a=add&pid=7"
                                   class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec def w3-section wow fadeIn">
                            <h4 class="text-primary"><b>Reseller 3</b></h4>
                            <h5><b>$40 / Year</b></h5>
                            <h6>
                                <small>Great Service and Unlimited</small>
                            </h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    150 GB Disk space
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Bandwith
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Resold Accounts
                                </p>
                                <p class="m-0 my-1">
                                    Free cpanel/WHM
                                </p>
                                <p class="m-0 my-1">
                                    24/7 Support
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="https://www.wehostafrica.com/clients/cart.php?a=add&pid=8"
                                   class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="2s">
                            <h4 class="text-primary"><b>Reseller 4</b></h4>
                            <h5><b>$50 / Year</b></h5>
                            <h6>
                                <small>Enjoy Unlimited Bandwidth</small>
                            </h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    300 GB Disk space
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Bandwith
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Accounts
                                </p>
                                <p class="m-0 my-1">
                                    Free cpanel/WHM
                                </p>
                                <p class="m-0 my-1">
                                    24/7 Support
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="https://www.wehostafrica.com/clients/cart.php?a=add&pid=9"
                                   class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
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
                                    <strong class="fas fa-database fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>MySQL Databases</h6>
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
                                    <h6>Full Control Over Hosting Accounts</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn" data-wow-delay="2s">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-paper-plane fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>FTP Accounts</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn" data-wow-delay="2s">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fab fa-wordpress fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>Automated Installation for Wordpress, Joomla, SMF etc</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6 w3-section">
                        <section class="container-fluid bg-light py-2 wow fadeIn" data-wow-delay="2s">
                            <div class="row">
                                <div class="col-3 text-center py-1">
                                    <strong class="fas fa-external-link-alt fa-3x"></strong>
                                </div>
                                <div class="col-9 py-1">
                                    <h6>CGI, Ruby(RoR) Extensions, Perl Extensions, CRON Jobs</h6>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </section>
        <!--  -->
        <section class="container-fluid py-5 bg-white1">
            <div class="container px-0 py-2">
                <div class="row">
                    <div class="col-md-6">
                        <h4><strong>Be part of WEHOSTAFRICA</strong></h4>
                        <p class="pt-3 w3-medium">
                            All of our web hosting services are backed up by our pioneering Hosting Guarantee. This
                            guarantee is a mark of the high quality that you expect of WEHOSTAFRICA and underlines our
                            commitment to providing excellence in our hosting division.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{url('images/Resellericon.png')}}" alt="ResellerIcon" class="img-fluid">
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
                                <a data-toggle="collapse" href="#ques1" aria-expanded="true"
                                   aria-controls="collapseOne">
                                    <div class="card py-2">
                                        <div class="card-header bg-white border-0" role="tab" id="headingOne">
                                            <h5 class="mb-0 w3-medium">
                                                What is Reseller Hosting?
                                                <span class="float-right"><i class="fa fa-caret-down"></i></span>
                                            </h5>
                                        </div>

                                        <div id="ques1" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                Reseller hosting is a platform that allows you to sell hosting plans to
                                                other people. You can create your own hosting packages and sell to
                                                people at
                                                your own price.
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </section>
                        </div>
                        <!-- ques2 -->
                        <div class="col-md-6">
                            <section class="container-fluid px-0 w3-section">
                                <a data-toggle="collapse" href="#ques2" aria-expanded="true"
                                   aria-controls="collapseOne">
                                    <div class="card py-2">
                                        <div class="card-header bg-white border-0" role="tab" id="headingOne">
                                            <h5 class="mb-0 w3-medium">
                                                How soon will the service be ready after i make payment?
                                                <span class="float-right"><i class="fa fa-caret-down"></i></span>
                                            </h5>
                                        </div>

                                        <div id="ques2" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                The Service will be ready as soon as your payment is confirmed.
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
