@extends('layouts.layout')
@section('title')
    <title>Trang chủ - Kwapp Store</title>
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
    <x-common.header />
    <x-common.menu-main />
    <main>
        @php
            $list = [
                ['name' => 'Trang chủ', 'link' => route('home')],
                ['name' => 'Sản phẩm', 'link' => route('products')],
                ['name' => $product['title'], 'link' => route('product', ['slug' => $product['slug']])],
            ];
        @endphp
        <x-common.breadcrumb :list="$list">
        </x-common.breadcrumb>
        <!-- pro-detail-page start -->
        <section class="product-details-page pro-style2 bg-color section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="pro-details-pos pro-details-left-pos">
                            <!-- Product slider start -->
                            <div class="product-detail-slider product-details-lr product-details product-details-sticky">
                                <!-- Product slider start -->
                                <div class="product-detail-img product-detail-img-right">
                                    <div class="product-img-top" data-animate="animate__fadeIn">
                                        <button class="full-view"><i class="feather-maximize"></i></button>
                                        <div class="style2-slider-big slick-slider">
                                            @forelse ($product['images'] as $image)
                                                <div class="slick-slide">
                                                    <a href="{{ $image['url'] }}" class="product-single">
                                                        <img src="{{ $image['url'] }}" data-zoom="{{ $image['url'] }}"
                                                            class="img-fluid zoom" alt="{{ $image['altText'] }}">
                                                    </a>
                                                </div>
                                            @empty
                                                <div class="slick-slide">
                                                    <a href="https://placeholder.com/600x400" class="product-single">
                                                        <img src="https://placeholder.com/600x400"
                                                            data-zoom="https://placeholder.com/600x400"
                                                            class="img-fluid zoom" alt="Placeholder Image">
                                                    </a>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                    <!-- small slick-slider start -->
                                    <div class="pro-slider" data-animate="animate__fadeIn">
                                        <div class="style2-slider-small pro-detail-slider">
                                            @foreach ($product['images'] as $image)
                                                <div class="slick-slide">
                                                    <a href="javascript:void(0)" class="product-single--thumbnail">
                                                        <img src="{{ $image['url'] }}" class="img-fluid"
                                                            alt="{{ $image['altText'] }}">
                                                    </a>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                    <!-- small slick-slider end -->
                                </div>
                                <!-- Product slider end -->
                            </div>
                            <!-- peoduct detail start -->
                            <div class="product-details-wrap product-details-lr product-details">
                                <div class="product-details-info">
                                    <div class="pro-nprist">
                                        <div class="product-info" data-animate="animate__fadeIn">
                                            <!-- product-title start -->
                                            <div class="product-title">
                                                <h2>{{ $product['title'] }}</h2>
                                            </div>
                                            <!-- product-title end -->
                                        </div>
                                        <div class="product-info" data-animate="animate__fadeIn">
                                            <div class="pro-prlb pro-sale">
                                                <div class="price-box">
                                                    <span class="new-price">@money($product['min_price'])</span>
                                                    <span class="old-price">$19.00</span>
                                                    <span class="percent-count">42</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info" data-animate="animate__fadeIn">
                                            <div class="product-inventory">
                                                {{-- <div class="stock-inventory stock-more">
                                                    <p class="text-success">Hurry up! only
                                                        <span class="available-stock bg-success">77</span>
                                                        <span>products left in stock!</span>
                                                    </p>
                                                </div> --}}
                                                <div class="product-variant">
                                                    <h6>{{ __('product.status') }}:</h6>
                                                    <span class="stock-qty in-stock text-success">
                                                        <span>{{ __('product.in_stock') }}<i class="bi bi-check2"></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="product-info" data-animate="animate__fadeIn">
                                            <div class="pro-detail-action">
                                                <form method="get" class="cart">
                                                    <div class="product-variant-option">
                                                        <div class="swatch-variant">
                                                            <div class="swatch clearfix Color">
                                                                <div class="header">
                                                                    <h6><span>Color</span></h6>
                                                                </div>
                                                                <div class="variant-wrap">
                                                                    <div class="variant-property">
                                                                        <div class="swatch-element White first-variant">
                                                                            <input type="radio" name="option-0"
                                                                                value="White" checked>
                                                                            <label>White</label>
                                                                        </div>
                                                                        <div class="swatch-element Gold">
                                                                            <input type="radio" name="option-0"
                                                                                value="Gold">
                                                                            <label>Gold</label>
                                                                        </div>
                                                                        <div class="swatch-element Silver">
                                                                            <input type="radio" name="option-0"
                                                                                value="Silver">
                                                                            <label>Silver</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> --}}
                                        <div class="product-info" data-animate="animate__fadeIn">
                                            <form method="post" class="cart">
                                                <div class="product-quantity-action">
                                                    <h6>{{ __('product.quantity') }}:</h6>
                                                    <div class="product-quantity">
                                                        <div class="cart-plus-minus">
                                                            <button class="dec qtybutton minus"><i
                                                                    class="fa-solid fa-minus"></i></button>
                                                            <input type="text" name="quantity" value="1">
                                                            <button class="inc qtybutton plus"><i
                                                                    class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product-info" data-animate="animate__fadeIn">
                                            <div class="product-actions">
                                                <!-- pro-deatail button start -->
                                                <div class="pro-detail-button">
                                                    <button type="button" onclick="location. href='cart-page.html'"
                                                        class="btn add-to-cart ajax-spin-cart">
                                                        <span class="cart-title">{{ __('product.add_to_cart') }}</span>
                                                    </button>
                                                    <a href="cart-empty.html" class="btn btn-cart btn-theme">
                                                        <span>{{ __('product.buy_now') }}</span>
                                                    </a>
                                                </div>
                                                <!-- pro-deatail button start -->
                                                <!-- pro-deatail wishlist start -->
                                                <div class="pro-aff-che">
                                                    <a href="wishlist-product.html" class="wishlist">
                                                        <span
                                                            class="wishlist-icon action-wishlist tile-actions--btn wishlist-btn">
                                                            <span class="add-wishlist"><i
                                                                    class="feather-heart"></i></span>
                                                        </span>
                                                        <span class="wishlist-text">{{ __('product.wishlist') }}</span>
                                                    </a>
                                                </div>
                                                <!-- pro-deatail wishlist end -->
                                            </div>
                                        </div>
                                        <div class="product-info" data-animate="animate__fadeIn">
                                            <div class="form-group">
                                                <a href="#deliver-modal" data-bs-toggle="modal">{{ __('product.policy') }}</a>
                                                <a href="#que-modal" data-bs-toggle="modal">{{ __('product.ask_question') }}</a>
                                            </div>
                                        </div>
                                        <div class="modal fade deliver-modal" id="deliver-modal" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <button type="button" class="pop-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i class="feather-x"></i></button>
                                                        <div class="delivery-block">
                                                            <div class="space-block">
                                                                <h4>Delivery</h4>
                                                                <p>All orders shipped with UPS Express.</p>
                                                                <p>Always free shipping for orders over US $250.</p>
                                                                <p>All orders are shipped with a UPS tracking number.</p>
                                                            </div>
                                                            <div class="space-block">
                                                                <h4>Returns</h4>
                                                                <p>Items returned within 14 days of their original shipment
                                                                    date in same as new condition will be eligible for a
                                                                    full refund or store credit.</p>
                                                                <p>Refunds will be charged back to the original form of
                                                                    payment used for purchase.</p>
                                                                <p>Customer is responsible for shipping charges when making
                                                                    returns and shipping/handling fees of original purchase
                                                                    is non-refundable.</p>
                                                                <p>All sale items are final purchases.</p>
                                                            </div>
                                                            <div class="space-block">
                                                                <h4>Help</h4>
                                                                <p>Give us a shout if you have any other questions and/or
                                                                    concerns.</p>
                                                                <p>Email:<a
                                                                        href="mailto:contact@domain.com">demo@gmail.com</a>
                                                                </p>
                                                                <p>Phone:<a href="tel:+1(23)456789">+1 (23) 456 789</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- que-modal stat -->
                                        <div class="modal fade que-modal" id="que-modal" aria-modal="true"
                                            tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <button type="button" class="pop-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i class="feather-x"></i></button>
                                                        <div class="product-form-list">
                                                            <div class="single-product-wrap">
                                                                <div class="product-image">
                                                                    <a class="pro-img" href="collection.html">
                                                                        <img class="img-fluid img1 resp-img1"
                                                                            src="image/home1/product/product-1.jpg"
                                                                            alt="p-1">
                                                                        <img class="img-fluid img2 resp-img2"
                                                                            src="image/home1/product/product-2.jpg"
                                                                            alt="p-2">
                                                                    </a>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="pro-title-price">
                                                                        <h6><a href="product-template.html">Verse
                                                                                earphones</a></h6>
                                                                        <div class="product-price">
                                                                            <div class="price-box">
                                                                                <span class="new-price">$21.00</span>
                                                                                <span class="old-price">$25.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ask-form">
                                                            <h6>Ask a question</h6>
                                                            <form method="post" class="contact-form">
                                                                <input type="hidden" name="contact[product url]"
                                                                    value="">
                                                                <div class="form-grp">
                                                                    <input type="text" name="contact[name]"
                                                                        required="" placeholder="Your name*">
                                                                    <input type="text" name="contact[phone]"
                                                                        placeholder="Your phone number">
                                                                    <input type="email" name="contact[email]"
                                                                        required="" placeholder="Your email*">
                                                                    <textarea name="contact[question]" rows="4" required="" placeholder="Your message*"></textarea>
                                                                    <p>* Required fields</p>
                                                                    <button type="submit" class="btn-style2">Submit
                                                                        Now</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- que-modal end -->
                                        <div class="product-info" data-animate="animate__fadeIn">
                                            <div class="product-sku">
                                                <h6>SKU:</h6>
                                                <span class="variant-sku">abccd-13</span>
                                            </div>
                                        </div>
                                        <div class="product-info" data-animate="animate__fadeIn">
                                            <div class="share-icons">
                                                <h6>Share:</h6>
                                                <div class="pro-social">
                                                    <ul class="social-icon">
                                                        <li>
                                                            <a href="https://www.facebook.com/" class="facebook" target="_blank"><i
                                                                    class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://twitter.com/" class="twitter" target="_blank"><i
                                                                    class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://web.telegram.org" class="twitter" target="_blank"><i
                                                                    class="fab fa-telegram"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://in.pinterest.com/" class="pinterest" target="_blank"><i
                                                                    class="fab fa-pinterest-p"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="product-info" data-animate="animate__fadeIn">
                                            <div class="product-payment-image">
                                                <ul class="payment-icon">
                                                    <li>
                                                        <a href="index1.html"><svg viewBox="0 0 38 24"
                                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                                width="38" height="24">
                                                                <title id="visa">Visa</title>
                                                                <path opacity=".07"
                                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                                </path>
                                                                <path fill="#fff"
                                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                                </path>
                                                                <path
                                                                    d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                                                                    fill="#142688"></path>
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a href="index1.html"><svg viewBox="0 0 38 24"
                                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                                width="38" height="24">
                                                                <title id="master">Mastercard</title>
                                                                <path opacity=".07"
                                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                                </path>
                                                                <path fill="#fff"
                                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                                </path>
                                                                <circle fill="#EB001B" cx="15" cy="12"
                                                                    r="7"></circle>
                                                                <circle fill="#F79E1B" cx="23" cy="12"
                                                                    r="7"></circle>
                                                                <path fill="#FF5F00"
                                                                    d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                                                                </path>
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a href="index1.html"><svg xmlns="http://www.w3.org/2000/svg"
                                                                role="img" viewBox="0 0 38 24" width="38"
                                                                height="24">
                                                                <title id="american-express">American Express</title>
                                                                <path fill="#000"
                                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3Z"
                                                                    opacity=".07"></path>
                                                                <path fill="#006FCF"
                                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32Z">
                                                                </path>
                                                                <path fill="#FFF"
                                                                    d="M22.012 19.936v-8.421L37 11.528v2.326l-1.732 1.852L37 17.573v2.375h-2.766l-1.47-1.622-1.46 1.628-9.292-.02Z">
                                                                </path>
                                                                <path fill="#006FCF"
                                                                    d="M23.013 19.012v-6.57h5.572v1.513h-3.768v1.028h3.678v1.488h-3.678v1.01h3.768v1.531h-5.572Z">
                                                                </path>
                                                                <path fill="#006FCF"
                                                                    d="m28.557 19.012 3.083-3.289-3.083-3.282h2.386l1.884 2.083 1.89-2.082H37v.051l-3.017 3.23L37 18.92v.093h-2.307l-1.917-2.103-1.898 2.104h-2.321Z">
                                                                </path>
                                                                <path fill="#FFF"
                                                                    d="M22.71 4.04h3.614l1.269 2.881V4.04h4.46l.77 2.159.771-2.159H37v8.421H19l3.71-8.421Z">
                                                                </path>
                                                                <path fill="#006FCF"
                                                                    d="m23.395 4.955-2.916 6.566h2l.55-1.315h2.98l.55 1.315h2.05l-2.904-6.566h-2.31Zm.25 3.777.875-2.09.873 2.09h-1.748Z">
                                                                </path>
                                                                <path fill="#006FCF"
                                                                    d="M28.581 11.52V4.953l2.811.01L32.84 9l1.456-4.046H37v6.565l-1.74.016v-4.51l-1.644 4.494h-1.59L30.35 7.01v4.51h-1.768Z">
                                                                </path>
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a href="index1.html"><svg viewBox="0 0 38 24"
                                                                xmlns="http://www.w3.org/2000/svg" width="38"
                                                                height="24" role="img">
                                                                <title id="paypal">PayPal</title>
                                                                <path opacity=".07"
                                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                                </path>
                                                                <path fill="#fff"
                                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                                </path>
                                                                <path fill="#003087"
                                                                    d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z">
                                                                </path>
                                                                <path fill="#3086C8"
                                                                    d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z">
                                                                </path>
                                                                <path fill="#012169"
                                                                    d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z">
                                                                </path>
                                                            </svg></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="product-description-tab" data-animate="animate__fadeIn">
                                    <div class="product-tab horizontal-tab">
                                        <div class="tab">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation">
                                                    <a href="#pro-dec" class="active" data-bs-toggle="tab">
                                                        <h6>Mô tả</h6>
                                                    </a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#pro-add-info" data-bs-toggle="tab">
                                                        <h6>Thông tin bổ sung</h6>
                                                    </a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#pro-custom-content" data-bs-toggle="tab">
                                                        <h6>Nội dung khác</h6>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="description-review-text tab-content">
                                            <div class="tab-pane active" id="pro-dec" data-animate="animate__fadeIn">
                                                <div class="product-description">
                                                    <p>{{ $product['description'] }}</p>
                                                    {{-- <h6>About this item</h6>
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li>Sed do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua.</li>
                                                        <li>As Cicero would put it, “Um, not so fast.”</li>
                                                        <li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                                            consectetur, adipisci velit.</li>
                                                        <li>Sed quia non numquam eius modi tempora incidunt ut labore et
                                                            dolore magnam aliquam quaerat voluptatem.</li>
                                                        <li>Nor is there anyone who loves or pursues or desires to obtain
                                                            pain of itself.</li>
                                                        <li>Because it is pain, but occasionally circumstances occur in
                                                            which toil and pain can procure him some great pleasure.</li>
                                                    </ul> --}}
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="pro-add-info" data-animate="animate__fadeIn">
                                                <div class="product-additional-info">
                                                    <table>
                                                        <tbody>
                                                            <tr class="product-info">
                                                                <th>Vendor</th>
                                                                <td>
                                                                    <a href="javascript:void(0)">Etro</a>
                                                                </td>
                                                            </tr>
                                                            <tr class="product-info">
                                                                <th>Type</th>
                                                                <td>
                                                                    <a href="javascript:void(0)">Portable speaker</a>
                                                                </td>
                                                            </tr>
                                                            <tr class="product-info">
                                                                <th>Color</th>
                                                                <td>Speaker, Wifi, camera</td>
                                                            </tr>
                                                            <tr class="product-info">
                                                                <th>Sku</th>
                                                                <td>abccd-13</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="pro-custom-content" data-animate="animate__fadeIn">
                                                <div class="product-custom-content">
                                                    <p>The purpose of lorem ipsum is to create a natural looking block of
                                                        text (sentence, paragraph, page, etc.) that doesn't distract from
                                                        the layout. A practice not without controversy, laying out pages
                                                        with meaningless filler text can be very useful when the focus is
                                                        meant to be on design, not content.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- peoduct detail end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pro-detail-page end -->
        <!-- product video-review start -->
        <section class="product-reviews section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="video">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/0Aja_yP93PY" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-product.review />
        </section>
        <!-- product video-review end -->
        @php
            $last_view_products = Session::get('last_viewed_products') ?? [];
            $last_view_products = Arr::reject($last_view_products, function ($item) use ($product) {
                return $item['shopify_id'] == $product->shopify_id;
            });
        @endphp
        @if (count($last_view_products) > 0)
            <x-product.recent :products="$last_view_products" />
        @endif
        <x-common.newsletter />
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
@section('scripts')
<script>
    const product = {!! json_encode($product) !!};
</script>
@endsection