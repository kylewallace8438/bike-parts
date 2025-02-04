<template>
  <header class="header-main_area bg--sapphire">
    <div class="header-top_area d-lg-block d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="main-menu_area position-relative">
                        <nav class="main-nav">
                            <ul>
                                <li class=""><a href="#">Trang chủ</a></li>
                                <li class=""><a href="#">Phụ tùng</a></li>
                                <li class=""><a href="#">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                </div>
            </div>
        </div>
    </div>
    <div class="header-top_area header-sticky bg--sapphire">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-7 d-lg-block d-none">
                    <div class="main-menu_area position-relative">
                        <nav class="main-nav">
                            <ul>
                                <li><a href="javascript:void(0)">Trang chủ</a></li>
                                <li><a href="javascript:void(0)">Phụ tùng</a></li>
                                <li><a href="javascript:void(0)">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3 d-block d-lg-none">
                    <div class="header-logo_area header-sticky_logo">
                        <a href="index.html">
                            <img :src="'/assets/images/menu/logo/1.png'" alt="Uren's Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-sm-9">
                    <div class="header-right_area">
                        <ul style="justify-content: end">
                            <li class="mobile-menu_wrap d-flex d-lg-none">
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                            <li class="contact-us_wrap">
                                <a href="tel://+84946305096"><i class="ion-android-call"></i>(+84) 946 305 096</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle_area">
        <div class="container-fluid">
            <div class="row">
                <div class="custom-logo_col col-12">
                    <div class="header-logo_area">
                        <a href="index.html">
                            <img :src="'/assets/images/menu/logo/1.png'" alt="Uren's Logo">
                        </a>
                    </div>
                </div>
                <div class="custom-category_col col-12">
                    <div class="category-menu category-menu-hidden">
                        <div class="category-heading">
                            <h2 class="categories-toggle">
                                <span>Danh mục hàng</span>
                            </h2>
                        </div>
                        <div id="cate-toggle" class="category-menu-list">
                            <ul>
                                <li class="right-menu"><a href="#">Theo hãng</a>
                                    <ul class="cat-dropdown">
                                        <li>
                                            <a href="#">BMW</a>
                                            <a href="#">HONDA</a>
                                            <a href="#">KAWASAKI</a>
                                            <a href="#">KTM/HUSQVARNA</a>
                                            <a href="#">YAMAHA</a>
                                            <a href="#">TRIUMP</a>
                                            <a href="#">HARLEY DAVIDSON</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="right-menu"><a href="#">Đồ bảo hộ</a>
                                    <ul class="cat-mega-menu cat-mega-menu-2">
                                        <li class="right-menu cat-mega-title">
                                            <a href="#">Áo & Quần</a>
                                            <ul>
                                                <li><a href="#">Chạy phố</a></li>
                                                <li><a href="#">Chạy rừng</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-menu cat-mega-title">
                                            <a href="#">Giày & Găng tay</a>
                                            <ul>
                                                <li><a href="#">Chạy phố</a></li>
                                                <li><a href="#">Chạy rừng</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-menu cat-mega-title">
                                            <a href="#">Mũ bảo hiểm</a>
                                            <ul>
                                                <li><a href="#">Full-face</a></li>
                                                <li><a href="#">3/4</a></li>
                                                <li><a href="#">Cross</a></li>
                                                <li><a href="#">ADV</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-menu cat-mega-title">
                                            <a href="#">Khác</a>
                                            <ul>
                                                <li><a href="#">Giáp ngực</a></li>
                                                <li><a href="#">Giáp lưng</a></li>
                                                <li><a href="#">Giáp gối</a></li>
                                                <li><a href="#">Giáp tay</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="right-menu"><a href="#">Phụ kiện thêm</a>
                                    <ul class="cat-mega-menu cat-mega-menu-3">
                                        <li class="right-menu cat-mega-title">
                                            <a href="#">Phụ kiện</a>
                                            <ul>
                                                <li><a href="#">Giá đỡ điện thoại</a></li>
                                                <li><a href="#">Thùng</a></li>
                                                <li><a href="#">Sạc</a></li>
                                                <li><a href="#">Cảm biến</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Ống xả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="custom-search_col col-12">
                    <div class="hm-form_area">
                        <form action="#" class="hm-searchbox">
                            <input type="text" placeholder="Nhập từ khoá cần tìm ...">
                            <button class="header-search_btn" type="submit"><i
                                class="ion-ios-search-strong"><span>Tìm kiếm</span></i></button>
                        </form>
                    </div>
                </div>
                <div class="custom-cart_col col-12">
                    <div class="header-right_area">
                        <ul style="justify-content: end">
                            <li class="mobile-menu_wrap d-flex d-lg-none">
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                            <li class="contact-us_wrap">
                                <a href="tel://+84946305096"><i class="ion-android-call"></i>(+84) 946 305 096</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4>Shopping Cart</h4>
                </div>
                <ul class="minicart-list">
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                            class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img :src="'/assets/images/product/small-size/1.jpg'" alt="Uren's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Autem ipsa ad</a>
                            <span class="product-item_quantity">1 x $145.80</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                            class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img :src="'/assets/images/product/small-size/2.jpg'" alt="Uren's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Tenetur illum amet</a>
                            <span class="product-item_quantity">1 x $150.80</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                            class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img :src="'/assets/images/product/small-size/3.jpg'" alt="Uren's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Non doloremque placeat</a>
                            <span class="product-item_quantity">1 x $165.80</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="minicart-item_total">
                <span>Subtotal</span>
                <span class="ammount">$462.4‬0</span>
            </div>
            <div class="minicart-btn_area">
                <a href="cart.html" class="uren-btn uren-btn_dark uren-btn_fullwidth">Minicart</a>
            </div>
            <div class="minicart-btn_area">
                <a href="checkout.html" class="uren-btn uren-btn_dark uren-btn_fullwidth">Checkout</a>
            </div>
        </div>
    </div>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                <div class="offcanvas-inner_search">
                    <form action="#" class="inner-searchbox">
                        <input type="text" placeholder="Search for item...">
                        <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active"><a href="index.html"><span
                                class="mm-text">Home</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.html">
                                        <span class="mm-text">Home One</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-2.html">
                                        <span class="mm-text">Home Two</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-3.html">
                                        <span class="mm-text">Home Three</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <nav class="offcanvas-navigation user-setting_area">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                                class="mm-text">User
                                Setting</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">My Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login-register.html">
                                        <span class="mm-text">Login | Register</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
</template>
<script setup>
</script>
