<div class="menu-main">
    <div class="container-fluid">
        <div class="menu-contact">
            <div class="vegamenu-wrap">
                <div class="side-wrap header-support">
                    <div class="vega-menu-area">
                        <a href="#vega-collapse2" class="browse-cat" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="menu-icon"><i class="feather-menu"></i></span>
                            <span class="menu-title">{{ __('menu.all_catogories') }}</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <a href="#vega-collapse2" class="browse-cat browse-cat-lg" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <span class="menu-icon"><i class="feather-menu"></i></span>
                            <span class="menu-title">{{ __('menu.all_catogories') }}</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <div class="vegawrap collapse" id="vega-collapse2">
                            <ul class="vega-menu">
                                <li class="menu-link">
                                    <a href="{{ route('products') }}" class="link-title">
                                        <span class="menu-img-icon">
                                            <img src="{{ asset('store/image/home2/menu/cate-menu1.png') }}"
                                                class="img-fluid" alt="cate-menu1">
                                        </span>
                                        <span class="sp-link-title">{{ __('menu.bike_parts') }}</span>
                                    </a>
                                </li>
                                <li class="menu-link">
                                    <a href="{{ route('products') }}" class="link-title">
                                        <span class="menu-img-icon">
                                            <img src="{{ asset('store/image/home2/menu/cate-menu2.png') }}"
                                                class="img-fluid" alt="cate-menu2">
                                        </span>
                                        <span class="sp-link-title">{{ __('menu.renting') }}</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- main-menu start -->
                <div class="mega-menu-area">
                    <div class="mainmenu-content">
                        <div class="main-wrap">
                            <ul class="main-menu">
                                <li class="menu-link">
                                    <a href="{{ route('home') }}" class="link-title">
                                        <span class="sp-link-title">{{ __('menu.home') }}</span>
                                    </a>
                                </li>
                                <li class="menu-link">
                                    <a href="{{ route('products') }}" class="link-title">
                                        <span class="sp-link-title">{{ __('menu.shop') }}</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <div class="menu-dropdown menu-banner collapse">
                                        <ul class="ul container p-0">
                                            <li class="menubanner-li">
                                                <div class="menubanner-img banner-hover">
                                                    <a href="{{ route('products') }}" class="collection-img banner-img">
                                                        <img src="{{ asset('store/image/home2/menu-banner/menubanner-1.jpg') }}"
                                                            class="img-fluid" alt="menubanner-1">
                                                    </a>
                                                    <a href="{{ route('products') }}" class="collection-title">
                                                        <span>{{ __('menu.products') }}</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="menubanner-li">
                                                <div class="menubanner-img banner-hover">
                                                    <a href="{{ route('products') }}" class="collection-img banner-img">
                                                        <img src="{{ asset('store/image/home2/menu-banner/menubanner-2.jpg') }}"
                                                            class="img-fluid" alt="menubanner-2">
                                                    </a>
                                                    <a href="{{ route('products') }}" class="collection-title">
                                                        <span>Best collection</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="menubanner-li">
                                                <div class="menubanner-img banner-hover">
                                                    <a href="{{ route('products') }}" class="collection-img banner-img">
                                                        <img src="{{ asset('store/image/home2/menu-banner/menubanner-3.jpg') }}"
                                                            class="img-fluid" alt="menubanner-3">
                                                    </a>
                                                    <a href="{{ route('products') }}" class="collection-title">
                                                        <span>Sale collection</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-link">
                                    <a href="{{ route('products') }}" class="link-title">
                                        <span class="sp-link-title">{{ __('menu.collection') }}</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <div class="menu-dropdown menu-mega collapse">
                                        <ul class="ul container p-0">
                                            <li class="menumega-li">
                                                <a href="{{ route('products') }}" class="menumega-title">
                                                    <span class="sp-link-title">Collection page</span>
                                                </a>
                                                <div class="menumegasup-dropdown collapse">
                                                    <ul class="menumegasup-ul">
                                                        <li class="menumegasup-li">
                                                            <a href="{{ route('products') }}"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Collection</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menumega-li">
                                                <a href="{{ route('products') }}" class="menumega-title">
                                                    <span class="sp-link-title">Product page</span>
                                                </a>
                                                <div class="menumegasup-dropdown collapse">
                                                    <ul class="menumegasup-ul">
                                                        <li class="menumegasup-li">
                                                            <a href="{{ route('products') }}" class="menumegasup-title">
                                                                <span class="sp-link-title">Product layout</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-link">
                                    <a href="{{ route('blogs') }}" class="link-title">
                                        <span class="sp-link-title">{{ __('menu.blog') }}</span>
                                    </a>
                                </li>
                                <li class="menu-link">
                                    <a href="{{ route('about_us') }}" class="link-title">
                                        <span class="sp-link-title">{{ __('menu.about_us') }}</span>
                                    </a>
                                </li>
                                <li class="menu-link">
                                    <a href="{{ route('about_us') }}" class="link-title">
                                        <span class="sp-link-title">{{ __('menu.contact_us') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- main-menu end -->
            </div>
            <div class="contact-num">
                <div class="contact-wrap service-line">
                    <span class="contact-details"><i class="feather-thumbs-up"></i></span>
                    <a href="#">{{ __('menu.renting') }}</a>
                </div>
                <div class="contact-wrap service-line">
                    <span class="contact-details"><i class="feather-zap"></i></span>
                    <a href="#">{{ __('menu.trending') }}</a>
                </div>
            </div>
            <!-- mega sale -->
        </div>
    </div>
</div>
