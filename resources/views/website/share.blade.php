@extends('layouts.website')
@section('title')
    Cheap Shared Hosting | WehostAfrica.com - Best Web Hosting Provider in Africa
    @endsection
@section('styles')
    body {
    background: url('images/bg.jpg') no-repeat;
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
        <h1 class="hh2 text-primary pt-2 font-weight-bold text-shadow wow fadeIn" data-wow-delay="1s">Shared Hosting Services</h1>
        <h6 class="wow fadeIn" data-wow-delay="1s">We offer reliable shared hosting at an affordable price, Get this and enjoy with other clients</h6>

        <!-- <br>
        <a href="#" class="btn-wehost btn-bg text-dark d-inline-block rounded wow fadeIn" data-wow-delay="4s">Get Started Now</a> -->
    </div>
    @endsection
@section('content')
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
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="1s">
                            <h4 class="text-primary"><b>Starter Plan</b></h4>
                            <h5><b>&#8358;3,500.00 / Year</b></h5>
                            <h6><small>Great Value For Money</small></h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    1 GB Disk space
                                </p>
                                <p class="m-0 my-1">
                                    1 GB Bandwith
                                </p>
                                <p class="m-0 my-1">
                                    10 Sub-domains
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Email Account
                                </p>
                                <p class="m-0 my-1">
                                    Control panel
                                </p>
                                <p class="m-0 my-1">
                                    24/7 Support
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="http://www.wehostafrica.org/clients/cart.php?a=add&pid=2" class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="1s">
                            <h4 class="text-primary"><b>Professional Plan</b></h4>
                            <h5><b>&#8358;4,500.00 / Year</b></h5>
                            <h6><small>Perfect For Your Website</small></h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    2 GB Disk space
                                </p>
                                <p class="m-0 my-1">
                                    4 GB Bandwith
                                </p>
                                <p class="m-0 my-1">
                                    15 Sub-domains
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Email Account
                                </p>
                                <p class="m-0 my-1">
                                    Control panel
                                </p>
                                <p class="m-0 my-1">
                                    24/7 Support
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="http://www.wehostafrica.org/clients/cart.php?a=add&pid=3" class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section def wow fadeIn">
                            <h4 class="text-primary"><b>Business Plan</b></h4>
                            <h5><b>&#8358;6,000.00 / Year</b></h5>
                            <h6><small>Create Services and Uptime</small></h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    5 GB Disk space
                                </p>
                                <p class="m-0 my-1">
                                    50 GB Bandwith
                                </p>
                                <p class="m-0 my-1">
                                    15 Sub-domains
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Email Account
                                </p>
                                <p class="m-0 my-1">
                                    Control panel
                                </p>
                                <p class="m-0 my-1">
                                    24/7 Support
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="http://www.wehostafrica.org/clients/cart.php?a=add&pid=1" class="btn btn-lg btn-warning"><b>Choose Plan</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="2s">
                            <h4 class="text-primary"><b>Premium Plan</b></h4>
                            <h5><b>&#8358;10,500.00 / Year</b></h5>
                            <h6><small>Enjoy Unlimited Bandwith</small></h6>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    10 GB Disk space
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Bandwith
                                </p>
                                <p class="m-0 my-1">
                                    25 Sub-domains
                                </p>
                                <p class="m-0 my-1">
                                    Unlimited Email Account
                                </p>
                                <p class="m-0 my-1">
                                    Control panel
                                </p>
                                <p class="m-0 my-1">
                                    24/7 Support
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="http://www.wehostafrica.org/clients/cart.php?a=add&pid=5" class="btn btn-lg btn-outline-warning"><b>Choose Plan</b></a>
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
                <h3 class="text-primary "><strong class="">Other Hosting Features  </strong> </h3>
                <h6><small class="text-secondary"> For all Plans </small></h6>
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
                                    <h6>CPanel and PHPMyAdmin</h6>
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
                                                What is Shared Hosting?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques1" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            Shared web hosting service is a web hosting service where many websites reside on one web server connected to the internet. This is generally the most economical option for hosting, as the overall cost of server maintenance is shared over many customers.
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
                        <!-- ques 3 -->
                        <div class="col-md-6">
                            <section class="container-fluid px-0 w3-section">
                                <div class="card">
                                    <div class="card-header bg-white border-0" role="tab" id="headingOne">
                                        <h5 class="mb-0 w3-medium">
                                            <a data-toggle="collapse" href="#ques3" aria-expanded="true" aria-controls="collapseOne">
                                                Can i Host asp.net Apps on shared Hosting?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques3" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <span class="text-danger">No</span>, you cannot host asp.net apps on shared hosting as it is Windows based and we only offer Linux based OS for shared hosting.
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
                                                Can i Host Wordpress on Shared Hosting?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques4" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <span class="text-success">Yes</span>, you can
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