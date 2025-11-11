@extends('layouts.layout')
@section('title')
<title>Sản phẩm - Kwapp Store</title>
@endsection
@section('meta')
<meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
<meta name="keywords" content="phụ tùng KTM, phụ tùng Husqvarna, phụ tùng chính hãng KTM, phụ tùng xe KTM giá rẻ">
<meta name="author" content="kwapp store">
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
@vite(['resources/app/products-sidebar.js'])
@endsection

@section('content')
<!-- screen-bg start -->
<div class="screen-bg"></div>
<!-- screen-bg end -->
<!-- preloader start -->
<div class="preloader"></div>
<!-- preloader end -->
<x-common.top-notification />
<x-common.header />
<x-common.menu-main />
<!-- main start -->
<main>
    {{-- <x-breadcrumb :list="[
        ['name' => 'Trang chủ', 'link' => route('home')],
        ['name' => 'Sản phẩm', 'link' => route('products')]
    ]" /> --}}

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
                                    @if (isset($sale_banner) && $sale_banner)
                                    <div class="collection-image" data-animate="animate__fadeIn">
                                        <img src="{{ asset('store/image/home1/collection/collection-banner.jpg') }}" class="img-fluid" alt="sall-banner">
                                    </div>
                                    @endif
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
                                                    @forelse ($products as $product)
                                                        <li class="pro-item-li" data-animate="animate__fadeIn">
                                                            <x-product.single-wrap :product="$product"/>
                                                        </li>
                                                    @empty
                                                        No product found.
                                                    @endforelse
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
                        <products-sidebar class="pro-grli-wrap product-sidebar"></products-sidebar>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- collection end -->
    {{-- <x-newsletter /> --}}

</main>
<!-- main end -->
<x-common.footer />
<x-common.mobile-vega />
<x-common.mobile-menu />
<x-common.search-modal />
<x-common.cart-drawer />
<x-common.bottom-menu />
<x-product.quickview-modal />
<!-- fullscreen start -->
<div class="bg-screen"></div>
<!-- fullscreen end -->
<!-- back-to-top start -->
<a href="javascript:void(0)" id="top" class="scroll"><span><i class="feather-arrow-up"></i></span></a>
<!-- back-to-top end -->
@endsection
