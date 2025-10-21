@extends('layouts.v3.layout')
@section('title')
<title>Trang chủ - Kwapp Store</title>
@endsection
@section('meta')
<meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
<meta name="keywords" content="medical theme, vegetables, medicine store, eCommerce html template, responsive, multipurpose, mask, sanitizer, eCommerce store, health, tables, dental, healthcare, pharmacy, herbal, medicine shop">
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

@section('content')
<!-- screen-bg start -->
<div class="screen-bg"></div>
<!-- screen-bg end -->
<!-- preloader start -->
<div class="preloader"></div>
@include('layouts.v3.components.newsletter_modal')
<!-- preloader end -->
@include('layouts.v3.components.top_notification')
@include('layouts.v3.components.header')
@include('layouts.v3.components.menu_main')
<!-- main start -->
<main id="main">
    <!-- main-slider start -->
    <section class="slider-content">
    <div class="home-slider owl-carousel owl-theme" id="home-slider">
        <div class="item">
            <div class="slider-image">
                <div class="slide-img">
                    <img src="{{ asset('store/image/home2/slider/slider1.jpg') }}" class="img-fluid desk-img" alt="slider-1">
                    <img src="{{ asset('store/image/home2/slider/mobile-slider1.jpg') }}" class="img-fluid resp-img" alt="mobile-slider1">
                </div>
                <div class="container-fluid slider-text-info">
                    <div class="slider-text-content">
                        <span class="sub-title">Elevate Your Gaming Skills</span>
                        <h2><span>Best gaming keyboard</span></h2>
                        <div class="pricemain">
                            <span class="product-price">From</span>
                            <span class="product-price2">$899.99</span>
                            <span class="product-price3">$999.99</span>
                        </div>
                        <a href="collection.html" class="btn-shop btn btn-style">
                            <span class="shopnow">Shop now</span>
                        </a>
                        <a href="collection.html" class="btn-collection btn btn-style">
                            <span class="shopnow">collection</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-image">
                <div class="slide-img">
                    <img src="{{ asset('store/image/home2/slider/slider2.jpg') }}" class="img-fluid desk-img" alt="slider-2">
                    <img src="{{ asset('store/image/home2/slider/mobile-slider2.jpg') }}" class="img-fluid resp-img" alt="mobile-slider2">
                </div>
                <div class="container-fluid slider-text-info">
                    <div class="slider-text-content">
                        <span class="sub-title">up to 30% off</span>
                        <h2><span>Comfort in every beat</span></h2>
                        <div class="pricemain">
                            <span class="product-price">From</span>
                            <span class="product-price2">$320</span>
                            <span class="product-price3">$330</span>
                        </div>
                        <a href="collection.html" class="btn-shop btn btn-style">
                            <span class="shopnow">Shop now</span>
                        </a>
                        <a href="collection.html" class="btn-collection btn btn-style">
                            <span class="shopnow">collection</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-image">
                <div class="slide-img">
                    <img src="{{ asset('store/image/home2/slider/slider3.jpg') }}" class="img-fluid desk-img" alt="slider-3">
                    <img src="{{ asset('store/image/home2/slider/mobile-slider3.jpg') }}" class="img-fluid resp-img" alt="mobile-slider3">
                </div>
                <div class="container-fluid slider-text-info">
                    <div class="slider-text-content">
                        <span class="sub-title">30% Off exclusive offer</span>
                        <h2><span>Click with freedom</span></h2>
                        <div class="pricemain">
                            <span class="product-price">From</span>
                            <span class="product-price2">$765.99</span>
                            <span class="product-price3">$770.99</span>
                        </div>
                        <a href="collection.html" class="btn-shop btn btn-style">
                            <span class="shopnow">Shop now</span>
                        </a>
                        <a href="collection.html" class="btn-collection btn btn-style">
                            <span class="shopnow">collection</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- main-slider end -->
    <!-- product-category start -->
    <section class="cat-banner section-ptb">
        <div class="container-fluid">
            <div class="row">
            <div class="col">
                <ul class="banner-block">
                <li>
                    <span class="banner-hover">
                    <img src="{{ asset('store/image/home2/banner/banner-01.jpg') }}" class="img-fluid" alt="electronics-banner-01">
                    <span class="cat-bannerwrap">
                        <span class="banner-subtitle" data-animate="animate__fadeIn">Get 50% off</span>
                        <span class="banner-title" data-animate="animate__fadeIn">Gaming controller</span>
                        <a data-animate="animate__fadeIn" href="collection.html" class="button button-link">Shop now</a>
                    </span>
                    </span>
                </li>
                <li>
                    <span class="banner-hover">
                    <img src="{{ asset('store/image/home2/banner/banner-02.jpg') }}" class="img-fluid" alt="electronics-banner-01">
                    <span class="cat-bannerwrap">
                        <span class="banner-subtitle" data-animate="animate__fadeIn">Get 50% off</span>
                        <span class="banner-title" data-animate="animate__fadeIn">Night party speaker</span>
                        <a data-animate="animate__fadeIn" href="collection.html" class="button button-link">Shop now</a>
                    </span>
                    </span>
                </li>
                <li>
                    <span class="banner-hover">
                    <img src="{{ asset('store/image/home2/banner/banner-03.jpg') }}" class="img-fluid" alt="electronics-banner-01">
                    <span class="cat-bannerwrap">
                        <span class="banner-subtitle" data-animate="animate__fadeIn">Get 50% off</span>
                        <span class="banner-title" data-animate="animate__fadeIn">Bluetooth headphone</span>
                        <a data-animate="animate__fadeIn" href="collection.html" class="button button-link">Shop now</a>
                    </span>
                    </span>
                </li>
                <li>
                    <span class="banner-hover">
                    <img src="{{ asset('store/image/home2/banner/banner-04.jpg') }}" class="img-fluid" alt="electronics-banner-01">
                    <span class="cat-bannerwrap">
                        <span class="banner-subtitle" data-animate="animate__fadeIn">Get 50% off</span>
                        <span class="banner-title" data-animate="animate__fadeIn">5G smart phone</span>
                        <a data-animate="animate__fadeIn" href="collection.html" class="button button-link">Shop now</a>
                    </span>
                    </span>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </section>
    <!-- product-category end -->
    <!-- deal-slider start -->
    <section class="deal-category section-pb">
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
                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                    <div class="single-product-wrap">
                                        <div class="category-wrap">
                                        <div class="cat-content">
                                            <div class="cat-image">
                                            <span class="image">
                                                <img src="{{ asset('store/image/home2/product/product-1.jpg') }}" class="img-fluid" alt="product-1.jpg">
                                            </span>
                                            </div>
                                        </div>
                                        <div class="deal-title">
                                            <span class="discount-tag" data-animate="animate__fadeIn">7%</span>
                                            <div class="product-ratting" data-animate="animate__fadeIn">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                            <a class="cat-text" href="collection.html" data-animate="animate__fadeIn">Earbuds</a>
                                            <div class="price-box" data-animate="animate__fadeIn">
                                            <span class="new-price">Rs. 42.00</span><span class="old-price">Rs. 45.00</span>
                                            </div>
                                            <div class="timer-section" data-animate="animate__fadeIn">
                                            <ul class="clock" id="clock1">
                                                <!-- deal day start -->
                                                <li class="clock-li clock-day">
                                                    <div class="clock-wrap">
                                                        <span class="time days">70</span>
                                                        <span class="clock-text">Days</span>
                                                    </div>
                                                </li>
                                                <!-- deal day end -->
                                                <!-- deal hours start -->
                                                <li class="clock-li sclock-hours">
                                                    <div class="clock-wrap">
                                                        <span class="time hours">07</span>
                                                        <span class="clock-text">Hrs</span>
                                                    </div>
                                                </li>
                                                <!-- deal hours end -->
                                                <!-- deal minute start -->
                                                <li class="clock-li sclock-minutes">
                                                    <div class="clock-wrap">
                                                        <span class="time minutes">10</span>
                                                        <span class="clock-text">Min</span>
                                                    </div>
                                                </li>
                                                <!-- deal minute end -->
                                                <!-- deal second start -->
                                                <li class="clock-li sclock-seconds">
                                                    <div class="clock-wrap">
                                                        <span class="time seconds">42</span>
                                                        <span class="clock-text">Sec</span>
                                                    </div>
                                                </li>
                                                <!-- deal second end -->
                                            </ul>
                                        </div>
                                            <div class="deal-arrow" data-animate="animate__fadeIn">
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="tooltip-text">add to cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                    <div class="single-product-wrap">
                                        <div class="category-wrap">
                                        <div class="cat-content">
                                            <div class="cat-image">
                                            <span class="image">
                                                <img src="{{ asset('store/image/home2/product/product-3.jpg') }}" class="img-fluid" alt="product-3.jpg">
                                            </span>
                                            </div>
                                        </div>
                                        <div class="deal-title">
                                            <span class="discount-tag" data-animate="animate__fadeIn">40%</span>
                                            <div class="product-ratting" data-animate="animate__fadeIn">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                            <a class="cat-text" href="collection.html" data-animate="animate__fadeIn">Sandisk ssd</a>
                                            <div class="price-box" data-animate="animate__fadeIn">
                                            <span class="new-price">Rs. 500.00</span><span class="old-price">Rs. 530.00</span>
                                            </div>
                                            <div class="timer-section" data-animate="animate__fadeIn">
                                            <ul class="clock" id="clock2">
                                                <!-- deal day start -->
                                                <li class="clock-li clock-day">
                                                    <div class="clock-wrap">
                                                        <span class="time days">70</span>
                                                        <span class="clock-text">Days</span>
                                                    </div>
                                                </li>
                                                <!-- deal day end -->
                                                <!-- deal hours start -->
                                                <li class="clock-li sclock-hours">
                                                    <div class="clock-wrap">
                                                        <span class="time hours">07</span>
                                                        <span class="clock-text">Hrs</span>
                                                    </div>
                                                </li>
                                                <!-- deal hours end -->
                                                <!-- deal minute start -->
                                                <li class="clock-li sclock-minutes">
                                                    <div class="clock-wrap">
                                                        <span class="time minutes">10</span>
                                                        <span class="clock-text">Min</span>
                                                    </div>
                                                </li>
                                                <!-- deal minute end -->
                                                <!-- deal second start -->
                                                <li class="clock-li sclock-seconds">
                                                    <div class="clock-wrap">
                                                        <span class="time seconds">42</span>
                                                        <span class="clock-text">Sec</span>
                                                    </div>
                                                </li>
                                                <!-- deal second end -->
                                            </ul>
                                        </div>
                                            <div class="deal-arrow" data-animate="animate__fadeIn">
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="tooltip-text">add to cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                    <div class="single-product-wrap">
                                        <div class="category-wrap">
                                        <div class="cat-content">
                                            <div class="cat-image">
                                            <span class="image">
                                                <img src="{{ asset('store/image/home2/product/product-4.jpg') }}" class="img-fluid" alt="product-4.jpg">
                                            </span>
                                            </div>
                                        </div>
                                        <div class="deal-title">
                                            <span class="discount-tag" data-animate="animate__fadeIn">50%</span>
                                            <div class="product-ratting" data-animate="animate__fadeIn">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                            <a class="cat-text" href="collection.html" data-animate="animate__fadeIn">Router wifi6</a>
                                            <div class="price-box" data-animate="animate__fadeIn">
                                            <span class="new-price">Rs. 60.00</span><span class="old-price">Rs. 90.00</span>
                                            </div>
                                            <div class="timer-section" data-animate="animate__fadeIn">
                                            <ul class="clock" id="clock3">
                                                <!-- deal day start -->
                                                <li class="clock-li clock-day">
                                                    <div class="clock-wrap">
                                                        <span class="time days">70</span>
                                                        <span class="clock-text">Days</span>
                                                    </div>
                                                </li>
                                                <!-- deal day end -->
                                                <!-- deal hours start -->
                                                <li class="clock-li sclock-hours">
                                                    <div class="clock-wrap">
                                                        <span class="time hours">07</span>
                                                        <span class="clock-text">Hrs</span>
                                                    </div>
                                                </li>
                                                <!-- deal hours end -->
                                                <!-- deal minute start -->
                                                <li class="clock-li sclock-minutes">
                                                    <div class="clock-wrap">
                                                        <span class="time minutes">10</span>
                                                        <span class="clock-text">Min</span>
                                                    </div>
                                                </li>
                                                <!-- deal minute end -->
                                                <!-- deal second start -->
                                                <li class="clock-li sclock-seconds">
                                                    <div class="clock-wrap">
                                                        <span class="time seconds">42</span>
                                                        <span class="clock-text">Sec</span>
                                                    </div>
                                                </li>
                                                <!-- deal second end -->
                                            </ul>
                                        </div>
                                            <div class="deal-arrow" data-animate="animate__fadeIn">
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="tooltip-text">add to cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                    <div class="single-product-wrap">
                                        <div class="category-wrap">
                                        <div class="cat-content">
                                            <div class="cat-image">
                                            <span class="image">
                                                <img src="{{ asset('store/image/home2/product/product-5.jpg') }}" class="img-fluid" alt="product-5.jpg">
                                            </span>
                                            </div>
                                        </div>
                                        <div class="deal-title">
                                            <span class="discount-tag" data-animate="animate__fadeIn">7%</span>
                                            <div class="product-ratting" data-animate="animate__fadeIn">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                            <a class="cat-text" href="collection.html" data-animate="animate__fadeIn">Asus rog</a>
                                            <div class="price-box" data-animate="animate__fadeIn">
                                            <span class="new-price">Rs. 42.00</span><span class="old-price">Rs. 45.00</span>
                                            </div>
                                            <div class="timer-section" data-animate="animate__fadeIn">
                                            <ul class="clock" id="clock4">
                                                <!-- deal day start -->
                                                <li class="clock-li clock-day">
                                                    <div class="clock-wrap">
                                                        <span class="time days">70</span>
                                                        <span class="clock-text">Days</span>
                                                    </div>
                                                </li>
                                                <!-- deal day end -->
                                                <!-- deal hours start -->
                                                <li class="clock-li sclock-hours">
                                                    <div class="clock-wrap">
                                                        <span class="time hours">07</span>
                                                        <span class="clock-text">Hrs</span>
                                                    </div>
                                                </li>
                                                <!-- deal hours end -->
                                                <!-- deal minute start -->
                                                <li class="clock-li sclock-minutes">
                                                    <div class="clock-wrap">
                                                        <span class="time minutes">10</span>
                                                        <span class="clock-text">Min</span>
                                                    </div>
                                                </li>
                                                <!-- deal minute end -->
                                                <!-- deal second start -->
                                                <li class="clock-li sclock-seconds">
                                                    <div class="clock-wrap">
                                                        <span class="time seconds">42</span>
                                                        <span class="clock-text">Sec</span>
                                                    </div>
                                                </li>
                                                <!-- deal second end -->
                                            </ul>
                                        </div>
                                            <div class="deal-arrow" data-animate="animate__fadeIn">
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="tooltip-text">add to cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                    <div class="single-product-wrap">
                                        <div class="category-wrap">
                                        <div class="cat-content">
                                            <div class="cat-image">
                                            <span class="image">
                                                <img src="{{ asset('store/image/home2/product/product-6.jpg') }}" class="img-fluid" alt="product-6.jpg">
                                            </span>
                                            </div>
                                        </div>
                                        <div class="deal-title">
                                            <span class="discount-tag" data-animate="animate__fadeIn">7%</span>
                                            <div class="product-ratting" data-animate="animate__fadeIn">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                            <a class="cat-text" href="collection.html" data-animate="animate__fadeIn">IPad mini6</a>
                                            <div class="price-box" data-animate="animate__fadeIn">
                                            <span class="new-price">Rs. 42.00</span><span class="old-price">Rs. 45.00</span>
                                            </div>
                                            <div class="timer-section" data-animate="animate__fadeIn">
                                            <ul class="clock" id="clock5">
                                                <!-- deal day start -->
                                                <li class="clock-li clock-day">
                                                    <div class="clock-wrap">
                                                        <span class="time days">70</span>
                                                        <span class="clock-text">Days</span>
                                                    </div>
                                                </li>
                                                <!-- deal day end -->
                                                <!-- deal hours start -->
                                                <li class="clock-li sclock-hours">
                                                    <div class="clock-wrap">
                                                        <span class="time hours">07</span>
                                                        <span class="clock-text">Hrs</span>
                                                    </div>
                                                </li>
                                                <!-- deal hours end -->
                                                <!-- deal minute start -->
                                                <li class="clock-li sclock-minutes">
                                                    <div class="clock-wrap">
                                                        <span class="time minutes">10</span>
                                                        <span class="clock-text">Min</span>
                                                    </div>
                                                </li>
                                                <!-- deal minute end -->
                                                <!-- deal second start -->
                                                <li class="clock-li sclock-seconds">
                                                    <div class="clock-wrap">
                                                        <span class="time seconds">42</span>
                                                        <span class="clock-text">Sec</span>
                                                    </div>
                                                </li>
                                                <!-- deal second end -->
                                            </ul>
                                        </div>
                                            <div class="deal-arrow" data-animate="animate__fadeIn">
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="tooltip-text">add to cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category-slider end -->
    <!-- offer-text-section start -->
    <section class="offer-text-area gradient-bg">
        <div class="offer-text-wrap">
            <div class="marquee-container">
                <div class="marquee-content">
                    <div class="offer-line">🔥 Ưu đãi HOT - Giảm ngay 20% cho đơn hàng đầu tiên!</div>
                    <div class="offer-line">🎁 Mua ngay hôm nay - Nhận quà liền tay</div>
                    <div class="offer-line">⚡ Nhanh tay đặt hàng - Giá sốc chỉ trong hôm nay</div>
                    <div class="offer-line">💝 Miễn phí vận chuyển cho đơn hàng trên 500K</div>
                    <div class="offer-line">🌟 Khách hàng VIP - Giảm thêm 10% tất cả sản phẩm</div>
                    <div class="offer-line">🎉 Mua 2 tặng 1 - Cơ hội vàng trong tuần</div>
                    <div class="offer-line">💎 Độc quyền online - Giá tốt nhất thị trường</div>
                    <div class="offer-line">🏆 Cam kết chính hãng - Bảo hành 12 tháng</div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer-text-section end -->
    <!-- product-tab start -->
    <section class="product-tab-area section-ptb bt">
        <div class="container-fluid">
            <div class="collection-category">
                <div class="section-capture">
                    <div class="section-title">
                        <span>Popular product</span>
                        <h2><span>Selling products</span></h2>
                    </div>
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#new-tab" data-bs-toggle="tab" class="show active">Mobile</a>
                        </li>
                        <li>
                            <a href="#best-tab" data-bs-toggle="tab">Camera</a>
                        </li>
                        <li>
                            <a href="#feature-tab" data-bs-toggle="tab">Smart tv</a>
                        </li>
                        <li>
                            <a href="#sale-tab" data-bs-toggle="tab">Accessories</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content tabs">
                    <div class="tab-pane fade active show" id="new-tab">
                        <div class="collection-wrap">
                            <div class="collection-slider swiper" id="new-product2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-1.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Earbuds</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$600.00</span>
                                                    <span class="old-price">$610.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-2.jpg') }}" class="img-fluid img1 resp-img1" alt="product-2.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Sony earbuds</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$96.00</span>
                                                    <span class="old-price">$100.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-3.jpg') }}" class="img-fluid img1 resp-img1" alt="product-3.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Sandisk ssd </a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$70.00</span>
                                                    <span class="old-price">$75.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-4.jpg') }}" class="img-fluid img1 resp-img1" alt="product-4.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Router wifi6</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$30.00</span>
                                                    <span class="old-price">$35.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-5.jpg') }}" class="img-fluid img1 resp-img1" alt="product-5.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Asus rog</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$500.00</span>
                                                    <span class="old-price">$560.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-6.jpg') }}" class="img-fluid img1 resp-img1" alt="product-6.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">IPad mini6</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$650.00</span>
                                                    <span class="old-price">$680.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-7.jpg') }}" class="img-fluid img1 resp-img1" alt="product-7.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">IPad mini</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$1000.00</span>
                                                    <span class="old-price">$1100.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-8.jpg') }}" class="img-fluid img1 resp-img1" alt="product-8.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Nokia 1434</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$950.00</span>
                                                    <span class="old-price">$955.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-9.jpg') }}" class="img-fluid img1 resp-img1" alt="product-9.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Nokia 110</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$30.00</span>
                                                    <span class="old-price">$35.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-10.jpg') }}" class="img-fluid img1 resp-img1" alt="product-10.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Gaming laptop</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$320.00</span>
                                                    <span class="old-price">$350.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-11.jpg') }}" class="img-fluid img1 resp-img1" alt="product-11.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">HP color printer</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$450.00</span>
                                                    <span class="old-price">$465.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-12.jpg') }}" class="img-fluid img1 resp-img1" alt="product-12.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Smartwatch</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$230.00</span>
                                                    <span class="old-price">$235.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-13.jpg') }}" class="img-fluid img1 resp-img1" alt="product-13.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Mouse</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$120.00</span>
                                                    <span class="old-price">$150.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-14.jpg') }}" class="img-fluid img1 resp-img1" alt="product-14.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Smart camera</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$20.00</span>
                                                    <span class="old-price">$25.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button class="swiper-prev swiper-prev-new2"><i class="ri-arrow-left-s-line"></i></button>
                                    <button class="swiper-next swiper-next-new2"><i class="ri-arrow-right-s-line"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots">
                                <div class="swiper-pagination swiper-pagination-new2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="best-tab">
                        <div class="collection-wrap">
                            <div class="collection-slider swiper" id="best-product2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-7.jpg') }}" class="img-fluid img1 resp-img1" alt="product-7.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">IPad mini</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$1000.00</span>
                                                    <span class="old-price">$1100.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-8.jpg') }}" class="img-fluid img1 resp-img1" alt="product-8.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Nokia 1434</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$950.00</span>
                                                    <span class="old-price">$955.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-9.jpg') }}" class="img-fluid img1 resp-img1" alt="product-9.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Nokia 110</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$30.00</span>
                                                    <span class="old-price">$35.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-10.jpg') }}" class="img-fluid img1 resp-img1" alt="product-10.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Gaming laptop</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$320.00</span>
                                                    <span class="old-price">$350.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-11.jpg') }}" class="img-fluid img1 resp-img1" alt="product-11.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">HP color printer</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$450.00</span>
                                                    <span class="old-price">$465.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-12.jpg') }}" class="img-fluid img1 resp-img1" alt="product-12.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Smartwatch</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$230.00</span>
                                                    <span class="old-price">$235.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-13.jpg') }}" class="img-fluid img1 resp-img1" alt="product-13.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Mouse</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$120.00</span>
                                                    <span class="old-price">$150.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-14.jpg') }}" class="img-fluid img1 resp-img1" alt="product-14.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Smart camera</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$20.00</span>
                                                    <span class="old-price">$25.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-1.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Earbuds</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$600.00</span>
                                                    <span class="old-price">$610.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-2.jpg') }}" class="img-fluid img1 resp-img1" alt="product-2.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Sony earbuds</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$96.00</span>
                                                    <span class="old-price">$100.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-3.jpg') }}" class="img-fluid img1 resp-img1" alt="product-3.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Sandisk ssd </a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$70.00</span>
                                                    <span class="old-price">$75.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-4.jpg') }}" class="img-fluid img1 resp-img1" alt="product-4.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Router wifi6</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$30.00</span>
                                                    <span class="old-price">$35.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-5.jpg') }}" class="img-fluid img1 resp-img1" alt="product-5.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Asus rog</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$500.00</span>
                                                    <span class="old-price">$560.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-6.jpg') }}" class="img-fluid img1 resp-img1" alt="product-6.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">IPad mini6</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$650.00</span>
                                                    <span class="old-price">$680.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button class="swiper-prev swiper-prev-best2"><i class="ri-arrow-left-s-line"></i></button>
                                    <button class="swiper-next swiper-next-best2"><i class="ri-arrow-right-s-line"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots">
                                <div class="swiper-pagination swiper-pagination-best"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="feature-tab">
                        <div class="collection-wrap">
                            <div class="collection-slider swiper" id="feature-product2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-12.jpg') }}" class="img-fluid img1 resp-img1" alt="product-12.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Smartwatch</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$230.00</span>
                                                    <span class="old-price">$235.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-13.jpg') }}" class="img-fluid img1 resp-img1" alt="product-13.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Mouse</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$120.00</span>
                                                    <span class="old-price">$150.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-2.jpg') }}" class="img-fluid img1 resp-img1" alt="product-2.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Sony earbuds</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$96.00</span>
                                                    <span class="old-price">$100.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-3.jpg') }}" class="img-fluid img1 resp-img1" alt="product-3.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Sandisk ssd </a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$70.00</span>
                                                    <span class="old-price">$75.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-4.jpg') }}" class="img-fluid img1 resp-img1" alt="product-4.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Router wifi6</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$30.00</span>
                                                    <span class="old-price">$35.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-7.jpg') }}" class="img-fluid img1 resp-img1" alt="product-7.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">IPad mini</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$1000.00</span>
                                                    <span class="old-price">$1100.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-8.jpg') }}" class="img-fluid img1 resp-img1" alt="product-8.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Nokia 1434</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$950.00</span>
                                                    <span class="old-price">$955.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-9.jpg') }}" class="img-fluid img1 resp-img1" alt="product-9.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Nokia 110</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$30.00</span>
                                                    <span class="old-price">$35.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-10.jpg') }}" class="img-fluid img1 resp-img1" alt="product-10.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Gaming laptop</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$320.00</span>
                                                    <span class="old-price">$350.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-11.jpg') }}" class="img-fluid img1 resp-img1" alt="product-11.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">HP color printer</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$450.00</span>
                                                    <span class="old-price">$465.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-5.jpg') }}" class="img-fluid img1 resp-img1" alt="product-5.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Asus rog</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$500.00</span>
                                                    <span class="old-price">$560.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-6.jpg') }}" class="img-fluid img1 resp-img1" alt="product-6.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">IPad mini6</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$650.00</span>
                                                    <span class="old-price">$680.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-14.jpg') }}" class="img-fluid img1 resp-img1" alt="product-14.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Smart camera</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$20.00</span>
                                                    <span class="old-price">$25.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-1.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Earbuds</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$600.00</span>
                                                    <span class="old-price">$610.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button class="swiper-prev swiper-prev-feature2"><i class="ri-arrow-left-s-line"></i></button>
                                    <button class="swiper-next swiper-next-feature2"><i class="ri-arrow-right-s-line"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots">
                                <div class="swiper-pagination swiper-pagination-feature"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sale-tab">
                        <div class="collection-wrap">
                            <div class="collection-slider swiper" id="sale-product2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-10.jpg') }}" class="img-fluid img1 resp-img1" alt="product-10.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Gaming laptop</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$320.00</span>
                                                    <span class="old-price">$350.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-11.jpg') }}" class="img-fluid img1 resp-img1" alt="product-11.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">HP color printer</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$450.00</span>
                                                    <span class="old-price">$465.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-12.jpg') }}" class="img-fluid img1 resp-img1" alt="product-12.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Smartwatch</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$230.00</span>
                                                    <span class="old-price">$235.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-13.jpg') }}" class="img-fluid img1 resp-img1" alt="product-13.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Mouse</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$120.00</span>
                                                    <span class="old-price">$150.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-2.jpg') }}" class="img-fluid img1 resp-img1" alt="product-2.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Sony earbuds</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$96.00</span>
                                                    <span class="old-price">$100.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-3.jpg') }}" class="img-fluid img1 resp-img1" alt="product-3.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Sandisk ssd </a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$70.00</span>
                                                    <span class="old-price">$75.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-4.jpg') }}" class="img-fluid img1 resp-img1" alt="product-4.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Router wifi6</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$30.00</span>
                                                    <span class="old-price">$35.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-7.jpg') }}" class="img-fluid img1 resp-img1" alt="product-7.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">IPad mini</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$1000.00</span>
                                                    <span class="old-price">$1100.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-8.jpg') }}" class="img-fluid img1 resp-img1" alt="product-8.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Nokia 1434</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$950.00</span>
                                                    <span class="old-price">$955.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-9.jpg') }}" class="img-fluid img1 resp-img1" alt="product-9.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Nokia 110</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$30.00</span>
                                                    <span class="old-price">$35.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-10.jpg') }}" class="img-fluid img1 resp-img1" alt="product-10.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Gaming laptop</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$320.00</span>
                                                    <span class="old-price">$350.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-5.jpg') }}" class="img-fluid img1 resp-img1" alt="product-5.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Asus rog</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$500.00</span>
                                                    <span class="old-price">$560.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-6.jpg') }}" class="img-fluid img1 resp-img1" alt="product-6.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">IPad mini6</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$650.00</span>
                                                    <span class="old-price">$680.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-14.jpg') }}" class="img-fluid img1 resp-img1" alt="product-14.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Smart camera</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$20.00</span>
                                                    <span class="old-price">$25.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{ asset('store/image/home2/product/product-1.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1.jpg">
                                                </a>
                                                <div class="product-action">
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Earbuds</a></h6>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$600.00</span>
                                                    <span class="old-price">$610.00</span>
                                                </div>
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star">
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                            <i class="feather-star"></i>
                                                        </span>
                                                        <span class="review-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                            <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                            <span class="product-check-icon"><i class="feather-check"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="feather-eye"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="feather-heart"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button class="swiper-prev swiper-prev-sale2"><i class="ri-arrow-left-s-line"></i></button>
                                    <button class="swiper-next swiper-next-sale2"><i class="ri-arrow-right-s-line"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots">
                                <div class="swiper-pagination swiper-pagination-sale"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab end -->
    <!-- banner3 start -->
    <section class="banner3 section-pb">
        <div class="container-fluid">
            <div class="row">
            <div class="col">
                <ul class="banner-block">
                <li class="banner-wrapper text-top">
                    <span class="banner-hover">
                    <img src="{{ asset('store/image/home2/banner/banner-home-1.jpg') }}" class="img-fluid" alt="electronics-banner-01">
                    <span class="banner3-content">
                        <span class="banner-subtitle" data-animate="animate__fadeIn">Get 30% discount</span>
                        <span class="banne3title" data-animate="animate__fadeIn">Gaming cabinet</span>
                    </span>
                    </span>
                </li>
                <li class="banner-wrapper text-left">
                    <span class="banner-hover">
                    <img src="{{ asset('store/image/home2/banner/banner-home-2.jpg') }}" class="img-fluid" alt="electronics-banner-01">
                    <span class="banner3-content">
                        <span class="banner-subtitle" data-animate="animate__fadeIn">Start from<span class="sub-color">$199.99</span></span>
                        <span class="banne3title" data-animate="animate__fadeIn">Tech with a human touch</span>
                        <a data-animate="animate__fadeIn" href="collection.html" class="btn btn btn-style2 button-link">Shop now</a>
                    </span>
                    </span>
                </li>
                <li class="banner-wrapper text-top">
                    <span class="banner-hover">
                    <img src="{{ asset('store/image/home2/banner/banner-home-3.jpg') }}" class="img-fluid" alt="electronics-banner-01">
                    <span class="banner3-content">
                        <span class="banner-subtitle" data-animate="animate__fadeIn">Sale up to 50% off</span>
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
    <!-- featured-area start -->
    <section class="featured-area section-pb">
        <div class="container-fluid">
            <div class="collection-category">
                <div class="section-capture">
                    <div class="section-title">
                        <span>Onsale Products</span>
                        <h2><span>Featured products</span></h2>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button class="swiper-prev swiper-prev-featured2"><i class="ri-arrow-left-line"></i></button>
                            <button class="swiper-next swiper-next-featured2"><i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                </div>
                <div class="collection-wrap">
                    <div class="collection-slider swiper" id="featuredproducts2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-1.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Earbuds</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$600.00</span>
                                            <span class="old-price">$610.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-2.jpg') }}" class="img-fluid img1 resp-img1" alt="product-2.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Sony earbuds</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$96.00</span>
                                            <span class="old-price">$100.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-3.jpg') }}" class="img-fluid img1 resp-img1" alt="product-3.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Sandisk ssd </a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$70.00</span>
                                            <span class="old-price">$75.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-4.jpg') }}" class="img-fluid img1 resp-img1" alt="product-4.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Router wifi6</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.00</span>
                                            <span class="old-price">$35.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-5.jpg') }}" class="img-fluid img1 resp-img1" alt="product-5.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Asus rog</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$500.00</span>
                                            <span class="old-price">$560.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-6.jpg') }}" class="img-fluid img1 resp-img1" alt="product-6.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">IPad mini6</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$650.00</span>
                                            <span class="old-price">$680.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-7.jpg') }}" class="img-fluid img1 resp-img1" alt="product-7.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">IPad mini</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$1000.00</span>
                                            <span class="old-price">$1100.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-8.jpg') }}" class="img-fluid img1 resp-img1" alt="product-8.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Nokia 1434</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$950.00</span>
                                            <span class="old-price">$955.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-9.jpg') }}" class="img-fluid img1 resp-img1" alt="product-9.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Nokia 110</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.00</span>
                                            <span class="old-price">$35.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-10.jpg') }}" class="img-fluid img1 resp-img1" alt="product-10.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Gaming laptop</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$320.00</span>
                                            <span class="old-price">$350.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-11.jpg') }}" class="img-fluid img1 resp-img1" alt="product-11.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">HP color printer</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$450.00</span>
                                            <span class="old-price">$465.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-12.jpg') }}" class="img-fluid img1 resp-img1" alt="product-12.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Smartwatch</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$230.00</span>
                                            <span class="old-price">$235.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-13.jpg') }}" class="img-fluid img1 resp-img1" alt="product-13.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Mouse</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$120.00</span>
                                            <span class="old-price">$150.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-14.jpg') }}" class="img-fluid img1 resp-img1" alt="product-14.jpg">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Smart camera</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$20.00</span>
                                            <span class="old-price">$25.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured-area end -->
    <!-- brand-slider start -->
    <section class="brand-area ">
        <div class="container-fluid">
            <div class="testi-category section-ptb bt">
                <div class="collection-slider swiper" id="brandslider2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-img">
                                <a href="JavaScript:void(0)" class="brand-img"><img src="{{ asset('store/image/home2/brand-logo/brandlogo-1.png') }}" class="img-fluid" alt="brandlogo-1.png"></a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-img">
                                <a href="JavaScript:void(0)" class="brand-img"><img src="{{ asset('store/image/home2/brand-logo/brandlogo-2.png') }}" class="img-fluid" alt="brandlogo-2.png"></a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-img">
                                <a href="JavaScript:void(0)" class="brand-img"><img src="{{ asset('store/image/home2/brand-logo/brandlogo-3.png') }}" class="img-fluid" alt="brandlogo-3.png"></a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-img">
                                <a href="JavaScript:void(0)" class="brand-img"><img src="{{ asset('store/image/home2/brand-logo/brandlogo-4.png') }}" class="img-fluid" alt="brandlogo-4.png"></a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-img">
                                <a href="JavaScript:void(0)" class="brand-img"><img src="{{ asset('store/image/home2/brand-logo/brandlogo-5.png') }}" class="img-fluid" alt="brandlogo-5.png"></a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-img">
                                <a href="JavaScript:void(0)" class="brand-img"><img src="{{ asset('store/image/home2/brand-logo/brandlogo-1.png') }}" class="img-fluid" alt="brandlogo-1.png"></a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-img">
                                <a href="JavaScript:void(0)" class="brand-img"><img src="{{ asset('store/image/home2/brand-logo/brandlogo-2.png') }}" class="img-fluid" alt="brandlogo-2.png"></a>
                            </div>
                        </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-img">
                                <a href="JavaScript:void(0)" class="brand-img"><img src="{{ asset('store/image/home2/brand-logo/brandlogo-3.png') }}" class="img-fluid" alt="brandlogo-3.png"></a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-img">
                                <a href="JavaScript:void(0)" class="brand-img"><img src="{{ asset('store/image/home2/brand-logo/brandlogo-4.png') }}" class="img-fluid" alt="brandlogo-4.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand-slider end -->
    <!-- banner-area start -->
    <section>
        <div class="container-fluid ">
            <div class="row">
            <div class="col">
            <section class="full-banner">
                <div class="container">
                <div class="row">
                    <div class="col">
                    <div class="text-area">
                        <div class="banner-title">
                            <h2 data-animate="animate__fadeIn">27MP with improved performance</h2>
                            <a class="btn-style2" href="product-template.html" data-animate="animate__fadeIn">Shop now</a>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                </section>
            </div>
            </div>
        </div>
    </section>
    <!-- banner-area end -->
    <!-- Trending-area start -->
    <section class="trending-area section-ptb">
        <div class="container-fluid">
            <div class="collection-category">
                <div class="section-capture">
                    <div class="section-title">
                        <span>Spacial product</span>
                        <h2><span>Trending products</span></h2>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button class="swiper-prev swiper-prev-tranding2"><i class="ri-arrow-left-line"></i></button>
                            <button class="swiper-next swiper-next-tranding2"><i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                </div>
                <div class="collection-wrap">
                    <div class="collection-slider swiper" id="trandingproducts2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-1.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Earbuds</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$340.00</span>
                                            <span class="old-price">$350.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-2.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Sony earbuds</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$560.00</span>
                                            <span class="old-price">$590.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-3.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Sandisk ssd </a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$600.00</span>
                                            <span class="old-price">$610.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-4.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Router wifi6</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$600.00</span>
                                            <span class="old-price">$610.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-5.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Asus rog</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$950.00</span>
                                            <span class="old-price">$960.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-6.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">IPad mini6</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$950.00</span>
                                            <span class="old-price">$960.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-7.jpg') }}" class="img-fluid img1 resp-img1" alt="product-7">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">IPad mini</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$600.00</span>
                                            <span class="old-price">$610.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-8.jpg') }}" class="img-fluid img1 resp-img1" alt="product-8">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Nokia 1434</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$750.00</span>
                                            <span class="old-price">$760.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-9.jpg') }}" class="img-fluid img1 resp-img1" alt="product-9">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Nokia 110</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$450.00</span>
                                            <span class="old-price">$490.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-10.jpg') }}" class="img-fluid img1 resp-img1" alt="product-10">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Gaming laptop</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$960.00</span>
                                            <span class="old-price">$970.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-11.jpg') }}" class="img-fluid img1 resp-img1" alt="product-11">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">HP color printer</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$450.00</span>
                                            <span class="old-price">$455.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-12.jpg') }}" class="img-fluid img1 resp-img1" alt="product-12">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Smartwatch</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$600.00</span>
                                            <span class="old-price">$610.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-13.jpg') }}" class="img-fluid img1 resp-img1" alt="product-13">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Mouse</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.00</span>
                                            <span class="old-price">$40.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-14.jpg') }}" class="img-fluid img1 resp-img1" alt="product-14">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Smart camera</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$860.00</span>
                                            <span class="old-price">$870.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-15.jpg') }}" class="img-fluid img1 resp-img1" alt="product-15">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Wireless powerbank</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$55.00</span>
                                            <span class="old-price">$60.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-16.jpg') }}" class="img-fluid img1 resp-img1" alt="product-16">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Gamepad</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$40.00</span>
                                            <span class="old-price">$42.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-17.jpg') }}" class="img-fluid img1 resp-img1" alt="product-17">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Room air purifier</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$456.00</span>
                                            <span class="old-price">$460.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-template.html" class="pro-img">
                                            <img src="{{ asset('store/image/home2/product/product-18.jpg') }}" class="img-fluid img1 resp-img1" alt="product-17">
                                        </a>
                                        <div class="product-action">
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h6><a href="product-template.html">Robot vacuum</a></h6>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$950.00</span>
                                            <span class="old-price">$955.00</span>
                                        </div>
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star">
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                    <i class="feather-star"></i>
                                                </span>
                                                <span class="review-caption">No reviews</span>
                                            </span>
                                        </div>
                                        <div class="carttext">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><span class="tooltip-text">add to cart</span></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0)" class="add-to-cart">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                    <span class="product-check-icon"><i class="feather-check"></i></span>
                                                </span>
                                                <span class="tooltip-text">add to cart</span>
                                            </a>
                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                <span class="tooltip-text">quickview</span>
                                            </a>
                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                <span class="tooltip-text">wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending-area end -->
    <section class="newsletter-area">
        <div class="news-letter-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="newsletter-block">
                            <div class="newsletter-title">
                                <div class="section-capture">
                                    <div class="section-title" data-animate="animate__fadeIn">
                                        <h2 class="title">Subscribe newsletter</h2>
                                        <p class="desc">Get a 20% discount on your first order!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="subscribe-content" data-animate="animate__fadeIn">
                                <form method="post" id="contact_form" accept-charset="UTF-8" class="contact-form">
                                    <input type="hidden" name="form_type" value="customer">
                                    <input type="hidden" name="utf8" value="✓">
                                    <input type="hidden" name="contact[tags]" value="newsletter">
                                    <div class="subscribe-block">
                                        <input type="email" name="contact[email]" class="email mail" id="E-mail" value="" placeholder="Enter your email" autocapitalize="off" required="">
                                        <button type="submit" class="news-submit" name="commit" id="Subscribe"><i class="feather-mail"></i>Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-section start -->
    <section class="blog-area section-ptb">
    <div class="container-fluid">
        <div class="collection-category">
        <div class="row">
            <div class="col">
                <div class="section-capture">
                    <div class="section-title">
                        <span data-animate="animate__fadeIn">Our blog</span>
                        <h2 data-animate="animate__fadeIn">Latest news</h2>
                    </div>
                </div>
                <div class="swiper-buttons">
                    <div class="swiper-buttons-wrap">
                        <button class="swiper-prev swiper-prev-blogs2"><i class="ri-arrow-left-line"></i></button>
                        <button class="swiper-next swiper-next-blogs2"><i class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="blog-slider swiper" id="blogslider2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-main-img">
                                        <a href="article-post.html" class="blog-img banner-img">
                                            <img src="{{ asset('store/image/home2/blog/blog-1.jpg') }}" class="blog-img img-fluid" alt="blog-1">
                                            <span class="date-time">10 Feb 2025</span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blogtitle">
                                            <h6 class="blog-title">Stay connected to the future with our electronic range.</h6>
                                        </div>
                                        <a class="btn-style3 readmore" href="blog-grid.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-main-img">
                                        <a href="article-post.html" class="blog-img banner-img">
                                            <img src="{{ asset('store/image/home2/blog/blog-2.jpg') }}" class="blog-img img-fluid" alt="blog-1">
                                            <span class="date-time">26 Dec 2025</span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blogtitle">
                                            <h6 class="blog-title">Empowering homes with our range of  electronic solutions</h6>
                                        </div>
                                        <a class="btn-style3 readmore" href="blog-grid.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-main-img">
                                        <a href="article-post.html" class="blog-img banner-img">
                                            <img src="{{ asset('store/image/home2/blog/blog-3.jpg') }}" class="blog-img img-fluid" alt="blog-1">
                                            <span class="date-time">01 Mar 2025</span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blogtitle">
                                            <h6 class="blog-title">We offer warranty, but with our services,  you won’t need it</h6>
                                        </div>
                                        <a class="btn-style3 readmore" href="blog-grid.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-main-img">
                                        <a href="article-post.html" class="blog-img banner-img">
                                            <img src="{{ asset('store/image/home2/blog/blog-4.jpg') }}" class="blog-img img-fluid" alt="blog-1">
                                            <span class="date-time">16 Oct 2025</span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blogtitle">
                                            <h6 class="blog-title">We’re licensed and our team trained per  the industry standard</h6>
                                        </div>
                                        <a class="btn-style3 readmore" href="blog-grid.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-main-img">
                                        <a href="article-post.html" class="blog-img banner-img">
                                            <img src="{{ asset('store/image/home2/blog/blog-5.jpg') }}" class="blog-img img-fluid" alt="blog-1">
                                            <span class="date-time">13 Jun 2025</span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blogtitle">
                                            <h6 class="blog-title">Stay connected to the future with our electronic range.</h6>
                                        </div>
                                        <a class="btn-style3 readmore" href="blog-grid.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-main-img">
                                        <a href="article-post.html" class="blog-img banner-img">
                                            <img src="{{ asset('store/image/home2/blog/blog-6.jpg') }}" class="blog-img img-fluid" alt="blog-1">
                                            <span class="date-time">18 Feb 2025</span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blogtitle">
                                            <h6 class="blog-title">We’re licensed and our team trained per  the industry standard</h6>
                                        </div>
                                        <a class="btn-style3 readmore" href="blog-grid.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-main-img">
                                        <a href="article-post.html" class="blog-img banner-img">
                                            <img src="{{ asset('store/image/home2/blog/blog-7.jpg') }}" class="blog-img img-fluid" alt="blog-1">
                                            <span class="date-time">23 Sep 2025</span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blogtitle">
                                            <h6 class="blog-title">Stay connected to the future with our electronic range.</h6>
                                        </div>
                                        <a class="btn-style3 readmore" href="blog-grid.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-main-img">
                                        <a href="article-post.html" class="blog-img banner-img">
                                            <img src="{{ asset('store/image/home2/blog/blog-8.jpg') }}" class="blog-img img-fluid" alt="blog-1">
                                            <span class="date-time">6 Jan 2025</span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blogtitle">
                                            <h6 class="blog-title">We’re licensed and our team trained per  the industry standard</h6>
                                        </div>
                                        <a class="btn-style3 readmore" href="blog-grid.html">read more</a>
                                    </div>
                                </div>
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
    <!-- service-area start-->
    <section class="service-area section-pb bt" data-animate="animate__fadeIn">
    <div class="container-fluid">
        <ul class="single-service">
            <li class="service-content" data-animate="animate__fadeIn">
                <div class="ser-block">
                    <a class="service-icon" href="JavaScript:void(0)">
                        <span><i class="feather-box"></i></span>
                    </a>
                    <div class="service-text">
                        <h6>Free shipping</h6>
                        <p>Orders over $100</p>
                    </div>
                </div>
            </li>
            <li class="service-content" data-animate="animate__fadeIn">
                <div class="ser-block">
                    <a class="service-icon" href="JavaScript:void(0)">
                        <span><i class="feather-dollar-sign"></i></span>
                    </a>
                    <div class="service-text">
                        <h6>Payment secure</h6>
                        <p>100% payment safe</p>
                    </div>
                </div>
            </li>
            <li class="service-content" data-animate="animate__fadeIn">
                <div class="ser-block">
                    <a class="service-icon" href="JavaScript:void(0)">
                        <span><i class="feather-headphones"></i></span>
                    </a>
                    <div class="service-text">
                        <h6>Support 24/7</h6>
                        <p>Top quality support</p>
                    </div>
                </div>
            </li>
            <li class="service-content" data-animate="animate__fadeIn">
                <div class="ser-block">
                    <a class="service-icon" href="JavaScript:void(0)">
                        <span><i class="feather-refresh-cw"></i></span>
                    </a>
                    <div class="service-text">
                        <h6>Free returns</h6>
                        <p>Within 30 days</p>
                    </div>
                </div>
            </li>
            <li class="service-content" data-animate="animate__fadeIn">
                <div class="ser-block">
                    <a class="service-icon" href="JavaScript:void(0)">
                        <span><i class="feather-award"></i></span>
                    </a>
                    <div class="service-text">
                        <h6>Best price</h6>
                        <p>Guaranteed</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    </section>
<!-- service-area end-->
</main>
<!-- main end -->
@endsection
@include('layouts.v3.components.footer')
@include('layouts.v3.components.mobile_vega')
@include('layouts.v3.components.product_modal')
@include('layouts.v3.components.mobile_menu')
@include('layouts.v3.components.search_modal')
@include('layouts.v3.components.cart_drawer')
@include('layouts.v3.components.bottom_menu')
<!-- fullscreen start -->
<div class="bg-screen"></div>
<!-- fullscreen end -->
<!-- back-to-top start -->
<a href="javascript:void(0)" id="top" class="scroll"><span><i class="feather-arrow-up"></i></span></a>
<!-- back-to-top end -->
@endsection
