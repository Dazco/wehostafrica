@extends('layouts.website')
@section('title')
    <title>
        Personal Domain | WehostAfrica.com - Best Web Hosting Provider in Africa
    </title>
@endsection
@section('styles')
    <style media="screen">
        body {
            background: url('/images/bg.jpg') no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .dsec {
            border: 1px solid rgba(0, 0, 0, 0.1);
            -webkit-border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 1.5rem;
            -webkit-border-radius: 1.5rem;
            transition: border .3s,;
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
    <!-- notes -->
    <div class="container wow fadeIn py-5" id="head_notez">
        <h1 class="hh2 text-primary pt-2 font-weight-bold text-shadow wow fadeIn" data-wow-delay="1s">Personal
            Domain</h1>
        <h6 class="wow fadeIn" data-wow-delay="1s"> Let what you are be online. Represent yourself.</h6>

    </div>
@endsection
@section('content')
    <!-- main content -->
    <main>
        <section class="container-fluid bg-primary text-white text-center py-5">
            <div class="container px-0 py-3 text-center">
                <form class="text-light" action="" method="post">
                    <div class="row">
                        <div class="col-md-9 form-group">
                            <input type="text" name="name" value="" class="form-control form-control-lg border-0 py-2"
                                   placeholder="eg: yourname.com">
                        </div>
                        <!--  -->
                        <div class="col-md-3 form-group">
                            <button class="btn btn-bg text-dark btn-lg btn-block font-weight-bold">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--  -->
            <div class="container font-weight-bold text-white">
                <i class="fas fa-link"></i> <a href="" class="text-warning">Want to register a business name? </a>
            </div>
        </section>
        <!--  -->
        <section class="container-fluid py-5 bg-white" id="head_tdl">
            <div class="container px-0 py-5 text-center">
                <h2 class="hh2"><strong class="text-primary">Why you need a Personal Domain</strong></h2>
                <h5 class="hh5">Represent Your Self Online</h5>
            </div>
            <div class="container px-0 pt-3 pb-5">
                <div class="row">
                    <div class="col-md-6 w3-section">
                        <div class="row wow fadeIn">
                            <div class="col-4 text-center">
                                <div class="d-inline-block p-5 bg-warning rounded-circle text-center">
                                    <strong class="fas fa-user-md fa-3x w3-hide-small"></strong>
                                    <strong class="fas fa-user-md fa-2x w3-hide-large w3-hide-medium"></strong>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-8">
                                <h5><strong>Present Yourself as a professional</strong></h5>
                                <p>
                                    Using your own name for your website and email address adds a professional touch to
                                    everything you do. Show the world you have full ownership of your online presence.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-md-6 w3-section">
                        <div class="row wow fadeIn" data-wow-delay="1s">
                            <div class="col-4 text-center">
                                <div class="d-inline-block p-5 bg-warning rounded-circle text-center">
                                    <strong class="fas fa-user-secret fa-3x w3-hide-small"></strong>
                                    <strong class="fas fa-user-secret fa-2x w3-hide-large w3-hide-medium"></strong>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-8">
                                <h5><strong>Protect Your Reputation</strong></h5>
                                <p>
                                    Did you ever think about all the information that makes it to the online space these
                                    days? A high-authority website with carefully curated content gives you the power to
                                    manage your online reputation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-md-6 w3-section">
                        <div class="row wow fadeIn" data-wow-delay="1s">
                            <div class="col-4 text-center">
                                <div class="d-inline-block p-5 bg-warning rounded-circle text-center">
                                    <strong class="fas fa-search fa-3x w3-hide-small"></strong>
                                    <strong class="fas fa-search fa-2x w3-hide-large w3-hide-medium"></strong>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-8">
                                <h5><strong>Increase Visibility</strong></h5>
                                <p>
                                    Search engines love domain names with specific keywords. Want your website to rank
                                    first, before your social network profile? Your firstname+lastname combo helps you
                                    do exactly that.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-md-6 w3-section">
                        <div class="row wow fadeIn" data-wow-delay="1s">
                            <div class="col-4 text-center">
                                <div class="d-inline-block p-5 bg-warning rounded-circle text-center">
                                    <strong class="fas fa-bullhorn fa-3x w3-hide-small"></strong>
                                    <strong class="fas fa-bullhorn fa-2x w3-hide-large w3-hide-medium"></strong>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-8">
                                <h5><strong>Market Your Business &amp; Yourself</strong></h5>
                                <p>
                                    A personal domain is the perfect place to tell people who you are and what you have
                                    to offer. Host your resume, portfolio and samples of your work, or share your photos
                                    and personal interests with the world.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--  -->


                </div>
            </div>
            <!--  -->
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
                                            <a data-toggle="collapse" href="#ques1" aria-expanded="true"
                                               aria-controls="collapseOne">
                                                How can I choose the perfect domain name?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques1" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            It is usually best to select a short, easy-to-pronounce domain name that
                                            quickly describes your brand and services. While .com is the most common
                                            domain extension, there are many gTLDs that will help tell the story of your
                                            brand more clearly. Before you register, search for other companies that may
                                            have a trademark on the terms, or have a similar name already in use.
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
                                            <a data-toggle="collapse" href="#ques2" aria-expanded="true"
                                               aria-controls="collapseOne">

                                                How do I use the personal domain name search tool?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques2" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            To get helpful suggestions using this domain name search tool, start by
                                            entering your first and last name in the required fields. We will then
                                            search our database for unique personalized options that incorporate your
                                            name. Results typically include domain names that are immediately available,
                                            as well as a few that are taken and may be for sale in our marketplace.
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
                                            <a data-toggle="collapse" href="#ques3" aria-expanded="true"
                                               aria-controls="collapseOne">

                                                How do I find TLDs that are the best fit for my personal domain?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ques3" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            By using our Domain Name Search tool, you can explore many TLD categories
                                            that can support your unique blog or business. The choices are practically
                                            endless, so our search tool groups the options in a way that makes finding
                                            the right personal or professional domain effortless and easy.
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
