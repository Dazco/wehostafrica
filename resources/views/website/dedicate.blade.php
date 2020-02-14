@extends('layouts.website')
@section('title')
    Dedicated Server Hosting | WehostAfrica.com - Best Web Hosting Provider in Africa
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
        <h1 class="hh2 text-primary pt-2 font-weight-bold text-shadow wow fadeIn" data-wow-delay="1s">Dedicated Server Hosting</h1>
        <h6 class="wow fadeIn" data-wow-delay="1s">Pound for pound, the best performance for the price</h6>

        <!-- <br>
        <a href="#" class="btn-wehost btn-bg text-dark d-inline-block rounded wow fadeIn" data-wow-delay="4s">Get Started Now</a> -->
    </div>
    @endsection
@section('content')
    <main>
        <section class="container-fluid bg-primary text-white text-center py-5">
            <div class="container py-2 wow fadeIn" data-wow-delay="1s">
                <h3 class="hh2"><strong>Choose a Plan</strong></h3>
                <h6>Check for size and price of servers you want</h6>
            </div>
        </section>
        <!--  -->
        <!-- list -->
        <section class="container-fluid bg-white py-5">
            <div class="container px-0 py-3">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="1s">
                            <h4 class="text-primary"><b>Basic</b></h4>
                            <h5><b>$175</b></h5>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    <strong>CORE :</strong> 2.3GHz Dual Core
                                </p>
                                <p class="m-0 my-1">
                                    <strong>UPLINK :</strong> 100Mbps
                                </p>
                                <p class="m-0 my-1">
                                    <strong>RAM :</strong> 4gb
                                </p>
                                <p class="m-0 my-1">
                                    <strong>RAID :</strong> 500gb
                                </p>
                                <p class="m-0 my-1">
                                    <strong>BANDWIDTH :</strong> 10TB
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="javascript:void()" class="btn btn-outline-warning"><b>Add to Cart</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="1s">
                            <h4 class="text-primary"><b>STANDARD</b></h4>
                            <h5><b>$219</b></h5>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    <strong>CORE :</strong> 2.5GHz Quad Core
                                </p>
                                <p class="m-0 my-1">
                                    <strong>UPLINK :</strong> 250Mbps
                                </p>
                                <p class="m-0 my-1">
                                    <strong>RAM :</strong> 4gb
                                </p>
                                <p class="m-0 my-1">
                                    <strong>RAID :</strong> 1000GB
                                </p>
                                <p class="m-0 my-1">
                                    <strong>BANDWIDTH :</strong> 15TB
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="javascript:void()" class="btn btn-outline-warning"><b>Add to Cart</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn">
                            <h4 class="text-primary"><b>ELITE</b></h4>
                            <h5><b>$279</b></h5>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    <strong>CORE :</strong> 2.5GHz Quad Core
                                </p>
                                <p class="m-0 my-1">
                                    <strong>UPLINK :</strong> 500Mbps
                                </p>
                                <p class="m-0 my-1">
                                    <strong>RAM :</strong> 8gb
                                </p>
                                <p class="m-0 my-1">
                                    <strong>RAID :</strong> 1000gb
                                </p>
                                <p class="m-0 my-1">
                                    <strong>BANDWIDTH :</strong> 20TB
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="javascript:void()" class="btn btn-outline-warning"><b>Add to Cart</b></a>
                            </div>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-3 col-sm-6">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="2s">
                            <h4 class="text-primary"><b>PRO</b></h4>
                            <h5><b>$374</b></h5>
                            <hr class="border-warning d-inline-block p-0 text-center" style="width: 50px;">
                            <div class="container-fluid w3-section px-0 pt-3 pb-3">
                                <h6 class="pb-1"><strong class="text-dark">Features</strong></h6>
                                <p class="m-0 my-1">
                                    <strong>CORE :</strong> 3.3GHz Dual Core
                                </p>
                                <p class="m-0 my-1">
                                    <strong>UPLINK :</strong> 1Gbps
                                </p>
                                <p class="m-0 my-1">
                                    <strong>RAM :</strong> 16gb
                                </p>
                                <p class="m-0 my-1">
                                    <strong>RAID :</strong> 1000gb
                                </p>
                                <p class="m-0 my-1">
                                    <strong>BANDWIDTH :</strong> 25TB
                                </p>
                            </div>
                            <div class="container-fluid w3-section">
                                <a href="javascript:void()" class="btn btn-outline-warning"><b>Add to Cart</b></a>
                            </div>
                        </section>
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
                                                What is Dedicated Server Hosting?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques1" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            Dedicated server is a computer in a network reserved for serving the needs of the network. Some networks require that one computer is set aside to manage communications between all the other computers. In the Web hosting business, a dedicated server is typically a rented service. The user rents the server, software and an Internet connection from the Web host.
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
