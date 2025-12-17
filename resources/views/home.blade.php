@extends('layouts.layout')
@section('title')
    <title>Trang chủ - Kwapp Store</title>
@endsection
@section('meta')
    <meta name="description"
        content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
    <meta name="keywords"
        content="medical theme, vegetables, medicine store, eCommerce html template, responsive, multipurpose, mask, sanitizer, eCommerce store, health, tables, dental, healthcare, pharmacy, herbal, medicine shop">
    <meta name="author" content="spacingtech_webify">
@endsection
@section('styles')
    <!-- plugin css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/plugin.css') }}">
    <!-- collection css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/collection2.css') }}">
    <!-- feather -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/feather.css') }}">
    <!-- blog css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/blog.css') }}">
    <!-- other-pages css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/other-pages.css') }}">
    <!-- product-page css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/product-page.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/style2.css') }}">
@endsection
@section('content')
    <!-- screen-bg start -->
    <div class="screen-bg"></div>
    <!-- screen-bg end -->
    <!-- preloader start -->
    <div class="preloader"></div>
    @if (isset($show_newsletter_modal) && $show_newsletter_modal)
        <x-common.newsletter-modal />
    @endif
    <!-- preloader end -->

    <x-common.top-notification :message="$message" />
    <x-common.header />
    <x-common.menu-main />
    <!-- main start -->
    <main id="main">
        <x-common.main-slider />
        <x-common.cat-banner-area />
        <!-- deal-slider start -->
        {{-- <section class="deal-category section-pb">
        <div class="container-fluid">
            <div class="collection-category">
                <div class="section-capture">
                    <div class="section-title">
                        <span data-animate="animate__fadeIn">Weekly best offer</span>
                        <h2 data-animate="animate__fadeIn">Deal of the day</h2>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button class="swiper-prev swiper-prev-deal2"><i class="ri-arrow-left-line"></i></button>
                            <button class="swiper-next swiper-next-deal2"><i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                </div>
                <div class="deal-category">
                    <div class="deal-wrap">
                        <div class="deal-slider collection-slider swiper" id="deal-cat2">
                            <div class="swiper-wrapper">
                                @foreach ($top_products as $product)
                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                    <x-product.single-product-wrap :product="$product" />
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
        <!-- category-slider end -->
        <x-common.offer-area />
        {{-- <x-product.product-tab-area :productByCategories="$productByCategories" /> --}}
        <!-- banner3 start -->
        <section class="banner3 section-pb">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <ul class="banner-block">
                            <li class="banner-wrapper text-top">
                                <span class="banner-hover">
                                    <img src="{{ asset('store/image/home2/banner/banner-home-1.jpg') }}" class="img-fluid"
                                        alt="electronics-banner-01">
                                    <span class="banner3-content">
                                        <span class="banner-subtitle" data-animate="animate__fadeIn">Get 30% discount</span>
                                        <span class="banne3title" data-animate="animate__fadeIn">Gaming cabinet</span>
                                    </span>
                                </span>
                            </li>
                            <li class="banner-wrapper text-left">
                                <span class="banner-hover">
                                    <img src="{{ asset('store/image/home2/banner/banner-home-2.jpg') }}" class="img-fluid"
                                        alt="electronics-banner-01">
                                    <span class="banner3-content">
                                        <span class="banner-subtitle" data-animate="animate__fadeIn">Start from<span
                                                class="sub-color">$199.99</span></span>
                                        <span class="banne3title" data-animate="animate__fadeIn">Tech with a human
                                            touch</span>
                                        <a data-animate="animate__fadeIn" href="collection.html"
                                            class="btn btn btn-style2 button-link">Shop now</a>
                                    </span>
                                </span>
                            </li>
                            <li class="banner-wrapper text-top">
                                <span class="banner-hover">
                                    <img src="{{ asset('store/image/home2/banner/banner-home-3.jpg') }}" class="img-fluid"
                                        alt="electronics-banner-01">
                                    <span class="banner3-content">
                                        <span class="banner-subtitle" data-animate="animate__fadeIn">Sale up to 50%
                                            off</span>
                                        <span class="banne3title" data-animate="animate__fadeIn">Home cleaner</span>
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner3 end -->
        <x-product.featured-area />
        <x-common.brand-area />
        <x-common.banner-area />
        <x-product.trending-area />
        <x-common.newsletter-area />
        <x-common.blog-section :blogs="$blogs" />
        <x-common.service-area />
    </main>
    <!-- main end -->
    <x-common.footer />
    <x-common.mobile-vega />
    <x-common.mobile-menu />
    <x-common.search-modal />
    <x-common.cart-drawer />
    <x-common.bottom-menu />
    <!-- fullscreen start -->
    <div class="bg-screen"></div>
    <!-- fullscreen end -->
    <!-- back-to-top start -->
    <a href="javascript:void(0)" id="top" class="scroll"><span><i class="feather-arrow-up"></i></span></a>
    <!-- back-to-top end -->
@endsection
