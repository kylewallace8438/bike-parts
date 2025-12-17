@props(['productByCategories' => []])

<!-- product-tab start -->
<section class="product-tab-area section-ptb bt">
    <div class="container-fluid">
        <div class="collection-category">
            <div class="section-capture">
                <div class="section-title">
                    <span>Popular product</span>
                    <h2><span>Selling products</span></h2>
                </div>
                <ul class="nav nav-tabs">
                    @for ($i = 0; $i < count($productByCategories); $i++)
                    <li>
                        <a href="#{{ $productByCategories[$i]->slug }}" data-bs-toggle="tab" class="show @if ($i == 0) active @endif">{{ $productByCategories[$i]->translation[app()->getLocale()] }}</a>
                    </li>
                    @endfor
                </ul>
            </div>
            <div class="tab-content tabs">
                @for ($i = 0; $i < count($productByCategories); $i++)
                <div class="tab-pane fade @if ($i == 0) active show @endif" id="{{ $productByCategories[$i]->slug }}">
                    <div class="collection-wrap">
                        <div class="collection-slider swiper" id="{{ $productByCategories[$i]->slug }}">
                            <div class="swiper-wrapper">
                                @foreach ($productByCategories[$i]->products as $product)
                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="product-template.html" class="pro-img">
                                                <img src="{{ asset('store/image/home2/product/product-1.jpg') }}" class="img-fluid img1 resp-img1" alt="product-1.jpg">
                                            </a>
                                            <div class="product-action">
                                                <a href="wishlist-product.html" class="add-to-wishlist">
                                                    <span class="product-icon"><i class="feather-heart"></i></span>
                                                    <span class="tooltip-text">wishlist</span>
                                                </a>
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
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h6><a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a></h6>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">${{ $product->price }}</span>
                                                <span class="old-price">${{ $product->old_price }}</span>
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
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-buttons">
                            <div class="swiper-buttons-wrap">
                                <button class="swiper-prev swiper-prev-new2"><i class="ri-arrow-left-s-line"></i></button>
                                <button class="swiper-next swiper-next-new2"><i class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                        <div class="swiper-dots">
                            <div class="swiper-pagination swiper-pagination-new2"></div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>
<!-- product-tab end -->