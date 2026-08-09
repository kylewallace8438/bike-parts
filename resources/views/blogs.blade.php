@extends('layouts.layout')
@section('title')
    <title>Blogs - Kwapp Store</title>
@endsection
@section('meta')
    <meta name="description" content="123">
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
        <!-- breadcrumb start -->
        @php
            $list = [
                ['name' => 'Trang chủ', 'link' => route('home')],
                ['name' => 'Blogs', 'link' => route('blogs')],
            ];
        @endphp
        <x-common.breadcrumb :list="$list">
        </x-common.breadcrumb>
        <!-- breadcrumb end -->
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
                                    <div class="blog-post-sidebar blog-search animate__fadeIn animate__animated"
                                        data-animate="animate__fadeIn">
                                        <h6 class="blog-sidebar-title animate__fadeIn animate__animated"
                                            data-animate="animate__fadeIn">Search</h6>
                                        <div class="search-post">
                                            <form method="get">
                                                <input type="search" name="q" class="input-text"
                                                    placeholder="Search blog" required="" autocomplete="off">
                                                <a href="search-blog.html" class="btn-search"><i
                                                        class="feather-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- blog-sidebar search end -->
                                    <!-- blog-sidebar recent-post start -->
                                    <div class="blog-post-sidebar blog-recent-post">
                                        <h6 class="blog-sidebar-title animate__fadeIn animate__animated"
                                            data-animate="animate__fadeIn">Recent post</h6>
                                        <div class="sidbar-inner sidbar-inner-wrap">
                                            <div class="post-image">
                                                <a href="article-post-right.html"
                                                    class="banner-img animate__fadeIn animate__animated"
                                                    data-animate="animate__fadeIn">
                                                    <img src="image/home1/blog/blog-big.jpg" class="img-fluid"
                                                        alt="blog1">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content animate__fadeIn animate__animated"
                                                data-animate="animate__fadeIn">
                                                <h6>
                                                    <a href="article-post-right.html">Stay connected to the future with our
                                                        electronic range.</a>
                                                </h6>
                                                <span>Jan 06, 2025</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner animate__fadeIn animate__animated"
                                            data-animate="animate__fadeIn">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img">
                                                    <img src="image/home1/blog/blog-mini-1.jpg" class="img-fluid"
                                                        alt="blog-1">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content banner-img">
                                                <h6><a href="article-post-right.html">Empowering homes with our range of
                                                        electronic solutions</a></h6>
                                                <span>Feb 08, 2025</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner animate__fadeIn animate__animated"
                                            data-animate="animate__fadeIn">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img">
                                                    <img src="image/home1/blog/blog-mini-2.jpg" class="img-fluid"
                                                        alt="blog-2">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content">
                                                <h6>
                                                    <a href="article-post-right.html">We offer warranty, but with our
                                                        services, you won’t need it</a>
                                                </h6>
                                                <span>Oct 23, 2025</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner animate__fadeIn animate__animated"
                                            data-animate="animate__fadeIn">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img">
                                                    <img src="image/home1/blog/blog-mini-3.jpg" class="img-fluid"
                                                        alt="blog-3">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content">
                                                <h6>
                                                    <a href="article-post-right.html">We’re licensed and our team trained
                                                        per the industry standard</a>
                                                </h6>
                                                <span>Mar 26, 2025</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner animate__fadeIn animate__animated"
                                            data-animate="animate__fadeIn">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img">
                                                    <img src="image/home1/blog/blog-mini-4.jpg" class="img-fluid"
                                                        alt="blog-4">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content">
                                                <h6>
                                                    <a href="article-post-right.html">Stay connected to the future with our
                                                        electronic range.</a>
                                                </h6>
                                                <span>May 06, 2025</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog-sidebar recent-post end -->
                                    <!-- blog-sidebar tag start -->
                                    <div class="blog-post-sidebar blog-tags animate__fadeIn animate__animated"
                                        data-animate="animate__fadeIn">
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
                                        @forelse ($blogs as $blog)
                                            <li class="blog-slider animate__fadeIn animate__animated"
                                            data-animate="animate__fadeIn">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="{{ route('blog', ['slug' => $blog->slug]) }}" class="blog-img banner-img">
                                                        <img src="{{ $blog->image_url() }}" class="blog-img img-fluid"
                                                            alt="blog-1">
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <div class="blogtitle-like">
                                                        <h6 class="blog-title">{{ $blog->title }}</h6>
                                                        <a class="blog-comment" href="article.html">
                                                            <span class="icon"><i class="feather-heart"></i></span>
                                                            <span class="count">0</span>
                                                        </a>
                                                    </div>
                                                    <p class="blog-desc">{{ $blog->short_description }}</p>
                                                    <a href="blog-details.html" class="video-btn">
                                                    </a>
                                                    <span class="date-time">{{ $blog->posted_at->format('d M Y') }}</span>
                                                </div>
                                            </div>
                                        </li>
                                        @empty
                                            
                                        @endforelse
                                        
                                    </ul>
                                    <div class="paginatoin-area" data-animate="animate__fadeIn">
                                        <ul class="pagination-page-box">
                                            <li class="number active"><a href="javascript:void(0)"
                                                    class="theme-glink">1</a></li>
                                            <li class="number"><a href="javascript:void(0)" class="gradient-text">2</a>
                                            </li>
                                            <li class="page-next"><a href="javascript:void(0)" class="theme-glink"><svg
                                                        class="svg-inline--fa fa-angle-right fa-w-8 -solid"
                                                        aria-hidden="true" focusable="false" data-prefix="fa"
                                                        data-icon="angle-right" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                        </path>
                                                    </svg><!-- <i class="fa -solid fa-angle-right"></i> Font Awesome fontawesome.com --></a>
                                            </li>
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
