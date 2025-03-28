<script lang="ts" setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper/modules'

import img14 from '@/assets/img/car-finder/catalog/14.jpg';
import img15 from '@/assets/img/car-finder/catalog/15.jpg';
import img16 from '@/assets/img/car-finder/catalog/16.jpg';
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
                </div><router-link class="btn btn-primary btn-lg w-100 mb-3" to="/car-finder-sell-car">
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
                        <router-link class="card-nav-link active" to="/car-finder-account-cars">
                            <i class="fi-car me-2"></i>My Cars</router-link>
                        <router-link class="card-nav-link" to="/car-finder-account-wishlist">
                            <i class="fi-heart me-2"></i>Wishlist<span class="badge bg-faded-light ms-2">4</span>
                        </router-link>
                        <router-link class="card-nav-link" to="/car-finder-account-reviews">
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
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h1 class="h2 text-light mb-0">My Cars</h1><a class="nav-link-light fw-bold" href="javascript:void(0);">
                    <i class="fi-trash mt-n1 me-2"></i>Delete all
                </a>
            </div>
            <p class="text-light pt-1 mb-4">Here you can see your car offers and edit them easily.</p>
            <!-- Nav tabs-->
            <ul class="nav nav-tabs nav-tabs-light border-bottom border-light mb-4" role="tablist">
                <li class="nav-item mb-3"><a class="nav-link active" href="javascript:void(0);" role="tab" aria-selected="true">
                        <i class="fi-file fs-base me-2"></i>Published
                    </a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="javascript:void(0);" role="tab" aria-selected="false">
                        <i class="fi-file-clean fs-base me-2"></i>Drafts</a>
                </li>
                <li class="nav-item mb-3"><a class="nav-link" href="javascript:void(0);" role="tab" aria-selected="false">
                        <i class="fi-archive fs-base me-2"></i>Archived</a>
                </li>
            </ul>
            <!-- Item-->
            <div class="card card-light card-hover card-horizontal mb-4">
                <div class="tns-carousel-wrapper card-img-top card-img-hover">
                    <router-link class="img-overlay" to="/car-finder-single"></router-link>
                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                        <span class="d-table badge bg-info">Used</span>
                    </div>
                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                            <i class="fi-heart"></i>
                        </button>
                    </div>
                    <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img14})` }"></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img14})` }"></div>
                        </SwiperSlide>
                    </swiper>
                </div>
                <div class="card-body position-relative">
                    <div class="dropdown position-absolute zindex-5 top-0 end-0 mt-3 me-3">
                        <button class="btn btn-icon btn-translucent-light btn-xs rounded-circle" type="button" id="contextMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fi-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark my-1" aria-labelledby="contextMenu1">
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-edit me-2"></i>Edit</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-flame me-2"></i>Promote</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-power me-2"></i>Deactivate</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-trash me-2"></i>Delete</button>
                            </li>
                        </ul>
                    </div>
                    <div class="fs-sm text-light pb-1">2017</div>
                    <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Toyota GT86</router-link></h3>
                    <div class="text-primary fw-bold mb-1">$16,000</div>
                    <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Chicago</div>
                    <div class="border-top border-light mt-3 pt-3">
                        <div class="row g-2">
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">32K mi</span>
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
            <div class="card card-light card-hover card-horizontal mb-4">
                <div class="tns-carousel-wrapper card-img-top card-img-hover">
                    <router-link class="img-overlay" to="/car-finder-single"></router-link>
                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                        <span class="d-table badge bg-info mb-1">Used</span>
                        <span class="d-table badge bg-success mb-1" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex&quot;&gt;&lt;i class=&quot;fi-award mt-1 me-2&quot;&gt;&lt;/i&gt;&lt;div&gt;This car is checked and&lt;br&gt;certified by Finder.&lt;/div&gt;&lt;/div&gt;">Certified</span>
                    </div>
                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                    </div>
                    <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img15})` }"></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img15})` }"></div>
                        </SwiperSlide>
                    </swiper>
                </div>
                <div class="card-body position-relative">
                    <div class="dropdown position-absolute zindex-5 top-0 end-0 mt-3 me-3">
                        <button class="btn btn-icon btn-translucent-light btn-xs rounded-circle" type="button" id="contextMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fi-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark my-1" aria-labelledby="contextMenu2">
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-edit me-2"></i>Edit</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-flame me-2"></i>Promote</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-power me-2"></i>Deactivate</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-trash me-2"></i>Delete</button>
                            </li>
                        </ul>
                    </div>
                    <div class="fs-sm text-light pb-1">2019</div>
                    <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Volkswagen GTI S </router-link></h3>
                    <div class="text-primary fw-bold mb-1">$20,000</div>
                    <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>San Francisco</div>
                    <div class="border-top border-light mt-3 pt-3">
                        <div class="row g-2">
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">25K mi</span>
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
            <div class="card card-light card-hover card-horizontal">
                <div class="tns-carousel-wrapper card-img-top card-img-hover">
                    <router-link class="img-overlay" to="/car-finder-single"></router-link>
                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                        <span class="d-table badge bg-info">Used</span>
                    </div>
                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                            <i class="fi-heart"></i>
                        </button>
                    </div>
                    <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img16})` }"></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="bg-size-cover bg-position-center w-100 h-100" :style="{ 'background-image': `url(${img16})` }"></div>
                        </SwiperSlide>
                    </swiper>
                </div>
                <div class="card-body position-relative">
                    <div class="dropdown position-absolute zindex-5 top-0 end-0 mt-3 me-3">
                        <button class="btn btn-icon btn-translucent-light btn-xs rounded-circle" type="button" id="contextMenu3" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
                        <ul class="dropdown-menu dropdown-menu-dark my-1" aria-labelledby="contextMenu3">
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-edit me-2"></i>Edit</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-flame me-2"></i>Promote</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-power me-2"></i>Deactivate</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><i class="fi-trash me-2"></i>Delete</button>
                            </li>
                        </ul>
                    </div>
                    <div class="fs-sm text-light pb-1">2017</div>
                    <h3 class="h6 mb-1">
                        <router-link class="nav-link-light" to="/car-finder-single">Ford Explorer XLT </router-link>
                    </h3>
                    <div class="text-primary fw-bold mb-1">$26,950</div>
                    <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Kansas</div>
                    <div class="border-top border-light mt-3 pt-3">
                        <div class="row g-2">
                            <div class="col me-sm-1">
                                <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                    <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i>
                                    <span class="fs-xs text-light">47K mi</span>
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
        </div>
    </div>
</template>