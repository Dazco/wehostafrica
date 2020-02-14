<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link href="{{url('css/fontawesome-all.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('css/w3.css')}}" rel="stylesheet">
    <link href="{{url('css/animate.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/fav.png')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <style media="screen">
       @yield('styles')
    </style>
</head>
<body>
<header class="container-fluid px-0 " id="main_header">
    <section class="container-fluid p-0" id="head_cover">
        <!-- top head -->
        <div class="container-fluid bg-white wow fadeIn" id="top_head">
            <div class="container p-0">
                <div class="row">
                    <div class="col-md-6 text-left" id="top_con">
                        <span class="d-inline-block py-1 pr-2"><i class="fas fa-phone"></i> 08129088444</span>
                        <span class="d-inline-block py-1 pl-2"><i class="fas fa-envelope"></i> support@wehostafrica.com</span>
                    </div>
                    <!--  -->
                    <div class="col-md-6 text-right w3-hide-small d-none d-sm-block" id="top_links">
                        <a href="clients/register.php" class="d-inline-block py-1 pr-2">Sign Up</a>
                        <a href="clients/clientarea.php"
                           class="d-inline-block py-1 px-2 bg-warning text-dark  rounded-bottom">Client area</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav -->
        <div class="container-fluid bg-white wow fadeIn py-2" id="head_nav">
            <div class="container p-0">
                <div class="row">
                    <div class="col-lg-3 col-md-4 w3-hide-small w3-hide-medium d-none d-sm-block">
                        <a href=""><img src="{{url('images/logo.png')}}" alt="WehostAfrica"
                                        title="WehostAfrica - Best Web Hosting Provider in Africa"/></a>
                    </div>
                    <!--  -->
                    <div class="col-lg-9 col-md-8">
                        <nav class="navbar navbar-expand-lg navbar-light bg-transparent mb-0 py-0">
                            <a class="navbar-brand pt-0 w3-hide-large w3-hide-medium d-block d-sm-none" href=""><img
                                    src="{{url('images/logo.png')}}" alt="weHostAfrica"
                                    title="WehostAfrica - Best Web Hosting Provider in Africa"/></a>
                            <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('website.home')}}">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Hosting
                                        </a>
                                        <div class="dropdown-menu wow fadeIn" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{route('website.share')}}">Shared Hosting</a>
                                            <a class="dropdown-item" href="{{route('website.resell')}}">Reseller Hosting</a>
                                            <a class="dropdown-item" href="{{route('website.dedicate')}}">Dedicated Hosting</a>
                                            <a class="dropdown-item" href="{{route('website.vps')}}">VPS</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Domain
                                        </a>
                                        <div class="dropdown-menu wow fadeIn" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{route('website.domain_reg')}}">Registration</a>
                                            <a class="dropdown-item" href="{{route('website.transfer')}}">Transfer</a>
                                            <a class="dropdown-item" href="{{route('website.personal')}}">Personal Domain</a>

                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('website.pay')}}">How To Pay</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.wehostafrica.com/aff/">Affiliate</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Security
                                        </a>
                                        <div class="dropdown-menu wow fadeIn" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{route('website.ssl')}}">SSL Certificate</a>
                                            <a class="dropdown-item" href="premium-dns">Premium DNS</a>
                                            <a class="dropdown-item" href="who-is">Whois Guard</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('website.contact')}}">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://wehostafrica.com/Web"
                                           target="_blank">Websites</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @yield('part-header')
    </section>
</header>

    @yield('content')

<!-- top footer -->
<section class="container-fluid bg-primary pt-2 w3-hide-medium w3-hide-small">
    <div class="container px-0">
        <div class="row">
            <div class="col-md-4">
                <div class="container px-0 py-4 text-light wow fadeIn">
                    <div class="row">
                        <div class="col-3 text-center">
                            <i class="fas fa-envelope fa-3x"></i>
                        </div>
                        <!--  -->
                        <div class="col-9">
                            <h5><strong>Email Us</strong></h5>
                            <h6><a href="mailto:support@wehostafrica.com"
                                   class="text-white">support@wehostafrica.com</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-md-4">
                <div class="container px-0 py-4 text-light wow fadeIn">
                    <div class="row">
                        <div class="col-3 text-center">
                            <i class="fas fa-phone fa-3x"></i>
                        </div>
                        <!--  -->
                        <div class="col-9">
                            <h5><strong>Lets Talk</strong></h5>
                            <h6>+234-08129088444</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-md-4">
                <div class="container px-0 py-4 text-light wow fadeIn">
                    <div class="row">
                        <div class="col-3 text-center">
                            <i class="fas fa-comments fa-3x"></i>
                        </div>
                        <!--  -->
                        <div class="col-9">
                            <h5><strong>Live Chat with Us</strong></h5>
                            <h6>On Social Media</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</section>
