<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="Sepatulola">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--title-->
    <title>Sepatulola</title>

    <!--favicon icon-->
    <link rel="icon" href="#" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&display=swap"
        rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mb.YTPlayer.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

</head>

<body>

    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav white-bg">
            <div class="container">
                <a class="navbar-brand" href="index-3.html"><img src="{{ asset('frontend/img/logo-sepatulola.png') }}"
                        width="100" alt="logo" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#About">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{ route('login') }}">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!--end navbar-->
    </header>
    <!--header section end-->

    <!--body content wrap start-->
    <div class="main">

        <!--hero section start-->
        <section class="hero-section hero-section-3 ptb-100">
            <!--animated circle shape start-->
            <div class="circles">
                <div class="point animated-point-1"></div>
                <div class="point animated-point-2"></div>
                <div class="point animated-point-3"></div>
                <div class="point animated-point-4"></div>
                <div class="point animated-point-5"></div>
                <div class="point animated-point-6"></div>
            </div>
            <!--animated circle shape end-->
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 col-lg-6">
                        <div class="hero-content-left ptb-100">
                            <h1 style="font-size: 40px"><span>SEPATU LOLA</span></h1>
                            <p class="lead">Sistem Informasi Terpadu
                                Layanan Online Literasi Anak</p>

                            <a href="#" class="btn solid-btn">Get Started</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="hero-animation-img">
                            <img class="img-fluid d-block m-auto animation-one"
                                src="{{ asset('frontend/img/bg-child.png') }}" width="420" alt="animation image">

                            <img class="img-fluid d-none d-lg-block animation-three"
                                src="{{ asset('frontend/img/hero-animation-01.svg') }}" alt="animation image"
                                width="70">
                            <img class="img-fluid d-none d-lg-block animation-four"
                                src="{{ asset('frontend/img/hero-animation-03.svg') }}" alt="animation image"
                                width="50">
                        </div>
                    </div>
                </div>
            </div>

            <!--shape image start-->
            <img src="{{ asset('frontend/img/hero-bg-shape-2.svg') }}" class="shape-image" alt="shape image">
            <!--shape image end-->
        </section>
        <!--hero section end-->

        <!--promo section start-->
        <section class="promo-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>ABOUT SEPATU LOLA</span></h2>
                            <p class="lead">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row equal">
                    <div class="col-md-4 col-lg-4">
                        <div
                            class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <span class="ti-vector text-white"></span>
                            </div>
                            <h5>Dipakai Anak</h5>
                            <p>Sistem ini berisi fitur yang akan difungsikan
                                untuk pengembangan anak.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div
                            class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <span class="ti-lock text-white"></span>
                            </div>
                            <h5>Dipakai Orangtua</h5>
                            <p>Sistem ini berisi bagian yang memungkinkan
                                orangtua untuk mengeksplorasi literasi anak</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div
                            class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <span class="ti-eye text-white"></span>
                            </div>
                            <h5>Dipakai Guru</h5>
                            <p>Sistem ini berisi ruang yang dapat dijadikan
                                media pembelajaran pendukung literasi untuk
                                siswa TK -SD</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--overflow block start-->
        <div class="overflow-hidden">
            <!--about us section start-->
            <section id="about" class="about-us ptb-100 background-shape-img">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-7">
                            <div class="about-content-left section-heading">
                                <h2>Use your android or ios device <br>
                                    <span>to manage everything.</span>
                                </h2>

                                <div class="single-feature mb-4 mt-5">
                                    <div class="icon-box-wrap d-flex align-items-center mb-2">
                                        <div class="mr-3 icon-box">
                                            <img src="{{ asset('frontend/img/image-icon-1.png') }}" alt="icon image"
                                                class="img-fluid">
                                        </div>
                                        <p class="mb-0">Proactively syndicate open-source e-markets after low-risk
                                            high-yield
                                            synergy. Professionally
                                            simplify visionary technology.</p>
                                    </div>
                                </div>
                                <div class="single-feature mb-4">
                                    <div class="icon-box-wrap mb-2">
                                        <div class="mr-3 icon-box">
                                            <img src="{{ asset('frontend/img/image-icon-2.png') }}" alt="icon image"
                                                class="img-fluid">
                                        </div>
                                        <p class="mb-0">Intrinsicly aggregate cutting-edge internal or "organic" sources
                                            through pandemic manufactured products. Synergistically.</p>
                                    </div>
                                    <p></p>
                                </div>
                                <div class="single-feature mb-4">
                                    <div class="icon-box-wrap mb-2">
                                        <div class="mr-3 icon-box">
                                            <img src="{{ asset('frontend/img/image-icon-3.png') }}" alt="icon image"
                                                class="img-fluid">
                                        </div>
                                        <p class="mb-0">Completely administrate empowered e-tailers after extensive
                                            experiences. Holisticly leverage existing quality networks.</p>
                                    </div>
                                    <p></p>
                                </div>
                                <div class="single-feature mb-4">
                                    <div class="icon-box-wrap mb-2">
                                        <div class="mr-3 icon-box">
                                            <img src="{{ asset('frontend/img/image-icon-4.png') }}" alt="icon image"
                                                class="img-fluid">
                                        </div>
                                        <p class="mb-0">Intrinsicly incentivize functionalized metrics whereas go
                                            forward networks. Collaboratively fabricate clicks-and-mortar intellectual.
                                        </p>
                                    </div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="about-content-right">
                                <img src="{{ asset('frontend/img/image-15.png') }}" alt="about us" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--about us section end-->
        </div>
        <!--overflow block end-->

        <!--features section start-->
        <section id="features" class="feature-section ptb-100">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4">
                        <div class="download-img">
                            <img src="{{ asset('frontend/img/image-10.png') }}" alt="download" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="feature-contents section-heading">
                            <h2>Quick & Easy Process with <br>
                                <span>best features</span>
                            </h2>
                            <p>Objectively deliver professional value with diverse web-readiness.
                                Collaboratively transition wireless customer service without goal-oriented catalysts for
                                change. Collaboratively.</p>

                            <div class="feature-content-wrap">
                                <ul class="nav nav-tabs feature-tab" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active h6" href="#tab6-1" data-toggle="tab">
                                            <span class="ti-palette"></span>
                                            Design
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h6" href="#tab6-2" data-toggle="tab">
                                            <span class="ti-vector"></span>
                                            Development
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h6" href="#tab6-3" data-toggle="tab">
                                            <span class="ti-bar-chart"></span>
                                            Marketing
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h6" href="#tab6-4" data-toggle="tab">
                                            <span class="ti-announcement"></span>
                                            Branding
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content feature-tab-content">
                                    <div class="tab-pane active" id="tab6-1">
                                        <ul class="list-unstyled">
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-primary mr-3">
                                                            <span class="ti-check"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Tones of SASS variables</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-primary mr-3">
                                                            <span class="ti-check"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Create your own skin to match your brand</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-primary mr-3">
                                                            <span class="ti-check"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Globally orchestrate tactical channels whereas
                                                            bricks</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-primary mr-3">
                                                            <span class="ti-check"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Use Gulp to prepare all assets for production
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-primary mr-3">
                                                            <span class="ti-check"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Collaboratively predominate vertical
                                                            manufactured</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab6-2">
                                        <div class="single-feature">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="ti-layers rounded mr-3 icon icon-color-1"></span>
                                                <h5 class="mb-0">Easy to use</h5>
                                            </div>
                                            <p>Synergistically deliver next-generation relationships whereas
                                                bleeding-edge resources. Continually pontificate stand-alone benefits
                                                whereas.</p>
                                        </div>
                                        <div class="single-feature mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="ti-alarm-clock rounded mr-3 icon icon-color-2"></span>
                                                <h5 class="mb-0">Increase conversion</h5>
                                            </div>
                                            <p>Phosfluorescently empower compelling intellectual capital and
                                                revolutionary web services. Compellingly develop cross-media.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab6-3">
                                        <div class="row">
                                            <div class="col single-feature mb-4">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="ti-bar-chart rounded mr-3 icon icon-color-2"></span>
                                                    <h5 class="mb-0">Increase conversion</h5>
                                                </div>
                                                <p>Display recent conversions, build credibility and trust.</p>
                                            </div>
                                            <div class="col single-feature mb-4">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="ti-stats-up rounded mr-3 icon icon-color-3"></span>
                                                    <h5 class="mb-0">Product analytics</h5>
                                                </div>
                                                <p>A top promo bar that counts down until a few discounts.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab6-4">
                                        <p>I have, to push possibilities, to show
                                            people, this is the level that things could be at. So when you get something
                                            that has the name Kanye West on it, it’s supposed to be pushing the furthest
                                            possibilities. I will be the leader of a company that ends up being worth
                                            billions of dollars, because I got the answers. I understand culture. I am
                                            the
                                            nucleus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--features section end-->

        <!--our blog section start-->
        <section id="blog" class="our-blog-section ptb-100 primary-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-heading mb-5 text-white">
                            <h2 class="text-white">Our Latest News</h2>
                            <p>
                                Enthusiastically drive revolutionary opportunities before emerging leadership.
                                Distinctively
                                transform tactical methods of empowerment via resource sucking core.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm white-bg">
                            <span class="category position-absolute badge badge-pill badge-primary">Lifestyle</span>
                            <img src="{{ asset('frontend/img/blog/1.jpg') }}" class="card-img-top position-relative"
                                alt="blog">
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item">Jan 21, 2019</li>
                                        <li class="list-inline-item"><span>45</span> Comments</li>
                                        <li class="list-inline-item"><span>10</span> Share</li>
                                    </ul>
                                </div>
                                <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk.</p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm white-bg">
                            <span class="category position-absolute badge badge-pill badge-danger">Technology</span>
                            <img src="{{ asset('frontend/img/blog/2.jpg') }}" class="card-img-top position-relative"
                                alt="blog">
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item">May 26, 2019</li>
                                        <li class="list-inline-item"><span>30</span> Comments</li>
                                        <li class="list-inline-item"><span>5</span> Share</li>
                                    </ul>
                                </div>
                                <h3 class="h5 card-title"><a href="#">Quickly formulate backend</a></h3>
                                <p class="card-text">Synergistically engage effective ROI after customer directed
                                    partnerships.</p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm white-bg">
                            <span class="category position-absolute badge badge-pill badge-info">Science</span>
                            <img src="{{ asset('frontend/img/blog/3.jpg') }}" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item">Apr 25, 2019</li>
                                        <li class="list-inline-item"><span>41</span> Comments</li>
                                        <li class="list-inline-item"><span>30</span> Share</li>
                                    </ul>
                                </div>
                                <h3 class="h5 card-title"><a href="#">Objectively extend extensive</a></h3>
                                <p class="card-text">Holisticly mesh open-source leadership rather than proactive users.
                                </p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our blog section end-->

        <!--our team section start-->
        <section id="team" class="team-member-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our team Sepatulola</h2>
                            <p class="lead">
                                Following reasons show advantages of adding AppCo to your lead pages, demos and
                                checkouts
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-member position-relative">
                            <div class="team-image">
                                <img src="{{ asset('frontend/img/team-4.jpg') }}" alt="Team Members"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div
                                class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                                <h5 class="mb-0">Edna Mason</h5>
                                <h6>Senior Designer</h6>
                                <ul class="list-inline team-social social-icon mt-4 text-white">
                                    <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-member position-relative">
                            <div class="team-image">
                                <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="Team Members"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div
                                class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                                <h5 class="mb-0">Edna Mason</h5>
                                <h6>Senior Designer</h6>
                                <ul class="list-inline team-social social-icon mt-4 text-white">
                                    <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-member position-relative">
                            <div class="team-image">
                                <img src="{{ asset('frontend/img/team-2.jpg') }}" alt="Team Members"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div
                                class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                                <h5 class="mb-0">Edna Mason</h5>
                                <h6>Senior Designer</h6>
                                <ul class="list-inline team-social social-icon mt-4 text-white">
                                    <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-member position-relative">
                            <div class="team-image">
                                <img src="{{ asset('frontend/img/team-3.jpg') }}" alt="Team Members"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div
                                class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                                <h5 class="mb-0">Edna Mason</h5>
                                <h6>Senior Designer</h6>
                                <ul class="list-inline team-social social-icon mt-4 text-white">
                                    <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our team section end-->


        <!--contact us section start-->
        <section id="contact" class="contact-us gray-light-bg ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-3 message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="section-heading">
                            <h3>Contact with us</h3>
                            <p>It's very easy to get in touch with us. Just use the contact form or pay us a
                                visit for a coffee at the office. Dynamically innovate competitive technology after an
                                expanded array of leadership.</p>
                        </div>
                        <div class="footer-address">
                            <h6><strong>Head Office</strong></h6>
                            <p>121 King St, Melbourne VIC 3000, Australia</p>
                            <ul>
                                <li><span>Phone: +61 2 8376 6284</span></li>
                                <li><span>Email : <a href="mailto:hello@yourdomain.com">hello@yourdomain.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form action="#" method="POST" id="contactForm" class="contact-us-form" novalidate="novalidate">
                            <h5>Reach us quickly</h5>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Enter email" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" value="" class="form-control" id="phone"
                                            placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="company" value="" size="40" class="form-control"
                                            id="company" placeholder="Your Company">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn solid-btn" id="btnContactUs">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->

    </div>
    <!--body content wrap end-->

    <!--shape image start-->
    <div class="shape-img subscribe-wrap">
        <img src="{{ asset('frontend/img/footer-top-shape.png') }}" alt="footer shape" class="img-fluid">

    </div>
    <!--shape image end-->

    <!--footer section start-->
    <footer class="footer-section">

        <!--footer top start-->
        <div class="footer-top pt-150 pb-5 background-img-2"
            style="background: url('{{ asset('frontend/img/footer-bg.png') }}')no-repeat center top / cover">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="footer-nav-wrap text-white">
                            <img src="{{ asset('frontend/img/logo-sepatulola-white.png') }}" alt="footer logo"
                                width="120" class="img-fluid mb-3">
                            <p>Sistem Informasi Terpadu Layanan Online Literasi Anak</p>

                            <div class="social-list-wrap">
                                <ul class="social-list list-inline list-unstyled">
                                    <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><span
                                                class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><span
                                                class="ti-twitter"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><span
                                                class="ti-instagram"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank" title="printerst"><span
                                                class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-auto mb-4 mb-lg-0">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="mb-3 text-white">Others Links</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="#">About Us</a></li>
                                <li class="mb-2"><a href="#">Contact Us</a></li>
                                <li class="mb-2"><a href="#">Pricing</a></li>
                                <li class="mb-2"><a href="#">Privacy Policy</a></li>
                                <li class="mb-2"><a href="#">Terms and Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-auto mb-4 mb-lg-0">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="mb-3 text-white">Support</h5>
                            <ul class="list-unstyled support-list">
                                <li class="mb-2 d-flex align-items-center"><span class="ti-location-pin mr-2"></span>
                                    121 King Melbourne
                                    <br>Australia 3000
                                </li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-mobile mr-2"></span> <a
                                        href="tel:+61283766284"> +61 2 8376 6284</a></li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-email mr-2"></span><a
                                        href="mailto:mail@example.com"> mail@example.com</a></li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-world mr-2"></span><a
                                        href="#"> www.yourdomain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="mb-3 text-white">Location</h5>
                            <img src="{{ asset('frontend/img/map.png') }}" alt="location map" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer top end-->

        <!--footer copyright start-->
        <div class="footer-bottom gray-light-bg pt-4 pb-4">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <p class="copyright-text pb-0 mb-0">Copyrights © {{ date('Y') }} All
                            rights reserved by
                            <a href="https://itgenic.co.id">itgenic.co.id</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--footer copyright end-->
    </footer>
    <!--footer section end-->

    <!--jQuery-->
    <script src="{{ asset('frontend/js/jquery-3.5.0.min.js') }}"></script>
    <!--Popper js-->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <!--Bootstrap js-->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!--Magnific popup js-->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!--jquery easing js-->
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <!--jquery ytplayer js-->
    <script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <!--owl carousel js-->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!--countdown js-->
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <!--validator js-->
    <script src="{{ asset('frontend/js/validator.min.js') }}"></script>
    <!--custom js-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
</body>

</html>