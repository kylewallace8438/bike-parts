<script  setup>
import { ref } from 'vue'

import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';

const swiperOptions = ref({
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        582: {
            slidesPerView: 2,
            spaceBetween: 20
        },

        992: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        1264: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        1980: {
            slidesPerView: 3,
            spaceBetween: 20
        }
    }
});
</script>

<template>
    <!-- Latest cars (carousel)-->
    <section class="container pt-sm-5 pt-4 pb-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-2">
            <h2 class="h3 text-light mb-3 mb-sm-0">Latest cars</h2>
            <div class="d-flex align-items-center">
                <ul class="nav nav-tabs nav-tabs-light fs-sm me-4 pe-2 mb-0">
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0);">New</a></li>
                    <li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Used</a></li>
                </ul><router-link class="btn btn-link btn-light fw-normal px-0" to="/car-finder-catalog-grid">View all<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></router-link>
            </div>
        </div>
        <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-carousel-light">
            <swiper :autoplay="true" :slidesPerView="3" :breakpoints="swiperOptions.breakpoints" :spaceBetween="20" :loop="true" class="h-100vh">
                <SwiperSlide class="">
                    <div>
                        <div class="card card-light card-hover h-100">
                            <div class="card-img-top card-img-hover"><router-link class="img-overlay" to="/car-finder-single"></router-link>
                                <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">Used</span></div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                                </div><img src="@/assets/img/car-finder/catalog/04.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2019</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare4">
                                        <label class="form-check-label fs-sm" for="compare4">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Nissan 370Z Nismo</router-link></h3>
                                <div class="text-primary fw-bold mb-1">$37,900</div>
                                <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>New York</div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
                                    <div class="row g-2">
                                        <div class="col me-sm-1">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">16K mi</span></div>
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
                </SwiperSlide>
                <SwiperSlide class="">
                    <div>
                        <div class="card card-light card-hover h-100">
                            <div class="card-img-top card-img-hover"><router-link class="img-overlay" to="/car-finder-single"></router-link>
                                <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info mb-1">Used</span><span class="d-table badge bg-success" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex&quot;&gt;&lt;i class=&quot;fi-award mt-1 me-2&quot;&gt;&lt;/i&gt;&lt;div&gt;This car is checked and&lt;br&gt;certified by Finder.&lt;/div&gt;&lt;/div&gt;">Certified</span></div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                                </div><img src="@/assets/img/car-finder/catalog/08.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2017</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare5">
                                        <label class="form-check-label fs-sm" for="compare5">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Ford Explorer XLT</router-link></h3>
                                <div class="text-primary fw-bold mb-1">$26,950</div>
                                <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Kansas</div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
                                    <div class="row g-2">
                                        <div class="col me-sm-1">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">34K mi</span></div>
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
                    </div>
                </SwiperSlide>
                <SwiperSlide class="">
                    <div>
                        <div class="card card-light card-hover h-100">
                            <div class="card-img-top card-img-hover"><router-link class="img-overlay" to="/car-finder-single"></router-link>
                                <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">Used</span></div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                                </div><img src="@/assets/img/car-finder/catalog/03.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2019</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare6">
                                        <label class="form-check-label fs-sm" for="compare6">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Mazda MX-5 Miata Convertible</router-link></h3>
                                <div class="text-primary fw-bold mb-1">$29,700</div>
                                <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Los Angeles</div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
                                    <div class="row g-2">
                                        <div class="col me-sm-1">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">18K mi</span></div>
                                        </div>
                                        <div class="col me-sm-1">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Manual</span></div>
                                        </div>
                                        <div class="col">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Gasoline</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide class="">
                    <div>
                        <div class="card card-light card-hover h-100">
                            <div class="card-img-top card-img-hover"><router-link class="img-overlay" to="/car-finder-single"></router-link>
                                <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">Used</span></div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                                </div><img src="@/assets/img/car-finder/catalog/02.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2018</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare7">
                                        <label class="form-check-label fs-sm" for="compare7">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Mercedes Benz C300 Sport</router-link></h3>
                                <div class="text-primary fw-bold mb-1">$53,600</div>
                                <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>San Francisco</div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
                                    <div class="row g-2">
                                        <div class="col me-sm-1">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">35K mi</span></div>
                                        </div>
                                        <div class="col me-sm-1">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Automatic</span></div>
                                        </div>
                                        <div class="col">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Hybrid</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </SwiperSlide>
            </swiper>
        </div>
    </section>

</template>
