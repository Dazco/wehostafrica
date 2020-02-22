@extends('layouts.website')
@section('title')
    <title>Contact Us | WehostAfrica.com - Best Web Hosting Provider in Africa</title>
@endsection
@section('styles')
    <style media="screen">
        body {
            background: url('/images/bg.jpg') no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        input, .form-control, .custom-select {
            outline: none !important;
            box-shadow: none !important;
        }
    </style>
@endsection
@section('part-header')
    <!-- notes -->
    <div class="container wow fadeIn py-5" id="head_notez">
        <h1 class="hh2 text-primary pt-2 font-weight-bold text-shadow wow fadeIn" data-wow-delay="1s">Contact
            Information</h1>
        <h6 class="wow fadeIn" data-wow-delay="1s">You can always Get in touch with us.</h6>

    </div>
@endsection
@section('content')
    <!-- main content -->
    <main>
        <section class="container-fluid py-5 bg-white">
            <div class="container px-0 py-3">
                <div class="row">
                    <div class="col-lg-8 col-md-6 w3-section">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn " data-wow-delay="1s">
                            <form class="" action="" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for=""> <b class="text-dark">Your Name:</b> </label>
                                        <input type="text" name="" class="form-control form-control-lg bg-light"
                                               autofocus>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for=""> <b class="text-dark">Your Email:</b> </label>
                                        <input type="email" name="" class="form-control form-control-lg bg-light">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for=""> <b class="text-dark">Phone Number:</b> </label>
                                        <input type="text" name="" class="form-control form-control-lg bg-light">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for=""> <b class="text-dark">Country:</b> </label>
                                        <select class="custom-select custom-select-lg bg-light" name="">
                                            <option value="">--Select--</option>
                                            @include_once('website.inc.country_list')
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for=""> <b class="text-dark">Your Message:</b> </label>
                                        <textarea name="name" rows="8" cols="80"
                                                  class="form-control bg-light"></textarea>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-sm-12"><br>
                                        <button class="btn btn-warning btn-lg border-0" name="button"><i
                                                class="fas fa-paper-plane"></i> &nbsp; <b>Send Message</b></button>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-6 w3-section">
                        <section class="container-fluid py-3 list_sec w3-section wow fadeIn" data-wow-delay="1s">
                            <div class="container-fluid w3-section py-3">
                                <h4 class="mb-0">Call us on</h4>
                                <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 100px;">
                                <div class="container-fluid px-0 pt-3">
                                    <p><i class="fa fa-phone"></i> &nbsp;-&nbsp; <b> <a href="tel:01-2911486"
                                                                                        class="text-dark">01-2911486</a>
                                        </b> (Nigeria)</p>
                                    <p><i class="fa fa-phone"></i> &nbsp;-&nbsp; <b> <a href="tel:08129088444"
                                                                                        class="text-dark">08129088444</a>
                                        </b> (Nigeria)</p>
                                </div>
                            </div>
                            <!--  -->
                            <div class="container-fluid w3-section py-3">
                                <h4 class="mb-0">Email</h4>
                                <hr class="border-warning d-inline-block p-0 text-center m-0" style="width: 100px;">
                                <div class="container-fluid px-0 pt-3">
                                    <p><i class="fa fa-envelope"></i> &nbsp;-&nbsp; <b> <a
                                                href="mailto:wehost@wehostafrica.org" class="text-dark">
                                                wehost@wehostafrica.org</a> </b> (Product Support)</p>
                                    <p><i class="fa fa-envelope"></i> &nbsp;-&nbsp; <b> <a
                                                href="mailto:chat@wehostafrica.org" class="text-dark">
                                                chat@wehostafrica.org</a> </b> (Customer Support)</p>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </section>
        <!--  -->
        <!--  -->
        <section class="container-fluid py-5 bg-white">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1013754.1862525935!2d3.5136825!3d7.0119536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c47bceee58d%3A0x725340777a0895bb!2s22%20Karimu%20St%2C%20Idi%20Oro%2C%20Lagos!5e0!3m2!1sen!2sng!4v1576016560787!5m2!1sen!2sng"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </section>
    </main>

@endsection
