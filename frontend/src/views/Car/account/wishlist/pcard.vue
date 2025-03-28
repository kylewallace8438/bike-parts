<script lang="ts" setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper/modules'

import img09 from '@/assets/img/car-finder/catalog/09.jpg';
import img10 from '@/assets/img/car-finder/catalog/10.jpg';
import img11 from '@/assets/img/car-finder/catalog/11.jpg';
import img12 from '@/assets/img/car-finder/catalog/12.jpg';
// import img17 from '@/assets/img/car-finder/catalog/17.jpg';

const modules = [Navigation, Pagination, Scrollbar, A11y];
</script>

<template>
    <!-- Page content-->
    <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
            <!-- Account nav-->
            <div class="card card-body card-light border-0 shadow-sm pb-1 me-lg-1">
                <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4">
                    <img class="rounded-circle" src="@/assets/img/avatars/01.jpg" width="48" alt="Robert Fox">
                    <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                        <h2 class="fs-lg text-light mb-0">Robert Fox</h2>
                        <span class="star-rating">
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                        </span>
                        <ul class="list-unstyled fs-sm mt-3 mb-0">
                            <li><a class="nav-link-light fw-normal" href="tel:3025550107">
                                    <i class="fi-phone opacity-60 me-2"></i>(302) 555-0107</a>
                            </li>
                            <li><a class="nav-link-light fw-normal" href="mailto:robert_fox@email.com">
                                    <i class="fi-mail opacity-60 me-2"></i>robert_fox@email.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <router-link class="btn btn-primary btn-lg w-100 mb-3" to="/car-finder-sell-car">
                    <i class="fi-plus me-2"></i>Sell car
                </router-link>
                <a class="btn btn-outline-light d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse">
                    <i class="fi-align-justify me-2"></i>Menu</a>
                <div class="collapse d-md-block mt-3" id="account-nav">
                    <div class="card-nav">
                        <router-link class="card-nav-link" to="/car-finder-account-info">
                            <i class="fi-user me-2"></i>Personal Info</router-link>
                        <router-link class="card-nav-link" to="/car-finder-account-security">
                            <i class="fi-lock me-2"></i>Password &amp; Security</router-link>
                        <router-link class="card-nav-link" to="/car-finder-account-cars">
                            <i class="fi-car me-2"></i>My Cars
                        </router-link>
                        <router-link class="card-nav-link active" to="/car-finder-account-wishlist">
                            <i class="fi-heart me-2"></i>Wishlist<span class="badge bg-faded-light ms-2">4</span>
                        </router-link><router-link class="card-nav-link" to="/car-finder-account-reviews">
                            <i class="fi-star me-2"></i>Reviews
                        </router-link>
                        <router-link class="card-nav-link" to="/car-finder-account-notifications">
                            <i class="fi-bell me-2"></i>Notifications
                        </router-link>
                        <router-link class="card-nav-link" to="/car-finder-help-center">
                            <i class="fi-help me-2"></i>Help
                        </router-link>
                        <router-link class="card-nav-link" to="/signin-dark">
                            <i class="fi-logout me-2"></i>Sign Out
                        </router-link>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Content-->
        <div class="col-lg-8 col-md-7 mb-5">
            <div class="d-flex align-items-center justify-content-between mb-4 pb-2">
                <h1 class="h2 text-light mb-0">Wishlist<span class="badge bg-faded-light fs-base align-middle ms-3">4</span></h1>
                <a class="nav-link-light fw-bold" href="javascript:void(0);"><i class="fi-x fs-xs mt-n1 me-2"></i>Clear all</a>
            </div>
            <!-- Item-->
            <div class="card card-light card-hover card-horizontal mb-4">
                <div class="tns-carousel-wrapper card-img-top card-img-hover">
                    <router-link class="img-overlay" to="/car-finder-single"></router-link>
                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                        <span class="d-table badge bg-info">Used</span>
                    </div>
                    <div class="position-absolute end-0 top-0 pt-3 pe-3 zindex-5">
                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle shadow-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove from Wishlist"><i class="fi-heart-filled"></i></button>
                    </div>
                    <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img09})` }"></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img09})` }"></div>
                        </SwiperSlide>
                    </swiper>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between pb-1">
                        <span class="fs-sm text-light me-3">1995</span>
                        <div class="form-check form-check-light">
                            <input class="form-check-input" type="checkbox" id="compare1">
                            <label class="form-check-label fs-sm" for="compare1">Compare</label>
                        </div>
                    </div>
                    <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Ford Truck Lifted</router-link></h3>
                    <div class="text-primary fw-bold mb-1">$24,000</div>
                    <div class="fs-sm text-light opacity-70">
                        <i class="fi-map-pin me-1"></i>New Jersey
                    </div>
                    <div class="border-top border-light mt-3 pt-3">
                        <div class="row g-2">
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">278K mi</span>
                                </div>
                            </div>
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">Manual</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">Diesel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item-->
            <div class="card card-light card-hover card-horizontal mb-4">
                <div class="tns-carousel-wrapper card-img-top card-img-hover">
                    <router-link class="img-overlay" to="/car-finder-single"></router-link>
                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                        <span class="d-table badge bg-info mb-1">Used</span>
                        <span class="d-table badge bg-success mb-1" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex&quot;&gt;&lt;i class=&quot;fi-award mt-1 me-2&quot;&gt;&lt;/i&gt;&lt;div&gt;This car is checked and&lt;br&gt;certified by Finder.&lt;/div&gt;&lt;/div&gt;">Certified</span>
                    </div>
                    <div class="position-absolute end-0 top-0 pt-3 pe-3 zindex-5">
                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle shadow-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove from Wishlist"><i class="fi-heart-filled"></i></button>
                    </div>
                    <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img10})` }"></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img10})` }"></div>
                        </SwiperSlide>
                    </swiper>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2018</span>
                        <div class="form-check form-check-light">
                            <input class="form-check-input" type="checkbox" id="compare2">
                            <label class="form-check-label fs-sm" for="compare2">Compare</label>
                        </div>
                    </div>
                    <h3 class="h6 mb-1">
                        <router-link class="nav-link-light" to="/car-finder-single">Mercedes Benz C300 Sport</router-link>
                    </h3>
                    <div class="text-primary fw-bold mb-1">$53,600</div>
                    <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>San Francisco</div>
                    <div class="border-top border-light mt-3 pt-3">
                        <div class="row g-2">
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">35K mi</span>
                                </div>
                            </div>
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">Automatic</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">Hybrid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item-->
            <div class="card card-light card-hover card-horizontal mb-4">
                <div class="tns-carousel-wrapper card-img-top card-img-hover">
                    <router-link class="img-overlay" to="/car-finder-single"></router-link>
                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                        <span class="d-table badge bg-info">Used</span>
                    </div>
                    <div class="position-absolute end-0 top-0 pt-3 pe-3 zindex-5">
                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle shadow-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove from Wishlist"><i class="fi-heart-filled"></i></button>
                    </div>
                    <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img11})` }"></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img11})` }"></div>
                        </SwiperSlide>
                    </swiper>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between pb-1">
                        <span class="fs-sm text-light me-3">2019</span>
                        <div class="form-check form-check-light">
                            <input class="form-check-input" type="checkbox" id="compare3">
                            <label class="form-check-label fs-sm" for="compare3">Compare</label>
                        </div>
                    </div>
                    <h3 class="h6 mb-1">
                        <router-link class="nav-link-light" to="/car-finder-single">Mazda MX-5 Miata Convertible</router-link>
                    </h3>
                    <div class="text-primary fw-bold mb-1">$29,700</div>
                    <div class="fs-sm text-light opacity-70">
                        <i class="fi-map-pin me-1"></i>Los Angeles
                    </div>
                    <div class="border-top border-light mt-3 pt-3">
                        <div class="row g-2">
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">18K mi</span>
                                </div>
                            </div>
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">Manual</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">Gasoline</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item-->
            <div class="card card-light card-hover card-horizontal">
                <div class="tns-carousel-wrapper card-img-top card-img-hover">
                    <router-link class="img-overlay" to="/car-finder-single"></router-link>
                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                        <span class="d-table badge bg-info">Used</span>
                    </div>
                    <div class="position-absolute end-0 top-0 pt-3 pe-3 zindex-5">
                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle shadow-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove from Wishlist">
                            <i class="fi-heart-filled"></i></button>
                    </div>
                    <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img12})` }"></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img12})` }"></div>
                        </SwiperSlide>
                    </swiper>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between pb-1">
                        <span class="fs-sm text-light me-3">2016</span>
                        <div class="form-check form-check-light">
                            <input class="form-check-input" type="checkbox" id="compare4">
                            <label class="form-check-label fs-sm" for="compare4">Compare</label>
                        </div>
                    </div>
                    <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Nissan 370Z Nismo </router-link></h3>
                    <div class="text-primary fw-bold mb-1">$31,200</div>
                    <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>New York</div>
                    <div class="border-top border-light mt-3 pt-3">
                        <div class="row g-2">
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">16K mi</span>
                                </div>
                            </div>
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">Automatic</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">Gasoline</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>