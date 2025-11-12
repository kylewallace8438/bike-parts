<template>
    <div class="single-product-wrap">
    <div class="product-image">
        <a href="{{ route('product', ['slug' => $product['slug']]) }}" class="pro-img">
            @if ($product['featured_image_url'])
                <img src="{{ $product['featured_image_url'] }}" class="img-fluid img1 resp-img1" alt="p-1">
            @else
                <img src="https://placehold.co/400x300" class="img-fluid img1 resp-img1" alt="p-1">
            @endif
            {{-- <img src="{{ $product->feature_image_url }}" class="img-fluid img2 resp-img2" alt="p-2"> --}}
        </a>
        <div class="product-label pro-new-sale">
            @if ($product['min_price'] < $product['max_price'])
                <span class="product-label-title">@sale_off($product['max_price'], $product['min_price'])</span>
            @endif
        </div>
        <div class="product-action">
            <a href="wishlist-product.html" class="add-to-wishlist">
                <span class="product-icon"><i class="feather-heart"></i></span>
                <span class="tooltip-text">Yêu thích</span>
            </a>
            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                <span class="product-icon"><i class="feather-eye"></i></span>
                <span class="tooltip-text">Xem nhanh</span>
            </a>
        </div>
        <div class="product-cart">
            <button type="button" class="add-to-cart">
                <span class="product-icon">
                    <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                    <span class="product-loader-icon"><i class="feather-loader"></i></span>
                    <span class="product-check-icon"><i class="feather-check"></i></span>
                </span>
            </button>
        </div>
    </div>
    <div class="product-caption">
        <div class="product-content">
            <div class="product-title">
                <h6><a href="{{ route('product', ['slug' => $product['slug']]) }}">{{ $product['title'] }}</a></h6>
            </div>
            <div class="price-box">
                <span class="new-price">@money($product['min_price'])</span>
                @if ($product['min_price'] < $product['max_price'])
                    <span class="old-price">@money($product['max_price'])</span>
                @endif
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
                    <span class="review-caption">Chưa có đánh giá</span>
                </span>
            </div>
            <div class="product-description">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established
                    fact that a will be distracted by the readable of at</p>
            </div>
            <div class="product-action">
                <a href="javascript:void(0)" class="add-to-cart">
                    <span class="product-icon">
                        <span class="product-bag-icon"><i class="feather-shopping-bag"></i></span>
                        <span class="product-loader-icon"><i class="feather-loader"></i></span>
                        <span class="product-check-icon"><i class="feather-check"></i></span>
                    </span>
                    <span class="tooltip-text">Thêm vào giỏ</span>
                </a>
                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                    <span class="product-icon"><i class="feather-eye"></i></span>
                    <span class="tooltip-text">Xem nhanh</span>
                </a>
                <a href="wishlist-product.html" class="add-to-wishlist">
                    <span class="product-icon"><i class="feather-heart"></i></span>
                    <span class="tooltip-text">Yêu thích</span>
                </a>
            </div>
        </div>
    </div>
</div>
</template>
