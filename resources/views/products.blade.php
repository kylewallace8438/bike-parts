@extends('layouts.layout')
@section('title')
    <title>Sản phẩm - Kwapp Store</title>
@endsection
@section('meta')
    <meta name="description"
        content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
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
                        {{-- <product-all :sale-banner="{{ $sale_banner }}" banner-source="{{ asset('store/image/home1/collection/collection-banner.jpg') }}"></product-all> --}}
                        <div class="pro-grli-wrapper left-side-wrap">
                            <div class="pro-grli-wrap product-grid">
                                <div class="collection-img-wrap" data-animate="animate__fadeIn">
                                    <h6 class="st-title">Collection left (23)</h6>
                                    <!-- collection info start -->
                                    <div class="collection-info">
                                        @if (isset($sale_banner) && $sale_banner)
                                            <div class="collection-image" data-animate="animate__fadeIn">
                                                <img src="{{ asset('store/image/home1/collection/collection-banner.jpg') }}"
                                                    class="img-fluid" alt="sall-banner">
                                            </div>
                                        @endif
                                    </div>
                                    <!-- collection info end -->
                                </div>
                                <!-- shop-top-bar start -->
                                <div class="shop-top-bar">
                                    <div class="product-filter without-sidebar">
                                        <button class="filter-button" type="button"><i
                                                class="fa-solid fa-filter"></i><span>Filter</span></button>
                                    </div>
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <a href="javascript:void(0)" class="list-change-view grid-three active"
                                            data-grid-view="3"><i class="fa-solid fa-border-all"></i></a>
                                        <a href="javascript:void(0)" data-grid-view="1" class="list-change-view list-one"><i
                                                class="fa-solid fa-list"></i></a>
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
                                                                <x-product.single-wrap :product="$product" />
                                                            </li>
                                                        @empty
                                                            No product found.
                                                        @endforelse
                                                    </ul>
                                                </div>
                                                <div class="paginatoin-area" data-animate="animate__fadeIn">
                                                    <ul class="pagination-page-box" data-animate="animate__fadeIn">
                                                        <li class="number active"><a href="javascript:void(0)"
                                                                class="theme-glink">1</a></li>
                                                        <li class="number"><a href="javascript:void(0)"
                                                                class="gradient-text">2</a></li>
                                                        <li class="page-next"><a href="javascript:void(0)"
                                                                class="theme-glink"><i
                                                                    class="fa -solid fa-angle-right"></i></a></li>
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
                                                            <h6 class="shop-title" data-animate="animate__fadeIn">Danh mục
                                                            </h6>
                                                            <a href="#collapse-5" data-bs-toggle="collapse"
                                                                class="shop-title shop-title-lg">Danh mục<i
                                                                    class="feather-chevron-down"></i></a>
                                                            <div class="collapse show shop-element" id="collapse-5">
                                                                <ul class="brand-ul scrollbar">
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label">
                                                                            <input type="checkbox" class="cust-checkbox">
                                                                            <span class="check-name">Bluetooth</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label">
                                                                            <input type="checkbox" class="cust-checkbox">
                                                                            <span class="check-name">Earphones</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 64gb">
                                                                            <input type="checkbox" value="64gb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Headphones</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 500gb">
                                                                            <input type="checkbox" value="500gb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Collection</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 1tb">
                                                                            <input type="checkbox" value="1tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Collection left</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 2tb">
                                                                            <input type="checkbox" value="2tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Collection list</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Collection list
                                                                                left</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Collection
                                                                                right</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Speaker</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Router wifi6</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Sandisk ssd</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox"
                                                                        data-animate="animate__fadeIn">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
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
                                                            <h6 class="shop-title" data-animate="animate__fadeIn">Lọc</h6>
                                                            <a href="javascript:void(0)"
                                                                class="shop-title shop-title-lg">Lọc</a>
                                                            <div class="filter-info" data-animate="animate__fadeIn">
                                                                <span class="filter-count-text">23 sản phẩm</span>
                                                                <span class="loading-spinner"><svg aria-hidden="true"
                                                                        focusable="false" role="presentation"
                                                                        class="spinner" viewBox="0 0 66 66"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <circle class="path" fill="none"
                                                                            stroke-width="6" cx="33"
                                                                            cy="33" r="30">
                                                                        </circle>
                                                                    </svg></span>
                                                            </div>
                                                        </div>
                                                        <div class="shop-sidebar sidebar-price">
                                                            <h6 class="shop-title" data-animate="animate__fadeIn">Giá</h6>
                                                            <a href="#collapse-3" data-bs-toggle="collapse"
                                                                class="shop-title shop-title-lg">Giá</a>
                                                            <div class="filter-info" data-animate="animate__fadeIn">
                                                                <span class="shop-price">Giá cao nhất là $89.00</span>
                                                                <facet-remove><a href="collection.html"
                                                                        class="reset-text">Đặt
                                                                        lại</a></facet-remove>
                                                            </div>
                                                            <!-- Product-price start -->
                                                            <div class="collapse price-wrap" id="collapse-3"
                                                                data-animate="animate__fadeIn">
                                                                <price-range class="price-range">
                                                                    <div class="price-range-group group-range">
                                                                        <input type="range" class="range"
                                                                            min="0" max="89" value="0"
                                                                            id="range1">
                                                                        <input type="range" class="range"
                                                                            min="0" max="89" value="89"
                                                                            id="range2">
                                                                    </div>
                                                                    <div class="price-input-group group-input"
                                                                        data-animate="animate__fadeIn">
                                                                        <div class="price-range-input input-price">
                                                                            <label class="label-text">Từ</label>
                                                                            <span class="price-value">$</span>
                                                                            <span id="demo1"
                                                                                class="price-field">0</span>
                                                                        </div>
                                                                        <span class="price-range-delimeter">-</span>
                                                                        <div class="price-range-input input-price">
                                                                            <label class="label-text">Đến</label>
                                                                            <span class="price-value">$</span>
                                                                            <span id="demo2"
                                                                                class="price-field">89</span>
                                                                        </div>
                                                                    </div>
                                                                </price-range>
                                                            </div>
                                                            <!-- Product-price end -->
                                                            <!-- More-filters start -->
                                                            <div class="shop-sidebar sidebar-open"
                                                                data-animate="animate__fadeIn">
                                                                <h6 class="shop-title" data-animate="animate__fadeIn">Bộ
                                                                    lọc khác</h6>
                                                                <a href="#collapse-6" data-bs-toggle="collapse"
                                                                    class="shop-title shop-title-lg">Bộ lọc khác<i
                                                                        class="feather-chevron-down"
                                                                        data-animate="animate__fadeIn"></i></a>
                                                                <div class="filter-info" data-animate="animate__fadeIn">
                                                                    <span class="shop-price">0 đã chọn</span>
                                                                    <facet-remove>
                                                                        <a href="collection-list-right.html"
                                                                            class="reset-text">Đặt lại</a>
                                                                    </facet-remove>
                                                                </div>
                                                                <div class="collapse shop-element shop-flavor"
                                                                    id="collapse-6">
                                                                    <ul class="brand-ul scrollbar">
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 16gb">
                                                                                <input type="checkbox" value="16gb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Air
                                                                                    conditioner</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 32gb">
                                                                                <input type="checkbox" value="32gb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Portable
                                                                                    speaker</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 64gb">
                                                                                <input type="checkbox" value="64gb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Wireless
                                                                                    earbuds</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 500gb">
                                                                                <input type="checkbox" value="500gb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Ev charging
                                                                                    plug</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 1tb">
                                                                                <input type="checkbox" value="1tb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">DVD player
                                                                                    slot</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 2tb">
                                                                                <input type="checkbox" value="2tb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Verse
                                                                                    earphones</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 3tb">
                                                                                <input type="checkbox" value="3tb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Video shoot
                                                                                    drone</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 3tb">
                                                                                <input type="checkbox" value="3tb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Collection
                                                                                    right</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 3tb">
                                                                                <input type="checkbox" value="3tb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Smart
                                                                                    camera</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 3tb">
                                                                                <input type="checkbox" value="3tb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Movie projector
                                                                                    S8</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 3tb">
                                                                                <input type="checkbox" value="3tb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Wireless
                                                                                    headphones</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="cat-checkbox"
                                                                            data-animate="animate__fadeIn">
                                                                            <label class="checkbox-label 3tb">
                                                                                <input type="checkbox" value="3tb"
                                                                                    class="cust-checkbox">
                                                                                <span class="check-name">Stylish for
                                                                                    trimmer</span>
                                                                                <span class="count-check">(12)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- More-filters end -->
                                                        </div>
                                                        <div class="shop-sidebar sidebar-product"
                                                            data-animate="animate__fadeIn">
                                                            <h6 class="shop-title">Loại sản phẩm</h6>
                                                            <a href="#collapse-2" data-bs-toggle="collapse"
                                                                class="shop-title shop-title-lg">Loại sản phẩm</a>
                                                            <div class="filter-info">
                                                                <span class="shop-price no-js-hidden">0 đã chọn</span>
                                                                <facet-remove>
                                                                    <a href="collection.html" class="reset-text">Đặt
                                                                        lại</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse filter-element" id="collapse-2">
                                                                <ul class="brand-ul scrollbar">
                                                                    <li class="brand-li">
                                                                        <label class="cust-checkbox-label">
                                                                            <input type="checkbox" name="cust-checkbox"
                                                                                class="cust-checkbox">
                                                                            <span class="filter-name">Etro</span>
                                                                            <span class="count-check">(23)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="shop-sidebar sidebar-wedget"
                                                            data-animate="animate__fadeIn">
                                                            <h6 class="shop-title">Tình trạng</h6>
                                                            <a href="#collapse-1" class="shop-title shop-title-lg"
                                                                data-bs-toggle="collapse">Tình trạng</a>
                                                            <div class="filter-info">
                                                                <span class="shop-price no-js-hidden">0 đã chọn</span>
                                                                <facet-remove>
                                                                    <a href="collection.html" class="reset-text">Đặt
                                                                        lại</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse filter-element" id="collapse-1">
                                                                <ul class="brnad-ul scrollbar">
                                                                    <li class="availability">
                                                                        <label
                                                                            class="cust-checkbox-label availability in-stock">
                                                                            <input type="checkbox"
                                                                                name="filter.v.availability"
                                                                                value="1" class="cust-checkbox">
                                                                            <span class="filter-name">Còn hàng</span>
                                                                            <span class="count-check">(23)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="availability">
                                                                        <label
                                                                            class="cust-checkbox-label availability in-stock">
                                                                            <input type="checkbox"
                                                                                name="filter.v.availability"
                                                                                value="1" class="cust-checkbox">
                                                                            <span class="filter-name">Hết hàng</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="shop-sidebar sidebar-wedget"
                                                            data-animate="animate__fadeIn">
                                                            <h6 class="shop-title">Thương hiệu</h6>
                                                            <a href="#reset" data-bs-toggle="collapse"
                                                                class="shop-title shop-title-lg">Thương
                                                                hiệu</a>
                                                            <div class="filter-info">
                                                                <span class="shop-price no-js-hidden">0 đã chọn</span>
                                                                <facet-remove>
                                                                    <a href="collection.html" class="reset-text">Đặt
                                                                        lại</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse filter-element" id="reset">
                                                                <ul class="brand-ul scrollbar">
                                                                    <li class="brand-li">
                                                                        <label class="cust-checkbox-label">
                                                                            <input type="checkbox" name="cust-checkbox"
                                                                                class="cust-checkbox">
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
                                                <img src="{{ asset('store/image/home1/collection/side-image.jpg') }}"
                                                    class="img-fluid" alt="side-banner">
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
