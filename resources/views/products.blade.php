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
@vite(['resources/app/product-all.js'])
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
                    <product-all :sale-banner="{{ $sale_banner }}" banner-source="{{ asset('store/image/home1/collection/collection-banner.jpg') }}"></product-all>
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
