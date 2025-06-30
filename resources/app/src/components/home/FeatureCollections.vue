<template>
     <!-- Begin Featured Categories Area -->
    <div class="featured-categories_area">
        <div class="container-fluid">
            <div class="section-title_area">
                <span>Top Featured Collections</span>
                <h3>Featured Categories</h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured-categories_slider uren-slick-slider slider-navigation_style-1"
                        data-slick-options='{
                        "slidesToShow": 4,
                        "spaceBetween": 30,
                        "arrows" : true
                       }' data-slick-responsive='[
                                             {"breakpoint":1599, "settings": {"slidesToShow": 3}},
                                             {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                             {"breakpoint":768, "settings": {"slidesToShow": 1}}
                                         ]'>
                        <div class="slide-item">
                            <div class="slide-inner">
                                <div class="slide-image_area">
                                    <a href="shop-left-sidebar.html">
                                        <img :src="`/assets/images/featured-categories/1.png`"
                                            alt="Uren's Featured Categories">
                                    </a>
                                </div>
                                <div class="slide-content_area">
                                    <h3><a href="shop-left-sidebar.html">Brakes & Rotors</a></h3>
                                    <span>(8 Products)</span>
                                    <ul class="product-item">
                                        <li>
                                            <a href="shop-left-sidebar.html"><i class="fa fa-arrow-right"></i>
                                                Accessories</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar.html"><i class="fa fa-arrow-right"></i> Auto GPS
                                                Units</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar.html"><i class="fa fa-arrow-right"></i> Fitness
                                                GPS Units</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar.html"><i class="fa fa-arrow-right"></i> Handheld
                                                GPS Units</a>
                                        </li>
                                    </ul>
                                    <div class="uren-btn-ps_left">
                                        <a class="uren-btn" href="shop-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Categories Area End Here -->
</template>
