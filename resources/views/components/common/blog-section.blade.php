@props(['blogs'])
<!-- blog-section start -->
<section class="blog-area section-ptb">
    <div class="container-fluid">
        <div class="collection-category">
            <div class="row">
                <div class="col">
                    <div class="section-capture">
                        <div class="section-title">
                            <span data-animate="animate__fadeIn">{{ __('home.our_blog') }}</span>
                            <h2 data-animate="animate__fadeIn">{{ __('home.latest_news') }}</h2>
                        </div>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button class="swiper-prev swiper-prev-blogs2"><i class="ri-arrow-left-line"></i></button>
                            <button class="swiper-next swiper-next-blogs2"><i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                    <div class="blog-wrap">
                        <div class="blog-slider swiper" id="blogslider2">
                            <div class="swiper-wrapper">
                                @forelse ($blogs as $blog)
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="blog-post">
                                            <div class="blog-main-img">
                                                <a href="{{ route('blog', ['slug' => $blog->slug]) }}" class="blog-img banner-img">
                                                    <img src="{{ $blog->image_url('medium') }}"
                                                        class="blog-img img-fluid" alt="blog-1">
                                                    <span class="date-time">{{ $blog->posted_at->format('d M Y') }}</span>
                                                </a>
                                            </div>
                                            <div class="blog-post-content">
                                                <div class="blogtitle">
                                                    <h6 class="blog-title">{{ $blog->title }}</h6>
                                                </div>
                                                <a class="btn-style3 readmore" href="{{ route('blog', ['slug' => $blog->slug]) }}">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-section end -->
