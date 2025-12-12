@extends('layouts.layout')
@section('title')
    <title>Về chúng tôi - Kwapp Store</title>
@endsection
@section('meta')
    <meta name="description"
        content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
    <meta name="keywords" content="">
    <meta name="author" content="spacingtech_webify">
@endsection
@section('styles')
    <!-- plugin css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/plugin.css') }}">
    <!-- collection css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/collection.css') }}">
    <!-- feather -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/feather.css') }}">
    <!-- blog css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/blog.css') }}">
    <!-- other-pages css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/other-pages.css') }}">
    <!-- product-page css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/product-page.css') }}">
    <!-- style css -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('store/css/style1.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/style2.css') }}">
@endsection

@section('content')
    <!-- screen-bg start -->
    <div class="screen-bg"></div>
    <!-- screen-bg end -->
    <!-- preloader start -->
    <div class="preloader"></div>
    <!-- preloader end -->
    {{-- <x-top-notification /> --}}
    <x-common.top-notification :message="$message" />
    <x-common.header />
    <x-common.menu-main />
    <main>
        <!-- breadcrumb start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="col">
                    <div class="row">
                        <div class="breadcrumb-index">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-ul">
                                <li class="breadcrumb-li">
                                    <a class="breadcrumb-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-li">
                                    <span class="breadcrumb-text">About us</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- about-area start -->
        <section class="about-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-content">
                            <!-- about title start -->
                            <div class="section-capture">
                                <div class="section-title">
                                    <h2 data-animate="animate__fadeIn"><span>About us</span></h2>
                                </div>
                            </div>
                            <!-- about title end -->
                            <!-- about banner start -->
                            <div class="about-banner">
                                <div class="about-banner-area section-pt">
                                    <ul class="about-ul">
                                        <!-- about img start -->
                                        <li class="about-li about-company">
                                            <img src="{{ asset('store/image/home1/about-us/our-company.png') }}" class="img-fluid"
                                                alt="our-company">
                                        </li>
                                        <!-- about img end -->
                                        <!-- about desc start -->
                                        <li class="about-li abt-desc">
                                            <h6 data-animate="animate__fadeIn">Our company</h6>
                                            <p data-animate="animate__fadeIn">Lorem ipsum dolor sit amet conse ctetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur
                                                adipisicing elit.</p>
                                        </li>
                                        <!-- about desc end -->
                                    </ul>
                                </div>
                                <div class="about-banner-area section-pt">
                                    <ul class="about-ul">
                                        <!-- about img start -->
                                        <li class="about-li about-company">
                                            <img src="{{ asset('store/image/home1/about-us/team-work.png') }}" class="img-fluid" alt="team-work">
                                        </li>
                                        <!-- about img end -->
                                        <!-- about desc start -->
                                        <li class="about-li abt-desc">
                                            <h6 data-animate="animate__fadeIn">Team work</h6>
                                            <p data-animate="animate__fadeIn">Lorem ipsum dolor sit amet conse ctetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur
                                                adipisicing elit.</p>
                                        </li>
                                        <!-- about desc end -->
                                    </ul>
                                </div>
                            </div>
                            <!-- about banner end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area end -->
        <!-- about-vision start-->
        <section class="about-vision bg-color section-pt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="abt-vision">
                            <ul class="abt-vision-ul">
                                <li class="abt-vision-li" data-animate="animate__fadeIn">
                                    <div class="abt-vision-content">
                                        <img src="{{ asset('store/image/home1/about-us/our-mission.png') }}" class="img-fluid" alt="Our-mission">
                                        <h6 data-animate="animate__fadeIn">Our mission</h6>
                                        <p data-animate="animate__fadeIn">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </li>
                                <li class="abt-vision-li" data-animate="animate__fadeIn">
                                    <div class="abt-vision-content">
                                        <img src="{{ asset('store/image/home1/about-us/our-vision.png') }}" class="img-fluid" alt="Our-vision">
                                        <h6 data-animate="animate__fadeIn">Our vision</h6>
                                        <p data-animate="animate__fadeIn">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </li>
                                <li class="abt-vision-li" data-animate="animate__fadeIn">
                                    <div class="abt-vision-content">
                                        <img src="{{ asset('store/image/home1/about-us/our-idea.png') }}" class="img-fluid" alt="Our-idea">
                                        <h6 data-animate="animate__fadeIn">Our idea</h6>
                                        <p data-animate="animate__fadeIn">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-vision end-->
        <!-- project-count start-->
        <section class="project-count bg-color section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="single-count">
                            <ul>
                                <li class="count-wrap" data-animate="animate__fadeIn">
                                    <!-- project info start -->
                                    <div class="count-info">
                                        <div class="count">
                                            <span class="count-number">10</span>
                                            <span>+</span>
                                        </div>
                                        <h6>Years</h6>
                                    </div>
                                    <!-- project info end -->
                                    <!-- project icon start -->
                                    <div class="counter-icon">
                                        <a href="javascript:void(0)"><i class="feather-briefcase"></i></a>
                                    </div>
                                    <!-- project icon end -->
                                </li>
                                <li class="count-wrap" data-animate="animate__fadeIn">
                                    <!-- project info start -->
                                    <div class="count-info">
                                        <div class="count">
                                            <span class="count-number">100</span>
                                            <span>+</span>
                                        </div>
                                        <h6>Clients</h6>
                                    </div>
                                    <!-- project info end -->
                                    <!-- project icon start -->
                                    <div class="counter-icon">
                                        <a href="javascript:void(0)"><i class="feather-users"></i></a>
                                    </div>
                                    <!-- project icon end -->
                                </li>
                                <li class="count-wrap" data-animate="animate__fadeIn">
                                    <!-- project info start -->
                                    <div class="count-info">
                                        <div class="count">
                                            <span class="count-number">50</span>
                                            <span>+</span>
                                        </div>
                                        <h6>Shops</h6>
                                    </div>
                                    <!-- project info end -->
                                    <!-- project icon start -->
                                    <div class="counter-icon">
                                        <a href="javascript:void(0)"><i class="feather-home"></i></a>
                                    </div>
                                    <!-- project icon end -->
                                </li>
                                <li class="count-wrap" data-animate="animate__fadeIn">
                                    <!-- project info start -->
                                    <div class="count-info">
                                        <div class="count">
                                            <span class="count-number">17</span>
                                            <span>M+</span>
                                        </div>
                                        <h6>Sales</h6>
                                    </div>
                                    <!-- project info end -->
                                    <!-- project icon start -->
                                    <div class="counter-icon">
                                        <a href="javascript:void(0)"><i class="feather-bookmark"></i></a>
                                    </div>
                                    <!-- project icon end -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-count end-->
        <!-- about-team start-->
        <section class="about-team section-pt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="our-team">
                            <div class="section-capture">
                                <div class="section-title">
                                    <h2><span class="title-main" data-animate="animate__fadeIn">Our team</span></h2>
                                </div>
                            </div>
                            <div class="team-wrap">
                                <ul class="team-ul">
                                    <li class="team-li" data-animate="animate__fadeIn">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('store/image/home1/team/team-1.jpg') }}" class="img-fluid" alt="team-1">
                                        </a>
                                        <div class="team-info">
                                            <h6>Johnny walker</h6>
                                            <span>Web designer</span>
                                        </div>
                                    </li>
                                    <li class="team-li" data-animate="animate__fadeIn">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('store/image/home1/team/team-2.jpg') }}" class="img-fluid" alt="team-2">
                                        </a>
                                        <div class="team-info">
                                            <h6>Rebecca flex</h6>
                                            <span>Support staff</span>
                                        </div>
                                    </li>
                                    <li class="team-li" data-animate="animate__fadeIn">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('store/image/home1/team/team-3.jpg') }}" class="img-fluid" alt="team-3">
                                        </a>
                                        <div class="team-info">
                                            <h6>Jan ringo</h6>
                                            <span>Deputy sale</span>
                                        </div>
                                    </li>
                                    <li class="team-li" data-animate="animate__fadeIn">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('store/image/home1/team/team-4.jpg') }}" class="img-fluid" alt="team-4">
                                        </a>
                                        <div class="team-info">
                                            <h6>Ringo kai</h6>
                                            <span>Policy member</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-team end-->
        <!-- news-letter start -->
        <section class="news-letter">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="newsletter-wrapper">
                            <div class="news-bg" style="background-image: url('image/home1/bg.jpg');">
                                <div class="newsletter">
                                    <div class="main-title fade-in" data-fade-in="">
                                        <h2>Subscribe newsletter</h2>
                                        <span>Sign up for our newsletter to receive special offers</span>
                                    </div>
                                    <div class="subscribe-content">
                                        <form method="post" id="contact_form" accept-charset="UTF-8"
                                            class="contact-form">
                                            <input type="hidden" name="form_type" value="customer">
                                            <input type="hidden" name="utf8" value="✓">
                                            <input type="hidden" name="contact[tags]" value="newsletter">
                                            <div class="subscribe-block">
                                                <input type="email" name="contact[email]" class="email mail"
                                                    id="E-mail" value="" placeholder="Enter your email"
                                                    autocapitalize="off" required="">
                                                <!-- <button type="submit" name="commit" id="Subscribe"><i class="feather-mail"></i></button> -->
                                                <button class="btn btn-small1">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-letter end -->
    </main>
    <x-common.footer />
    <x-common.mobile-vega />
    <x-common.mobile-menu />
    <x-common.search-modal />
    <x-common.cart-drawer />
    <x-common.bottom-menu />
    {{-- <x-common.quickview-modal /> --}}
    <!-- fullscreen start -->
    <div class="bg-screen"></div>
    <!-- fullscreen end -->
    <!-- back-to-top start -->
    <a href="javascript:void(0)" id="top" class="scroll"><span><i class="feather-arrow-up"></i></span></a>
    <!-- back-to-top end -->
@endsection

