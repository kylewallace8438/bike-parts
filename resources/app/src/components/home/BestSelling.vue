<template>
    <!-- Begin Uren's Best Selling Product Area -->
    <div class="best-selling-product_area">
        <div class="container-fluid">
            <div class="section-title_area">
                <span>Top Best Selling On This Week</span>
                <h3>Best Selling Products</h3>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-2 col-md-4 col-sm-4">
                    <div class="banner-item best-selling_banner img-hover_effect"></div>
                </div>
                <div class="col-xl-10 col-md-8 col-sm-8">
                    <div class="best-selling_slider uren-slick-slider slider-navigation_style-1 img-hover-effect_area"
                        data-slick-options='{
                    "slidesToShow": 5,
                    "arrows" : true,
                    "rows": 2
                    }' data-slick-responsive='[
                        {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                        {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                        {"breakpoint":768, "settings": {"slidesToShow": 1, "rows": 1}},
                        {"breakpoint":575, "settings": {"slidesToShow": 1, "rows": 2}}
                    ]'>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" :src="`/assets/images/product/medium-size/1-1.jpg`"
                                                alt="Uren's Product Image">
                                            <img class="secondary-img" :src="`/assets/images/product/medium-size/1-2.jpg`"
                                                alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker">
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Cart"><i
                                                            class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Compare This Product"><i
                                                            class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                        data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Veniam officiis
                                                    voluptates</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$122.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" :src="`/assets/images/product/medium-size/1-1.jpg`"
                                                alt="Uren's Product Image">
                                            <img class="secondary-img" :src="`/assets/images/product/medium-size/1-2.jpg`"
                                                alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker">
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Cart"><i
                                                            class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Compare This Product"><i
                                                            class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                        data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Veniam officiis
                                                    voluptates</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$122.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" :src="`/assets/images/product/medium-size/1-1.jpg`"
                                                alt="Uren's Product Image">
                                            <img class="secondary-img" :src="`/assets/images/product/medium-size/1-2.jpg`"
                                                alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker">
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Cart"><i
                                                            class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Compare This Product"><i
                                                            class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                        data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Veniam officiis
                                                    voluptates</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$122.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" :src="`/assets/images/product/medium-size/1-1.jpg`"
                                                alt="Uren's Product Image">
                                            <img class="secondary-img" :src="`/assets/images/product/medium-size/1-2.jpg`"
                                                alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker">
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Cart"><i
                                                            class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Compare This Product"><i
                                                            class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                        data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Veniam officiis
                                                    voluptates</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$122.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" :src="`/assets/images/product/medium-size/1-1.jpg`"
                                                alt="Uren's Product Image">
                                            <img class="secondary-img" :src="`/assets/images/product/medium-size/1-2.jpg`"
                                                alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker">
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Cart"><i
                                                            class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Compare This Product"><i
                                                            class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                        data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Veniam officiis
                                                    voluptates</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$122.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" :src="`/assets/images/product/medium-size/1-1.jpg`"
                                                alt="Uren's Product Image">
                                            <img class="secondary-img" :src="`/assets/images/product/medium-size/1-2.jpg`"
                                                alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker">
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Cart"><i
                                                            class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Compare This Product"><i
                                                            class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                        data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Veniam officiis
                                                    voluptates</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$122.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" :src="`/assets/images/product/medium-size/1-1.jpg`"
                                                alt="Uren's Product Image">
                                            <img class="secondary-img" :src="`/assets/images/product/medium-size/1-2.jpg`"
                                                alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker">
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Cart"><i
                                                            class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Compare This Product"><i
                                                            class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                        data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Veniam officiis
                                                    voluptates</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$122.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" :src="`/assets/images/product/medium-size/1-1.jpg`"
                                                alt="Uren's Product Image">
                                            <img class="secondary-img" :src="`/assets/images/product/medium-size/1-2.jpg`"
                                                alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker">
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Cart"><i
                                                            class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip"
                                                        data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Compare This Product"><i
                                                            class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                        data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Veniam officiis
                                                    voluptates</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$122.00</span>
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
    <!-- Uren's Best Selling Product Area End Here -->
</template>
