@extends('layouts.layout')
@section('title')
    <title>Bài viết - Kwapp Store</title>
@endsection
@section('meta')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="kwapp">
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
    <main>
        <x-common.breadcrumb :list="[
            ['name' => 'Home', 'link' => route('home')],
            ['name' => 'Blogs', 'link' => route('blogs')],
        ]" />
        <!-- article-area start -->
        <section class="article-area section-pt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="blog-grid-wrapper left-side">
                            <div class="blog-grid-wrap  blog-sidebar">
                                <!-- blog sidebar start -->
                                <div class="blog-sidebar-wrap">
                                    <!-- blog-sidebar search start -->
                                    <div class="blog-post-sidebar blog-search" data-animate="animate__fadeIn">
                                        <h6 class="blog-sidebar-title" data-animate="animate__fadeIn">Search</h6>
                                        <div class="search-post">
                                            <form method="get">
                                                <input type="search" name="q" class="input-text"
                                                    placeholder="Search blog" required autocomplete="off">
                                                <a href="search-blog.html" class="btn-search"><i
                                                        class="feather-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- blog-sidebar search end -->
                                    <!-- blog-sidebar recent-post start -->
                                    <div class="blog-post-sidebar blog-recent-post">
                                        <h6 class="blog-sidebar-title" data-animate="animate__fadeIn">Recent post</h6>
                                        <div class="sidbar-inner sidbar-inner-wrap">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img"
                                                    data-animate="animate__fadeIn">
                                                    <img src="{{ asset('store/image/home1/blog/blog-big.jpg') }}" class="img-fluid"
                                                        alt="blog1">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content" data-animate="animate__fadeIn">
                                                <h6>
                                                    <a href="article-post-right.html">Stay connected to the future with our
                                                        electronic range.</a>
                                                </h6>
                                                <span>Jan 06, 2025</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner" data-animate="animate__fadeIn">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img">
                                                    <img src="{{ asset('store/image/home1/blog/blog-mini-1.jpg') }}" class="img-fluid"
                                                        alt="blog-1">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content banner-img">
                                                <h6><a href="article-post-right.html">Empowering homes with our range of
                                                        electronic solutions</a></h6>
                                                <span>Feb 08, 2025</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog-sidebar recent-post end -->
                                    <!-- blog-sidebar tag start -->
                                    <div class="blog-post-sidebar blog-tags" data-animate="animate__fadeIn">
                                        <h6 class="blog-sidebar-title">Tag</h6>
                                        <div class="sidebartag">
                                            <ul class="sidebar-tag">
                                                <li><a href="article-post-right.html">Android</a></li>
                                                <li><a href="article-post-right.html">Blog</a></li>
                                                <li><a href="article-post-right.html">Device</a></li>
                                                <li><a href="article-post-right.html">Engineer</a></li>
                                                <li><a href="article-post-right.html">Gadget</a></li>
                                                <li><a href="article-post-right.html">Mobile</a></li>
                                                <li><a href="article-post-right.html">News</a></li>
                                                <li><a href="article-post-right.html">Raspberrypi</a></li>
                                                <li><a href="article-post-right.html">Robot</a></li>
                                                <li><a href="article-post-right.html">Smartphone</a></li>
                                                <li><a href="article-post-right.html">Techie</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- blog-sidebar tag end -->
                                </div>
                                <!-- blog sidebar end -->
                            </div>
                            <div class="blog-grid-wrap blog-article">
                                <div class="blog-grid-view">
                                    <ul class="blog-area-wrap">
                                        <li class="blog-slider" data-animate="animate__fadeIn">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="article-post.html" class="blog-img banner-img">
                                                        <img src="{{ asset('store/image/home1/blog/blog-1.jpg') }}" class="blog-img img-fluid"
                                                            alt="blog-1">
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <div class="blogtitle-like">
                                                        <h6 class="blog-title">Stay connected to the future with our
                                                            electronic range.</h6>
                                                        <a class="blog-comment" href="article.html">
                                                            <span class="icon"><i class="feather-heart"></i></span>
                                                            <span class="count">0</span>
                                                        </a>
                                                    </div>
                                                    <p class="blog-desc">It is a long established fact that a reader will
                                                        be by the readable content at its layout.</p>
                                                    <a href="blog-details.html" class="video-btn">
                                                    </a>
                                                    <span class="date-time">03 Oct 2025</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="paginatoin-area" data-animate="animate__fadeIn">
                                        <ul class="pagination-page-box">
                                            <li class="number active"><a href="javascript:void(0)"
                                                    class="theme-glink">1</a></li>
                                            <li class="number"><a href="javascript:void(0)" class="gradient-text">2</a>
                                            </li>
                                            <li class="page-next"><a href="javascript:void(0)" class="theme-glink"><i
                                                        class="fa -solid fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- article-area end -->
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
@endsection
