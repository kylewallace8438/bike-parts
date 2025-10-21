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
<link rel="stylesheet" type="text/css" href="{{ asset('store/css/style1.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('store/css/style2.css') }}">
@endsection
@section('content')

@section('content')
<!-- screen-bg start -->
<div class="screen-bg"></div>
<!-- screen-bg end -->
<!-- preloader start -->
<div class="preloader"></div>
<!-- preloader end -->
@include('layouts.v3.components.top_notification')
@include('layouts.v3.components.header')
@include('layouts.v3.components.menu_main')
<!-- main start -->
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
                                        <span class="breadcrumb-text">Collection left</span>
                                    </li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->
            <!-- collection start -->
            <section class="main-content-wrap bg-color shop-page section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="pro-grli-wrapper left-side-wrap">
                                <div class="pro-grli-wrap product-grid">
                                    <div class="collection-img-wrap" data-animate="animate__fadeIn">
                                        <h6 class="st-title">Collection left (23)</h6>
                                        <!-- collection info start -->
                                        <div class="collection-info">
                                            <div class="collection-image" data-animate="animate__fadeIn">
                                                <img src="image/home1/collection/collection-banner.jpg" class="img-fluid" alt="sall-banner">
                                            </div>
                                        </div>
                                        <!-- collection info end -->
                                    </div>
                                    <!-- shop-top-bar start -->
                                    <div class="shop-top-bar">
                                        <div class="product-filter without-sidebar">
                                            <button class="filter-button" type="button"><i class="fa-solid fa-filter"></i><span>Filter</span></button>
                                        </div>
                                        <div class="product-view-mode">
                                            <!-- shop-item-filter-list start -->
                                            <a href="javascript:void(0)" class="list-change-view grid-three active" data-grid-view="3"><i class="fa-solid fa-border-all"></i></a>
                                            <a href="javascript:void(0)" data-grid-view="1" class="list-change-view list-one"><i class="fa-solid fa-list"></i></a>
                                            <!-- shop-item-filter-list end -->
                                        </div>
                                        <!-- product-short start -->
                                        <div class="product-short">
                                            <label for="SortBy">Sort by:</label>
                                            <select class="nice-select" name="sortby" id="SortBy">
                                                <option value="manual">Featured</option>
                                                <option value="best-selling">Best Selling</option>
                                                <option value="title-ascending">Alphabetically, A-Z</option>
                                                <option value="title-descending">Alphabetically, Z-A</option>
                                                <option value="price-ascending">Price, low to high</option>
                                                <option value="price-descending">Price, high to low</option>
                                                <option value="created-descending">Date, new to old</option>
                                                <option value="created-ascending">Date, old to new</option>
                                            </select>
                                            <span class="sort-icon"><i class="feather-chevron-down"></i></span>
                                            <a href="javascript:void(0)" class="short-title">
                                                <span class="sort-title">Best Selling</span>
                                                <span class="sort-icon"><i class="feather-chevron-down"></i></span>
                                            </a>
                                            <a href="javascript:void(0)" class="short-title short-title-lg">
                                                <span class="sort-title">Best Selling</span>
                                                <span class="sort-icon"><i class="feather-chevron-down"></i></span>
                                            </a>
                                            <ul class="pro-ul collapse">
                                                <li class="pro-li"><a href="javascript:void(0)">Featured</a></li>
                                                <li class="pro-li selected"><a href="javascript:void(0)">Best Selling</a></li>
                                                <li class="pro-li"><a href="javascript:void(0)">Alphabetically, A-Z</a></li>
                                                <li class="pro-li"><a href="javascript:void(0)">Alphabetically, Z-A</a></li>
                                                <li class="pro-li"><a href="javascript:void(0)">Price, low to high</a></li>
                                                <li class="pro-li"><a href="javascript:void(0)">Price, high to low</a></li>
                                                <li class="pro-li"><a href="javascript:void(0)">Date, new to old</a></li>
                                                <li class="pro-li"><a href="javascript:void(0)">Date, old to new</a></li>
                                            </ul>
                                        </div>
                                        <!-- product-short end -->
                                    </div>
                                    <!-- shop-top-bar end -->
                                    <!-- Latest-product start -->
                                    <div class="special-product grid-3">
                                        <div class="collection-category">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="collection-wrap">
                                                        <ul class="product-view-ul">
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-1.jpg" class="img-fluid img1 resp-img1" alt="p-1">
                                                                            <img src="image/home1/product/product-2.jpg" class="img-fluid img2 resp-img2" alt="p-2">
                                                                        </a>
                                                                        <div class="product-label pro-new-sale">
                                                                            <span class="product-label-title">18%</span>
                                                                        </div>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">Earbuds</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$65.00</span>
                                                                                <span class="old-price">$70.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-4.jpg" class="img-fluid img1 resp-img1" alt="product-4">
                                                                            <img src="image/home1/product/product-5.jpg" class="img-fluid img2 resp-img2" alt="product-5">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">Sony earbuds</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$100.00</span>
                                                                                <span class="old-price">$120.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-7.jpg" class="img-fluid img1 resp-img1" alt="product-7">
                                                                            <img src="image/home1/product/product-8.jpg" class="img-fluid img2 resp-img2" alt="product-8">
                                                                        </a>
                                                                        <div class="product-label pro-new-sale">
                                                                            <span class="product-label-title">23%</span>
                                                                        </div>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">Sandisk ssd</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$305.00</span>
                                                                                <span class="old-price">$320.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-13.jpg" class="img-fluid img1 resp-img1" alt="product-13">
                                                                            <img src="image/home1/product/product-14.jpg" class="img-fluid img2 resp-img2" alt="product-14">
                                                                        </a>
                                                                        <div class="product-label pro-new-sale">
                                                                            <span class="product-label-title">23%</span>
                                                                        </div>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">Router wifi6</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$450.00</span>
                                                                                <span class="old-price">$480.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-18.jpg" class="img-fluid img1 resp-img1" alt="product-18">
                                                                            <img src="image/home1/product/product-19.jpg" class="img-fluid img2 resp-img2" alt="product-19">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">Asus rog</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$190.00</span>
                                                                                <span class="old-price">$200.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-31.jpg" class="img-fluid img1 resp-img1" alt="product-31">
                                                                            <img src="image/home1/product/product-32.jpg" class="img-fluid img2 resp-img2" alt="product-32">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">IPad mini6</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$29.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-37.jpg" class="img-fluid img1 resp-img1" alt="product-37">
                                                                            <img src="image/home1/product/product-38.jpg" class="img-fluid img2 resp-img2" alt="product-38">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">Nokia 1434</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$500.00</span>
                                                                                <span class="old-price">$510.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-34.jpg" class="img-fluid img1 resp-img1" alt="product-37">
                                                                            <img src="image/home1/product/product-35.jpg" class="img-fluid img2 resp-img2" alt="product-38">
                                                                        </a>
                                                                        <div class="product-label pro-new-sale">
                                                                            <span class="product-label-title">18%</span>
                                                                        </div>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">IPad mini</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$29.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-40.jpg" class="img-fluid img1 resp-img1" alt="product-40">
                                                                            <img src="image/home1/product/product-41.jpg" class="img-fluid img2 resp-img2" alt="product-41">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">Nokia 110</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$160.00</span>
                                                                                <span class="old-price">$180.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-43.jpg" class="img-fluid img1 resp-img1" alt="product-43">
                                                                            <img src="image/home1/product/product-44.jpg" class="img-fluid img2 resp-img2" alt="product-44">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">Gaming laptop</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$150.00</span>
                                                                                <span class="old-price">$160.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-50.jpg" class="img-fluid img1 resp-img1" alt="product-50">
                                                                            <img src="image/home1/product/product-52.jpg" class="img-fluid img2 resp-img2" alt="product-52">
                                                                        </a>
                                                                        <div class="product-label pro-new-sale">
                                                                            <span class="product-label-title">18%</span>
                                                                        </div>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">HP color printer</a></h6>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                <span class="new-price">$650.00</span>
                                                                                <span class="old-price">$655.00</span>
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
                                                            </li>
                                                            <li class="pro-item-li" data-animate="animate__fadeIn">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="product-template.html" class="pro-img">
                                                                            <img src="image/home1/product/product-54.jpg" class="img-fluid img1 resp-img1" alt="product-54">
                                                                            <img src="image/home1/product/product-55.jpg" class="img-fluid img2 resp-img2" alt="product-55">
                                                                        </a>
                                                                        <div class="product-label pro-new-sale">
                                                                            <span class="product-label-title">18%</span>
                                                                        </div>
                                                                        <div class="product-action">
                                                                            <a href="wishlist-product.html" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="feather-heart"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                                <span class="product-icon"><i class="feather-eye"></i></span>
                                                                                <span class="tooltip-text">quickview</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-cart">
                                                                            <button type="button" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="product-loader-icon"><i class="feather-loader"></i></span>
                                                                                <span class="product-check-icon"><i class="feather-check"></i></span>
                                                                            </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-title">
                                                                                <h6><a href="product-template.html">Smartwatch</a></h6>
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
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="paginatoin-area" data-animate="animate__fadeIn">
                                                        <ul class="pagination-page-box" data-animate="animate__fadeIn">
                                                            <li class="number active"><a href="javascript:void(0)" class="theme-glink">1</a></li>
                                                            <li class="number"><a href="javascript:void(0)" class="gradient-text">2</a></li>
                                                            <li class="page-next"><a href="javascript:void(0)" class="theme-glink"><i class="fa -solid fa-angle-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Latest-product end -->
                                </div>
                                <div class="pro-grli-wrap product-sidebar">
                                    <div class="pro-grid-block">
                                        <div class="shop-sidebar-inner">
                                            <div class="shop-sidebar-wrap filter-sidebar">
                                                <!-- button start -->
                                                <button class="close-sidebar" type="button">
                                                <i class="fa-solid fa-xmark"></i>
                                                </button>
                                                <!-- button end -->
                                                <!-- filter-form start -->
                                                <div class="facets">
                                                    <form class="facets-form">
                                                        <div class="facets-wrapper">
                                                            <!-- Product-Categories start -->
                                                            <div class="shop-sidebar" data-animate="animate__fadeIn">
                                                                <h6 class="shop-title" data-animate="animate__fadeIn">Categories</h6>
                                                                <a href="#collapse-5" data-bs-toggle="collapse" class="shop-title shop-title-lg">Categories<i class="feather-chevron-down"></i></a>
                                                                <div class="collapse show shop-element" id="collapse-5">
                                                                    <ul class="brand-ul scrollbar">
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label">
                                                                            <input type="checkbox" class="cust-checkbox">
                                                                            <span class="check-name">Bluetooth</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label">
                                                                            <input type="checkbox" class="cust-checkbox">
                                                                            <span class="check-name">Earphones</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 64gb">
                                                                            <input type="checkbox" value="64gb" class="cust-checkbox">
                                                                            <span class="check-name">Headphones</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 500gb">
                                                                            <input type="checkbox" value="500gb" class="cust-checkbox">
                                                                            <span class="check-name">Collection</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 1tb">
                                                                            <input type="checkbox" value="1tb" class="cust-checkbox">
                                                                            <span class="check-name">Collection left</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 2tb">
                                                                            <input type="checkbox" value="2tb" class="cust-checkbox">
                                                                            <span class="check-name">Collection list</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Collection list left</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Collection right</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Speaker</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Router wifi6</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Sandisk ssd</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">IPad mini</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Product-Categories end -->
                                                            <div class="shop-sidebar sidebar-filter">
                                                                <h6 class="shop-title" data-animate="animate__fadeIn">Filter</h6>
                                                                <a href="javascript:void(0)" class="shop-title shop-title-lg">Filter</a>
                                                                <div class="filter-info" data-animate="animate__fadeIn">
                                                                    <span class="filter-count-text">23 products</span>
                                                                    <span class="loading-spinner"><svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle></svg></span>
                                                                </div>
                                                            </div>
                                                            <div class="shop-sidebar sidebar-price">
                                                                <h6 class="shop-title" data-animate="animate__fadeIn">Price</h6>
                                                                <a href="#collapse-3" data-bs-toggle="collapse" class="shop-title shop-title-lg">Price</a>
                                                                <div class="filter-info" data-animate="animate__fadeIn">
                                                                    <span class="shop-price">The highest price is $89.00</span>
                                                                    <facet-remove><a href="collection.html" class="reset-text">Reset</a></facet-remove>
                                                                </div>
                                                                <!-- Product-price start -->
                                                                <div class="collapse price-wrap" id="collapse-3" data-animate="animate__fadeIn">
                                                                    <price-range class="price-range">
                                                                        <div class="price-range-group group-range">
                                                                            <input type="range" class="range" min="0" max="89" value="0" id="range1">
                                                                            <input type="range" class="range" min="0" max="89" value="89" id="range2">
                                                                        </div>
                                                                        <div class="price-input-group group-input" data-animate="animate__fadeIn">
                                                                            <div class="price-range-input input-price">
                                                                                <label class="label-text">From</label>
                                                                                <span class="price-value">$</span>
                                                                                <span id="demo1" class="price-field">0</span>
                                                                            </div>
                                                                            <span class="price-range-delimeter">-</span>
                                                                            <div class="price-range-input input-price">
                                                                                <label class="label-text">To</label>
                                                                                <span class="price-value">$</span>
                                                                                <span id="demo2" class="price-field">89</span>
                                                                            </div>
                                                                        </div>
                                                                    </price-range>
                                                                </div>
                                                                <!-- Product-price end -->
                                                                <!-- More-filters start -->
                                                                <div class="shop-sidebar sidebar-open" data-animate="animate__fadeIn">
                                                                    <h6 class="shop-title" data-animate="animate__fadeIn">More filters</h6>
                                                                    <a href="#collapse-6" data-bs-toggle="collapse" class="shop-title shop-title-lg">More filters<i class="feather-chevron-down" data-animate="animate__fadeIn"></i></a>
                                                                    <div class="filter-info" data-animate="animate__fadeIn">
                                                                        <span class="shop-price">0 selected</span>
                                                                        <facet-remove>
                                                                        <a href="collection-list-right.html" class="reset-text">Reset</a>
                                                                        </facet-remove>
                                                                    </div>
                                                                    <div class="collapse shop-element shop-flavor" id="collapse-6">
                                                                        <ul class="brand-ul scrollbar">
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 16gb">
                                                                                    <input type="checkbox" value="16gb" class="cust-checkbox">
                                                                                    <span class="check-name">Air conditioner</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 32gb">
                                                                                    <input type="checkbox" value="32gb" class="cust-checkbox">
                                                                                    <span class="check-name">Portable speaker</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 64gb">
                                                                                    <input type="checkbox" value="64gb" class="cust-checkbox">
                                                                                    <span class="check-name">Wireless earbuds</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 500gb">
                                                                                    <input type="checkbox" value="500gb" class="cust-checkbox">
                                                                                    <span class="check-name">Ev charging plug</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 1tb">
                                                                                    <input type="checkbox" value="1tb" class="cust-checkbox">
                                                                                    <span class="check-name">DVD player slot</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 2tb">
                                                                                    <input type="checkbox" value="2tb" class="cust-checkbox">
                                                                                    <span class="check-name">Verse earphones</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 3tb">
                                                                                    <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                                    <span class="check-name">Video shoot drone</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 3tb">
                                                                                    <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                                    <span class="check-name">Collection right</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 3tb">
                                                                                    <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                                    <span class="check-name">Smart camera</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 3tb">
                                                                                    <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                                    <span class="check-name">Movie projector S8</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 3tb">
                                                                                    <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                                    <span class="check-name">Wireless headphones</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="cat-checkbox" data-animate="animate__fadeIn">
                                                                                <label class="checkbox-label 3tb">
                                                                                    <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                                    <span class="check-name">Stylish for trimmer</span>
                                                                                    <span class="count-check">(12)</span>
                                                                                    <span class="cust-check"></span>
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- More-filters end -->
                                                            </div>
                                                            <div class="shop-sidebar sidebar-product" data-animate="animate__fadeIn">
                                                                <h6 class="shop-title" >Product type</h6>
                                                                <a href="#collapse-2" data-bs-toggle="collapse" class="shop-title shop-title-lg">Product type</a>
                                                                <div class="filter-info">
                                                                    <span class="shop-price no-js-hidden">0 selected</span>
                                                                    <facet-remove>
                                                                    <a href="collection.html" class="reset-text">Reset</a>
                                                                    </facet-remove>
                                                                </div>
                                                                <div class="collapse filter-element" id="collapse-2">
                                                                    <ul class="brand-ul scrollbar">
                                                                        <li class="brand-li">
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="checkbox" name="cust-checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">Etro</span>
                                                                                <span class="count-check">(23)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="shop-sidebar sidebar-wedget" data-animate="animate__fadeIn">
                                                                <h6 class="shop-title">Availability</h6>
                                                                <a href="#collapse-1" class="shop-title shop-title-lg" data-bs-toggle="collapse">Availability</a>
                                                                <div class="filter-info">
                                                                    <span class="shop-price no-js-hidden">0 selected</span>
                                                                    <facet-remove>
                                                                    <a href="collection.html" class="reset-text">Reset</a>
                                                                    </facet-remove>
                                                                </div>
                                                                <div class="collapse filter-element" id="collapse-1">
                                                                    <ul class="brnad-ul scrollbar">
                                                                        <li class="availability">
                                                                            <label class="cust-checkbox-label availability in-stock">
                                                                                <input type="checkbox" name="filter.v.availability" value="1" class="cust-checkbox">
                                                                                <span class="filter-name">In stock</span>
                                                                                <span class="count-check">(23)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="availability">
                                                                            <label class="cust-checkbox-label availability in-stock">
                                                                                <input type="checkbox" name="filter.v.availability" value="1" class="cust-checkbox">
                                                                                <span class="filter-name">Out of stock</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="shop-sidebar sidebar-wedget" data-animate="animate__fadeIn">
                                                                <h6 class="shop-title">Brand</h6>
                                                                <a href="#reset" data-bs-toggle="collapse" class="shop-title shop-title-lg">Brand</a>
                                                                <div class="filter-info">
                                                                    <span class="shop-price no-js-hidden">0 selected</span>
                                                                    <facet-remove>
                                                                    <a href="collection.html" class="reset-text">Reset</a>
                                                                    </facet-remove>
                                                                </div>
                                                                <div class="collapse filter-element" id="reset">
                                                                    <ul class="brand-ul scrollbar">
                                                                        <li class="brand-li">
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="checkbox" name="cust-checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">Etro</span>
                                                                                <span class="count-check">(23)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- filter-form end -->
                                            </div>
                                        </div>
                                        <!-- sidebar img start -->
                                        <div class="sidebar-banner banner-hover" data-animate="animate__fadeIn">
                                            <a href="collection.html" class="sidebar-img banner-img">
                                                <span class="sidebar-banner-image">
                                                    <img src="image/home1/collection/side-image.jpg" class="img-fluid" alt="side-banner">
                                                </span>
                                                <span class="sidebar-banner-icon"><i class="feather-arrow-right"></i></span>
                                            </a>
                                        </div>
                                        <!-- sidebar img start -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- collection end -->
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
                              <form method="post" id="contact_form" accept-charset="UTF-8" class="contact-form">
                                <input type="hidden" name="form_type" value="customer">
                                <input type="hidden" name="utf8" value="✓">
                                <input type="hidden" name="contact[tags]" value="newsletter">
                                <div class="subscribe-block">
                                <input type="email" name="contact[email]" class="email mail" id="E-mail" value="" placeholder="Enter your email" autocapitalize="off" required="">
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
