<script  setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper/modules'
import img09 from '@/assets/img/car-finder/catalog/09.jpg';
import img13 from '@/assets/img/car-finder/catalog/13.jpg';
const modules = [Navigation, Pagination, Scrollbar, A11y]
</script>

<template>
    <!-- Top offers-->
    <section class="container pt-sm-1 pb-5 mb-md-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 pb-sm-2">
            <h2 class="h3 text-light mb-2 mb-sm-0">Top offers</h2><router-link class="btn btn-link btn-light fw-normal px-0" to="/car-finder-catalog-list">View all offers<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></router-link>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!-- Item-->
                <div class="card card-light card-hover h-lg-100 mb-4 mb-lg-0">
                    <div class="tns-carousel-wrapper card-img-top card-img-hover">

                        <router-link class="img-overlay" to="/car-finder-single"></router-link>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info mb-1">New</span><span class="d-table badge bg-success" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex&quot;&gt;&lt;i class=&quot;fi-award mt-1 me-2&quot;&gt;&lt;/i&gt;&lt;div&gt;This car is checked and&lt;br&gt;certified by Finder.&lt;/div&gt;&lt;/div&gt;">Certified</span></div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                        </div>
                        <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100vh">
                            <SwiperSlide>
                                <img src="@/assets/img/car-finder/catalog/17.jpg" alt="Image">
                            </SwiperSlide>
                            <SwiperSlide>
                                <img src="@/assets/img/car-finder/catalog/17.jpg" alt="Image">
                            </SwiperSlide>
                        </swiper>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2015</span>
                            <div class="form-check form-check-light">
                                <input class="form-check-input" type="checkbox" id="compare1">
                                <label class="form-check-label fs-sm" for="compare1">Compare</label>
                            </div>
                        </div>
                        <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Mercedes Benz Convertible Coupe</router-link></h3>
                        <div class="text-primary fw-bold mb-1">$25,800</div>
                        <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>New York</div>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="border-top border-light pt-3">
                            <div class="row g-2">
                                <div class="col me-sm-1">
                                    <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">48K mi</span></div>
                                </div>
                                <div class="col me-sm-1">
                                    <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Automatic</span></div>
                                </div>
                                <div class="col">
                                    <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Gasoline</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Item-->
                <div class="card card-light card-hover card-horizontal mb-4">
                    <div class="tns-carousel-wrapper card-img-top card-img-hover"><router-link class="img-overlay" to="/car-finder-single"></router-link>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">Used</span></div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                        </div>
                        <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                            <SwiperSlide>
                                <div class="bg-size-cover bg-position-center w-100 h-100 d-sm-block d-none" :style="{ 'background-image': `url(${img09})` }">
                                </div>
                                <SwiperSlide>
                                    <img class="d-block d-sm-none" src="@/assets/img/car-finder/catalog/09.jpg" alt="Image">
                                </SwiperSlide>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div class="bg-size-cover bg-position-center w-100 h-100 d-sm-block d-none" :style="{ 'background-image': `url(${img09})` }"></div>
                                <SwiperSlide>
                                    <img class="d-block d-sm-none" src="@/assets/img/car-finder/catalog/09.jpg" alt="Image">
                                </SwiperSlide>
                            </SwiperSlide>
                        </swiper>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">1995</span>
                            <div class="form-check form-check-light">
                                <input class="form-check-input" type="checkbox" id="compare2">
                                <label class="form-check-label fs-sm" for="compare2">Compare</label>
                            </div>
                        </div>
                        <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Ford Truck Lifted </router-link></h3>
                        <div class="text-primary fw-bold mb-1">$24,000</div>
                        <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Chicago</div>
                        <div class="border-top border-light mt-3 pt-3">
                            <div class="row g-2">
                                <div class="col me-sm-1">
                                    <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">278K mi</span></div>
                                </div>
                                <div class="col me-sm-1">
                                    <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Manual</span></div>
                                </div>
                                <div class="col">
                                    <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Diesel</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div class="card card-light card-hover card-horizontal">
                    <div class="tns-carousel-wrapper card-img-top card-img-hover"><router-link class="img-overlay" to="/car-finder-single"></router-link>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-danger">New</span></div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                        </div>
                        <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                            <SwiperSlide>
                                <div class="bg-size-cover bg-position-center w-100 h-100 d-none d-sm-block" :style="{ 'background-image': `url(${img13})`}"></div>
                                <SwiperSlide>
                                    <img class="d-block d-sm-none" src="@/assets/img/car-finder/catalog/13.jpg" alt="Image">
                                </SwiperSlide>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div class="bg-size-cover bg-position-center w-100 h-100 d-none d-sm-block" :style="{ 'background-image': `url(${img13})`}"></div>
                                <SwiperSlide>
                                    <img class="d-block d-sm-none" src="@/assets/img/car-finder/catalog/13.jpg" alt="Image">
                                </SwiperSlide>
                            </SwiperSlide>
                        </swiper>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2018</span>
                            <div class="form-check form-check-light">
                                <input class="form-check-input" type="checkbox" id="compare3">
                                <label class="form-check-label fs-sm" for="compare3">Compare</label>
                            </div>
                        </div>
                        <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">BMW 640 XI Gran Turismo</router-link></h3>
                        <div class="text-primary fw-bold mb-1">$43,500</div>
                        <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>San Francisco</div>
                        <div class="border-top border-light mt-3 pt-3">
                            <div class="row g-2">
                                <div class="col me-sm-1">
                                    <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">10K mi</span></div>
                                </div>
                                <div class="col me-sm-1">
                                    <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Automatic</span></div>
                                </div>
                                <div class="col">
                                    <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Gasoline</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
