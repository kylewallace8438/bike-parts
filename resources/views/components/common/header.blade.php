<!-- header-area start -->
<header id="header" class="main-header stickyheader">
    <div class="header-area">
        <div class="container-fluid">
            <div class="main-menu-area">
                <div class="main-menu-wrap">
                    <!-- header-logo start -->
                    <div class="header-theme-logo">
                        <a href="{{ route('home') }}" class="theme-logo">
                            <img src="{{ asset('store/image/home2/logo.png') }}" class="img-fluid" alt="logo">
                        </a>
                        <!-- contact start -->
                        <div class="call-line">
                            <a href="tel:+2031234567890">
                                <div class="icon-block"><i class="feather-headphones"></i></div>
                                <div class="contact-block">
                                    <span>+ 203 123 456 7890</span>
                                    <span>Available 24/7</span>
                                </div>
                            </a>
                        </div>
                        <!-- contact end -->
                    </div>
                    <!-- header-logo end -->
                    <!-- search-wrapper start -->
                    <!-- header-search start -->
                    <div class="header-element header-search">
                        <div class="header-theme-search">
                            <form method="get" action="/search" class="search-form">
                                <div class="search-bar">
                                    <div class="form-search">
                                        <input type="search" name="search-input" class="search-input" value=""
                                            placeholder="{{ __('header.search_placeholder') }}" required="">
                                        <button type="button" onclick="location.href='search.html'" class="search-btn"
                                            disabled=""><i class="feather-search"></i></button>
                                    </div>
                                    <div class="search-results">
                                        <p class="search-for">Search for <span class="search-text">a</span></p>
                                        <ul>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="{{ asset('store/image/home2/product/product-1.jpg') }}"
                                                        class="img-fluid" alt="p-1">
                                                    <span>Earbuds</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="{{ asset('store/image/home2/product/product-6.jpg') }}"
                                                        class="img-fluid" alt="p-6">
                                                    <span>IPad mini6</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="{{ asset('store/image/home2/product/product-8.jpg') }}"
                                                        class="img-fluid" alt="p-8">
                                                    <span>Nokia 1434</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="{{ asset('store/image/home2/product/product-12.jpg') }}"
                                                        class="img-fluid" alt="p-10">
                                                    <span>Smartwatch</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="{{ asset('store/image/home2/product/product-13.jpg') }}"
                                                        class="img-fluid" alt="p-13">
                                                    <span>Mouse</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="{{ asset('store/image/home2/product/product-14.jpg') }}"
                                                        class="img-fluid" alt="p-12">
                                                    <span>Camera</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="search-more"><a href="search.html">{{ __('header.search_result') }} (12)</a></p>
                                        <p class="search-fail">{{ __('header.search_fail') }}</p>
                                    </div>
                                    <a href="#" class="search-btn"><i class="feather-search"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- header-text end -->
                    <!-- search-wrapper end -->
                    <!-- header-icon start -->
                    <div class="header-icon-block">
                        <ul class="shop-element">
                            <li class="side-wrap toggler-wrap">
                                <div class="toggler-wrapper">
                                    <button type="button" class="toggler-btn"><span class="toggler-icon"><i
                                                class="feather-menu"></i></span></button>
                                </div>
                            </li>
                            <li class="side-wrap search-wrap">
                                <div class="search-wrapper">
                                    <a href="#searchmodal" data-bs-toggle="modal">
                                        <span class="search-icon"><i class="feather-search"></i></span>
                                    </a>
                                </div>
                            </li>
                            <li class="side-wrap user-wrap">
                                <div class="user-info">
                                    <a href="login-account.html">
                                        <span class="user-icon"><i class="feather-user"></i></span>
                                    </a>
                                </div>
                            </li>
                            <li class="side-wrap wishlist-wrap">
                                <div class="wishlist-wrapper">
                                    <a href="wishlist-product.html">
                                        <span class="wishlist-icon-count">
                                            <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                            <span class="wishlist-count">(5)</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="side-wrap cart-wrap">
                                <div class="cart-wrapper">
                                    <a href="javascript:void(0)" class="js-cart-drawer">
                                        <span class="cart-icon-count">
                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                            <span class="cart-count cart-counter">(4)</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- header-icon end -->
                </div>
            </div>
        </div>
    </div>
    <x-common.menu-main />
</header>
<!-- header end -->
