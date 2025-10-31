<!-- product-tranding start -->
<section class="product-tab-area section-ptb">
    <div class="container">
        <div class="collection-category">
            <div class="section-capture">
                <div class="section-title">
                    <h2 data-animate="animate__fadeIn"><span>Recent products</span></h2>
                </div>
            </div>
            <div class="collection-wrap">
                <div class="collection-slider swiper" id="new-product">
                    <div class="swiper-wrapper">
                    @foreach($recent_products as $product)
                    <div class="swiper-slide" data-animate="animate__fadeIn">
                        <x-single-product-wrap :product="$product" />
                    </div>
                    @endforeach
                    </div>
                    <div class="collection-button" data-animate="animate__fadeIn">
                        <a href="collection.html" class="btn-style3">See all(90)</a>
                    </div>
                </div>
                <div class="swiper-buttons">
                    <div class="swiper-buttons-wrap">
                        <button class="swiper-prev swiper-prev-new"><i class="feather-arrow-left"></i></button>
                        <button class="swiper-next swiper-next-new"><i class="feather-arrow-right"></i></button>
                    </div>
                </div>
                <div class="swiper-dots">
                    <div class="swiper-pagination swiper-pagination-new"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-tranding end -->
