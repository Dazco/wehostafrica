@extends('layouts.website')
@section('title')
    Payment Options | WehostAfrica.com - Best Web Hosting Provider in Africa
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
        <h1 class="hh2 text-primary pt-2 font-weight-bold text-shadow wow fadeIn" data-wow-delay="1s">Payment Methods</h1>
        <h6 class="wow fadeIn" data-wow-delay="1s"> Pay from anywhere around the world to WeHostAfrica</h6>

    </div>
@endsection
@section('content')
    <!-- main content -->
    <main>
        <section class="container-fluid bg-primary text-white text-center py-5">
            <div class="container px-0 py-3 text-center">
                <h3>We offer multiple payment options for our Clients.</h3>
            </div>
        </section>
        <!--  -->
        <section class="container-fluid py-5 bg-white">
            <div class="container px-0 pt-5">
                <h3 class="text-primary font-weight-bold">Bank Payment Options For Nigeria</h3>
            </div>
            <div class="container px-0 py-4 w3-section">
                <div class="row">
                    <div class="col-lg-3 col-md-4 w3-section">
                        <section class="container-fluid w3-section bg-white py-5 rounded text-center border wow fadeIn">
                            <img src="/images/diamond.png" alt="Diamond Bank" class="img-fluid w-50"> <br>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 80px;">
                            <p class="w3-medium pt-3 text-secondary">
                                <b>Account Name:</b><br>
                                <span>Vistacool Technologies Limited</span>
                            </p>
                            <p class="w3-medium pt-3 text-secondary">
                                <b>Account Number:</b><br>
                                <span>0048180820</span>
                            </p>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-4 w3-section">
                        <section class="container-fluid w3-section bg-white py-5 rounded text-center border wow fadeIn" data-wow-delay="1s">
                            <img src="/images/fidelity.png" alt="Fidelity Bank" class="img-fluid w-50"> <br>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 80px;">
                            <p class="w3-medium pt-3 text-secondary">
                                <b>Account Name:</b><br>
                                <span>Vistacool Technologies Limited</span>
                            </p>
                            <p class="w3-medium pt-3 text-secondary">
                                <b>Account Number:</b><br>
                                <span>5600261968</span>
                            </p>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-4 w3-section">
                        <section class="container-fluid w3-section bg-white py-5 rounded text-center border wow fadeIn" data-wow-delay="1s">
                            <img src="/images/access.png" alt="Access Bank" class="img-fluid w-50"> <br>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 80px;">
                            <p class="w3-medium pt-3 text-secondary">
                                <b>Account Name:</b><br>
                                <span>Vistacool Technologies Limited</span>
                            </p>
                            <p class="w3-medium pt-3 text-secondary">
                                <b>Account Number:</b><br>
                                <span>0697394718</span>
                            </p>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-4 w3-section">
                        <section class="container-fluid w3-section bg-white py-5 rounded text-center border wow fadeIn" data-wow-delay="2s">
                            <img src="/images/zenith.png" alt="Zenith Bank" class="img-fluid w-50"> <br>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 80px;">
                            <p class="w3-medium pt-3 text-secondary">
                                <b>Account Name:</b><br>
                                <span>Vistacool Technologies Limited</span>
                            </p>
                            <p class="w3-medium pt-3 text-secondary">
                                <b>Account Number:</b><br>
                                <span>1014397375</span>
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="container-fluid py-5 bg-light">
            <div class="container px-0 pt-5 text-dark w3-section">
                <h3 class="font-weight-bold">Online Payment Options For Nigeria</h3>
            </div>
            <!--  -->
            <div class="container px-0 py-4 w3-section">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <section class="container-fluid w3-section bg-white py-5 rounded text-center border wow fadeIn">
                            <img src="images/paystack.png" alt="Paystack" class="img-fluid w-50"> <br>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 80px;">
                            <p class="w3-medium pt-3 text-secondary">
                                You may make payment with your debit cards, online banking and USSD using the Rave payment option.
                            </p>
                        </section>
                    </div>
                    <!--  -->
                    <div class="col-md-4 col-sm-6">
                        <section class="container-fluid w3-section bg-white py-5 rounded text-center border wow fadeIn" data-wow-delay="1s">
                            <img src="/images/quick.svg" alt="Paystack" class="img-fluid w-50"> <br>
                            <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 80px;">
                            <p class="w3-medium pt-2 text-secondary">
                                You may make payment with your Visa, MasterCard and Verve cards debit cards using the QuickTeller payment option.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="container-fluid py-5 bg-white">
            <div class="container px-0 py-5">
                <h3 class="text-primary font-weight-bold">Online Payment Options Outside Nigeria</h3>
            </div>
            <div class="container px-0 py-5">
                <div class="row">
                    <div class="col-md-6 w3-section">

                    </div>
                    <div class="col-md-6 text-center w3-section w3-hide-small">

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