<!--  -->
<footer class="container-fluid px-0 py-4">
    <section class="container py-3">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <section class="container-fluid py-3 w3-hide-small w3-hide-medium">
                    <img src="{{url('images/logo.jpeg')}}" alt="Logo" class="img-fluid rounded-circle" width="150"/>
                    <p class="pt-4 text-left">
                        We make registering, hosting, and managing domains for yourself or others easy and affordable,
                        because the internet needs people.
                    </p>
                </section>
            </div>
            <!--  -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <section class="container-fluid py-3 w3-hide-small">
                    <h6 class="font-weight-bold text-white pb-3">Hosting</h6>
                    <ul>
                        <li><a href="{{route('website.share')}}"> <i class="text-primary fas fa-angle-right"></i> &nbsp; Shared
                                Hosting</a></li>
                        <li><a href="{{route('website.dedicate')}}"> <i class="text-primary fas fa-angle-right"></i> &nbsp;
                                Dedicated Hosting</a></li>
                        <li><a href="{{route('website.resell')}}"> <i class="text-primary fas fa-angle-right"></i> &nbsp; Reseller
                                Hosting</a></li>
                        <li><a href="{{route('website.vps')}}"> <i class="text-primary fas fa-angle-right"></i> &nbsp; VPS
                                Hosting</a></li>
                    </ul>
                </section>
            </div>
            <!--  -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <section class="container-fluid py-3 w3-hide-small">
                    <h6 class="font-weight-bold text-white pb-3">Domain</h6>
                    <ul>
                        <li><a href="{{route('website.domain_reg')}}"> <i class="text-primary fas fa-angle-right"></i> &nbsp;
                                Registration</a></li>
                        <li><a href="{{route('website.transfer')}}"> <i class="text-primary fas fa-angle-right"></i> &nbsp;
                                Transfer</a></li>
                        <li><a href="{{route('website.personal')}}"> <i class="text-primary fas fa-angle-right"></i> &nbsp; Personal
                                Domain</a></li>
                        <li><a href="premium-dns"> <i class="text-primary fas fa-angle-right"></i> &nbsp; Premium
                                DNS</a></li>
                    </ul>
                </section>
            </div>
            <!--  -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <section class="container-fluid py-3">
                    <h6 class="font-weight-bold text-white pb-3">Quick Links</h6>
                    <ul>
                        <li><a href="support"> <i class="text-primary fas fa-angle-right"></i> &nbsp; Support Centre</a>
                        </li>
                        <li><a href="clients/serverstatus.php"> <i class="text-primary fas fa-angle-right"></i> &nbsp;
                                Status Update</a></li>
                        <li><a href="clients/knowledgebase.php"> <i class="text-primary fas fa-angle-right"></i> &nbsp;
                                Knowledgebase</a></li>
                        <li><a href="clients/submitticket.php"> <i class="text-primary fas fa-angle-right"></i> &nbsp;
                                Submit Ticket</a></li>
                        <li><a href="{{route('website.ssl')}}"> <i class="text-primary fas fa-angle-right"></i> &nbsp; SSl
                                Certificate</a></li>
                    </ul>
                </section>
            </div>
            <!--  -->
            <div class="col-12 ">
                <section class="container-fluid py-3 w3-hide-large w3-hide-medium">
                    <h6 class="font-weight-bold text-white pb-3">Contact</h6>
                    <ul>
                        <li><a href="tel:+234012911486"> <i class="text-primary fas fa-phone"></i> &nbsp; +234012911486
                            </a></li>
                        <li><a href="mailto:support@wehostafrica.com"> <i class="text-primary fas fa-envelope"></i>
                                &nbsp; support@wehostafrica.com</a></li>
                        <li><i class="text-primary fas fa-map-marker"></i> &nbsp; <a href="javascript:void">22 Karimu
                                Street, Ojuelegba Surulere, Lagos.</a></li>
                    </ul>
                </section>
            </div>

        </div>
    </section>
</footer>
<section class="container-fluid px-0 py-1" id="finals">
    <div class="container py-1">
        <div class="row">
            <div class="col-sm-6">
                <div class="container-fluid text-left py-2">
                    <strong>&copy;<?=date('Y')?> <span class="text-primary">WEHOSTAFRICA</span>, All Rights
                        Reserved</strong>
                </div>
            </div>
            <!--  -->
            <div class="col-sm-6">
                <div class="container-fluid text-right py-2">
                    <a href="#" class="fab fa-facebook-f btn" target="_blank"></a>
                    <a href="http://twitter.com/wehostafrica5" class="fab fa-twitter btn" target="_blank"></a>
                    <a href="https://plus.google.com/113475739020926021601" class="fab fa-google-plus-g btn"
                       target="_blank"></a>
                    <a href="" class="fab fa-instagram btn" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<button id="top" class="btn"><i class="fas fa-angle-up"></i></button>

<!--  -->

<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/easing.min.js')}}"></script>
<script src="{{url('js/wow.min.js')}}"></script>
<script src="{{url('js/custom.js')}}"></script>


</body>
</html>
