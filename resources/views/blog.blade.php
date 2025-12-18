@extends('layouts.layout')
@section('title')
    <title>{{ $blog->title }}</title>
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
                                    <a class="breadcrumb-link" href="index1.html">Home</a>
                                </li>
                                <li class="breadcrumb-li">
                                    <span class="breadcrumb-text">news</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- article-area start -->
        <section class="article-area section-pt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="blog-article-wrapper left-side">
                            <div class="blog-article-wrap blog-sidebar">
                                <!-- blog sidebar start -->
                                <div class="blog-sidebar-wrap">
                                    <!-- blog-sidebar search start -->
                                    <div class="blog-post-sidebar blog-search" data-animate="animate__fadeIn">
                                        <h6 class="blog-sidebar-title">Search</h6>
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
                                                    <img src="image/home1/blog/blog-big.jpg" class="img-fluid"
                                                        alt="blog1">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content" data-animate="animate__fadeIn">
                                                <h6>
                                                    <a href="article-post-right.html">Wel illum qui dolorem eum fugiat?</a>
                                                </h6>
                                                <span>May 06, 2025</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img"
                                                    data-animate="animate__fadeIn">
                                                    <img src="image/home1/blog/blog-mini-1.jpg" class="img-fluid"
                                                        alt="blog-1">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content banner-img" data-animate="animate__fadeIn">
                                                <h6><a href="article-post-right.html">Nisi ut aliquid ex ea commodi?</a>
                                                </h6>
                                                <span>May 06, 2025</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img"
                                                    data-animate="animate__fadeIn">
                                                    <img src="image/home1/blog/blog-mini-2.jpg" class="img-fluid"
                                                        alt="blog-2">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content" data-animate="animate__fadeIn">
                                                <h6>
                                                    <a href="article-post-right.html">Which of us ever undertakes?</a>
                                                </h6>
                                                <span>May 06, 2025</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img"
                                                    data-animate="animate__fadeIn">
                                                    <img src="image/home1/blog/blog-mini-3.jpg" class="img-fluid"
                                                        alt="blog-3">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content" data-animate="animate__fadeIn">
                                                <h6>
                                                    <a href="article-post-right.html">Where can i get some?</a>
                                                </h6>
                                                <span>May 06, 2025</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img"
                                                    data-animate="animate__fadeIn">
                                                    <img src="image/home1/blog/blog-mini-4.jpg" class="img-fluid"
                                                        alt="blog-4">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content" data-animate="animate__fadeIn">
                                                <h6>
                                                    <a href="article-post-right.html">Who avoids a pain that produces?</a>
                                                </h6>
                                                <span>May 06, 2025</span>
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
                            <div class="blog-article-wrap blog-article">
                                <!-- blog single-post start -->
                                <div class="article-blog-post">
                                    <!-- blog img start -->
                                    <div class="blog-post-opt blog-post-img">
                                        <div class="blog-image">
                                            <a href="article-post-right.html" class="banner-img"
                                                data-animate="animate__fadeIn">
                                                <img src="image/home1/blog//blog-big.jpg" class="img-fluid"
                                                    alt="article-01">
                                            </a>
                                            <ul>
                                                <!-- blog-date start -->
                                                <li class="date-time" data-animate="animate__fadeIn">
                                                    <span>Sep 25, 2025</span>
                                                </li>
                                                <!-- blog-date end -->
                                                <!-- blog-comment start -->
                                                <li class="blog-comment" data-animate="animate__fadeIn">
                                                    <span class="comment-count">2 comments</span>
                                                </li>
                                                <!-- blog-comment end -->
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- blog img start -->
                                    <!-- blog title start -->
                                    <div class="blog-post-opt blog-post-title">
                                        <div class="blog-revert">
                                            <h6 class="post-title" data-animate="animate__fadeIn">Wel illum qui dolorem
                                                eum fugiat?</h6>
                                            <!-- blog-info start -->
                                            <div class="post-info" data-animate="animate__fadeIn">
                                                <span>By Spacing Tech</span>
                                            </div>
                                            <!-- blog-info end -->
                                        </div>
                                    </div>
                                    <!-- blog title end -->
                                    <!-- blog content start -->
                                    <div class="blog-post-opt blog-post-content">
                                        <div class="blog-content">
                                            <div class="blog-wrap-desc" data-animate="animate__fadeIn">
                                                <p class="blog-desc" data-animate="animate__fadeIn">Lorem ipsum dolor sit
                                                    amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget
                                                    dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis
                                                    parturient montesti, nascetur ridiculus mus. Donec quam felis, ultricies
                                                    nec, pellentesque eutu, pretiumem. Nulla consequat massa quis enim.
                                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                                    enim justotuio, rhoncus ut loret, imperdiet a, venenatis vitae, justo.
                                                    Nullam dictum felis eu pede mollis pretium. Intege</p>
                                                <p class="blog-desc" data-animate="animate__fadeIn">Lorem ipsum dolor sit
                                                    amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget
                                                    dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis
                                                    parturient montesti, nascetur ridiculus mus. Donec quam felis, ultricies
                                                    nec, pellentesque eutu, pretiumem. Nulla consequat massa quis enim.
                                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                                    enim justotuio, rhoncus ut loret, imperdiet a, venenatis vitae, justo.
                                                    Nullam dictum.</p>
                                                <div>
                                                    <blockquote>Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                                        doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu
                                                        sociis natoque penatibus et magnis dis parturient montesti, nascetur
                                                        ridiculus mus. Donec quam felis, ultricies nec,</blockquote>
                                                </div>
                                                <p class="blog-desc" data-animate="animate__fadeIn">Lorem ipsum dolor sit
                                                    amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget
                                                    dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis
                                                    parturient montesti, nascetur ridiculus mus. Donec quam felis, ultricies
                                                    nec, pellentesque eutu, pretiumem. Nulla consequat massa quis enim.
                                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                                    enim justotuio, rhoncus ut loret, imperdiet a, venenatis vitae, justo.
                                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras
                                                    dapibus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog content end -->
                                    <!-- blog tag start -->
                                    <div class="blog-post-opt blog-post-teg" data-animate="animate__fadeIn">
                                        <div class="post-info-tag">
                                            <ul class="post-tag">
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
                                    <!-- blog tag end -->
                                    <!-- blog share start -->
                                    <div class="blog-post-opt blog-post-icon">
                                        <div class="blog-share">
                                            <ul class="social-icon" data-animate="animate__fadeIn">
                                                <!-- facebook-icon start -->
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <span class="icon-social facebook"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                                <path
                                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                                </path>
                                                            </svg></span>
                                                    </a>
                                                </li>
                                                <!-- facebook-icon end -->
                                                <!-- twitter-icon start -->
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <span class="icon-social twitter"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path
                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                </path>
                                                            </svg></span>
                                                    </a>
                                                </li>
                                                <!-- twitter-icon end -->
                                                <!-- pinterest-icon start -->
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <span class="icon-social pinterest"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path
                                                                    d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z">
                                                                </path>
                                                            </svg></span>
                                                    </a>
                                                </li>
                                                <!-- pinterest-icon end -->
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- blog share end -->
                                    <!-- blog-arrow start -->
                                    <div class="blog-post-opt blog-post-arrow">
                                        <div class="blog-prev-next">
                                            <ul data-animate="animate__fadeIn">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="feather-chevrons-left"></i>
                                                        <span>Prev post</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <span>Next post</span>
                                                        <i class="feather-chevrons-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- blog-arrow end -->
                                </div>
                                <!-- blog single-post end -->
                                <!-- blog post comment start -->
                                <div class="blog-comments">
                                    <div class="review-comment">
                                        <div class="cmt-tit-count" data-animate="animate__fadeIn">
                                            <h6 class="comment-title">
                                                <span class="cmt-title">Comment</span>
                                                <span class="cmt-count">(1)</span>
                                            </h6>
                                        </div>
                                        <div class="cmt-info-wrap">
                                            <div class="comment-info">
                                                <div class="comment-avtar" data-animate="animate__fadeIn">
                                                    <div class="review-name">
                                                        <span class="avtar-cmt">
                                                            <span class="cmt-auth">Ol</span>
                                                        </span>
                                                    </div>
                                                    <div class="review-info">
                                                        <span class="cmt-authr">Oliver jake</span>
                                                        <span class="time">May 14, 2025</span>
                                                    </div>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-desc" data-animate="animate__fadeIn">
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                                            aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                            voluptatem sequi nesciunt.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-comment-form">
                                        <form method="post" class="comment-form">
                                            <div class="comments-reply-area">
                                                <h6 class="comment-title" data-animate="animate__fadeIn">Leave a comment
                                                </h6>
                                                <div class="form-wrap">
                                                    <div class="form-filed" data-animate="animate__fadeIn">
                                                        <label>Name<span class="required">*</span></label>
                                                        <input type="text" name="comment[author]" placeholder="Name">
                                                    </div>
                                                    <div class="form-filed" data-animate="animate__fadeIn">
                                                        <label>Email address<span class="required">*</span></label>
                                                        <input type="text" name="comment[author]"
                                                            placeholder="Email address">
                                                    </div>
                                                    <div class="form-filed" data-animate="animate__fadeIn">
                                                        <label>Message<span class="required">*</span></label>
                                                        <textarea rows="5" class="comment-notes" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="comment-form-submit" data-animate="animate__fadeIn">
                                                    <button class="btn btn-style2">Post comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- blog post comment end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- article-area end -->
        <!-- blog-section start -->
        <section class="blog-area section-pt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <h2 data-animate="animate__fadeIn">
                                    <span>Our news and blog</span>
                                </h2>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="blog-slider owl-carousel owl-theme owl-loaded owl-drag" id="blog-slider1">
                                <div class="item" data-animate="animate__fadeIn">
                                    <div class="blog-post">
                                        <div class="blog-main-img">
                                            <a href="article-post.html" class="blog-img banner-img">
                                                <img src="image/home1/blog/blog-1.jpg" class="blog-img img-fluid"
                                                    alt="blog-1">
                                            </a>
                                        </div>
                                        <div class="blog-post-content">
                                            <div class="blogtitle-like">
                                                <h6 class="blog-title">Where can i get some ?</h6>
                                                <a class="blog-comment" href="article.html">
                                                    <span class="icon"><i class="feather-heart"></i></span>
                                                    <span class="count">0</span>
                                                </a>
                                            </div>

                                            <p class="blog-desc">It is a long established fact that a reader will be by the
                                                readable content at its layout.</p>
                                            <a href="blog-details.html" class="video-btn">
                                            </a>
                                            <span class="date-time">16 Oct 2025</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" data-animate="animate__fadeIn">
                                    <div class="blog-post">
                                        <div class="blog-main-img">
                                            <a href="article-post.html" class="blog-img banner-img">
                                                <img src="image/home1/blog/blog-2.jpg" class="blog-img img-fluid"
                                                    alt="blog-2">
                                            </a>
                                        </div>
                                        <div class="blog-post-content">
                                            <div class="blogtitle-like">
                                                <h6 class="blog-title">Where can i get some ?</h6>
                                                <a class="blog-comment" href="article.html">
                                                    <span class="icon"><i class="feather-heart"></i></span>
                                                    <span class="count">0</span>
                                                </a>
                                            </div>

                                            <p class="blog-desc">It is a long established fact that a reader will be by the
                                                readable content at its layout.</p>
                                            <a href="blog-details.html" class="video-btn">
                                            </a>
                                            <span class="date-time">16 Oct 2025</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" data-animate="animate__fadeIn">
                                    <div class="blog-post">
                                        <div class="blog-main-img">
                                            <a href="article-post.html" class="blog-img banner-img">
                                                <img src="image/home1/blog/blog-3.jpg" class="blog-img img-fluid"
                                                    alt="blog-3">
                                            </a>
                                        </div>
                                        <div class="blog-post-content">
                                            <div class="blogtitle-like">
                                                <h6 class="blog-title">Where can i get some ?</h6>
                                                <a class="blog-comment" href="article.html">
                                                    <span class="icon"><i class="feather-heart"></i></span>
                                                    <span class="count">0</span>
                                                </a>
                                            </div>

                                            <p class="blog-desc">It is a long established fact that a reader will be by the
                                                readable content at its layout.</p>
                                            <a href="blog-details.html" class="video-btn">
                                            </a>
                                            <span class="date-time">16 Oct 2025</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" data-animate="animate__fadeIn">
                                    <div class="blog-post">
                                        <div class="blog-main-img">
                                            <a href="article-post.html" class="blog-img banner-img">
                                                <img src="image/home1/blog/blog-4.jpg" class="blog-img img-fluid"
                                                    alt="blog-4">
                                            </a>
                                        </div>
                                        <div class="blog-post-content">
                                            <div class="blogtitle-like">
                                                <h6 class="blog-title">Where can i get some ?</h6>
                                                <a class="blog-comment" href="article.html">
                                                    <span class="icon"><i class="feather-heart"></i></span>
                                                    <span class="count">0</span>
                                                </a>
                                            </div>

                                            <p class="blog-desc">It is a long established fact that a reader will be by the
                                                readable content at its layout.</p>
                                            <a href="blog-details.html" class="video-btn">
                                            </a>
                                            <span class="date-time">16 Oct 2025</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" data-animate="animate__fadeIn">
                                    <div class="blog-post">
                                        <div class="blog-main-img">
                                            <a href="article-post.html" class="blog-img banner-img">
                                                <img src="image/home1/blog/blog-5.jpg" class="blog-img img-fluid"
                                                    alt="blog-5">
                                            </a>
                                        </div>
                                        <div class="blog-post-content">
                                            <div class="blogtitle-like">
                                                <h6 class="blog-title">Where can i get some ?</h6>
                                                <a class="blog-comment" href="article.html">
                                                    <span class="icon"><i class="feather-heart"></i></span>
                                                    <span class="count">0</span>
                                                </a>
                                            </div>

                                            <p class="blog-desc">It is a long established fact that a reader will be by the
                                                readable content at its layout.</p>
                                            <a href="blog-details.html" class="video-btn">
                                            </a>
                                            <span class="date-time">16 Oct 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-section end -->
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
