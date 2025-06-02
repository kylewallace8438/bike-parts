<script  setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue'
import simplebar from 'simplebar-vue';
import 'simplebar/dist/simplebar.min.css';
import Slider from '@vueform/slider';
import "@vueform/slider/themes/default.css";

const value = ref([25000, 65000]);
</script>
<style>
.slider-connect {
    background: #fd5631;
    border-color: #fd5631;
}
.slider-tooltip {
    padding: .25rem .5rem;
    border: 1px solid #efecf3;
    border-radius: 50rem;
    background-color: #fff;
    color: #454056;
    font-size: .75rem;
    line-height: 1.2;
    box-shadow: 0 .125rem .125rem -0.125rem rgba(31, 27, 45, .08), 0 .25rem .75rem rgba(31, 27, 45, .08);
}
</style>
<template>
    <!-- Page container-->
    <div class="container mt-5 mb-md-4 py-5">
        <div class="row py-md-1">
            <!-- Filers sidebar (Offcanvas on mobile)-->
            <div class="col-lg-3 pe-xl-4">
                <div class="offcanvas-lg offcanvas-start bg-dark" id="filters-sidebar">
                    <div class="offcanvas-header bg-transparent d-flex d-lg-none align-items-center">
                        <h2 class="h5 text-light mb-0">Filters</h2>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" data-bs-target="#filters-sidebar"></button>
                    </div>
                    <div class="offcanvas-body py-lg-4">
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light pt-1">Năm sản xuất</h3>
                            <div class="d-flex align-items-center">
                                <select class="form-select form-select-light w-100">
                                    <option value="" disabled selected>From</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                </select>
                            </div>
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light">Hãng</h3>
                            <select class="form-select form-select-light mb-2">
                                <option value="" disabled selected>Any make</option>
                                <option value="Audi">KTM</option>
                                <option value="Infiniti">Husqvana</option>
                            </select>
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light">Xe</h3>
                            <select class="form-select form-select-light mb-2">
                                <option value="" disabled selected>Any make</option>
                                <option value="Duke">Duke</option>
                                <option value="RC">RC</option>
                                <option value="ADV">ADV</option>

                            </select>
                        </div>
                        <div class="pb-4 mb-2">
                            <button class="btn btn-primary w-100">Tìm kiếm</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Catalog grid view-->
            <div class="col-lg-9">
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-2 pt-lg-4" aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
                        <li class="breadcrumb-item active" aria-current="page">Used cars</li>
                    </ol>
                </nav>
                <!-- Page title-->
                <div class="d-flex align-items-center justify-content-between pb-4 mb-2">
                    <h1 class="text-light me-3 mb-0">Used cars</h1>
                    <div class="text-light"><i class="fi-car fs-lg me-2"></i><span class="align-middle">249 offers</span></div>
                </div>
                <!-- Sorting + View-->
                <div class="row">
                    <!-- Item-->
                    <div class="col-sm-6 mb-4">
                        <div class="card card-light card-hover h-100">
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
                                <!-- <div class="tns-carousel-inner"> -->
                                <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/01.jpg" alt="Image">
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/01.jpg" alt="Image">
                                    </SwiperSlide>
                                </swiper>
                                <!-- </div> -->
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">1995</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare1">
                                        <label class="form-check-label fs-sm" for="compare1">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1">
                                    <router-link class="nav-link-light" to="/car-finder-single">Ford Truck Lifted</router-link>
                                </h3>
                                <div class="text-primary fw-bold mb-1">$24,000</div>
                                <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Chicago</div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
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
                    </div>
                    <!-- Item-->
                    <div class="col-sm-6 mb-4">
                        <div class="card card-light card-hover h-100">
                            <div class="tns-carousel-wrapper card-img-top card-img-hover">
                                <router-link class="img-overlay" to="/car-finder-single"></router-link>
                                <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                    <span class="d-table badge bg-info mb-1">Used</span>
                                    <span class="d-table badge bg-success" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex&quot;&gt;&lt;i class=&quot;fi-award mt-1 me-2&quot;&gt;&lt;/i&gt;&lt;div&gt;This car is checked and&lt;br&gt;certified by Finder.&lt;/div&gt;&lt;/div&gt;">Certified</span>
                                </div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                        <i class="fi-heart"></i>
                                    </button>
                                </div>
                                <!-- <div class="tns-carousel-inner"> -->
                                <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/02.jpg" alt="Image">
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/02.jpg" alt="Image">
                                    </SwiperSlide>
                                </swiper>
                                <!-- </div> -->
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1">
                                    <span class="fs-sm text-light me-3">2018</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare2">
                                        <label class="form-check-label fs-sm" for="compare2">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1">
                                    <router-link class="nav-link-light" to="/car-finder-single">Mercedes Benz C300 Sport</router-link>
                                </h3>
                                <div class="text-primary fw-bold mb-1">$53,400</div>
                                <div class="fs-sm text-light opacity-70">
                                    <i class="fi-map-pin me-1"></i>San Francisco
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
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
                    </div>
                    <!-- Item-->
                    <div class="col-sm-6 mb-4">
                        <div class="card card-light card-hover h-100">
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
                                <!-- <div class="tns-carousel-inner"> -->
                                <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/03.jpg" alt="Image">
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/03.jpg" alt="Image">
                                    </SwiperSlide>
                                </swiper>
                                <!-- </div> -->
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1">
                                    <span class="fs-sm text-light me-3">2019</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare3">
                                        <label class="form-check-label fs-sm" for="compare3">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Mazda MX-5 Miata Convertible</router-link></h3>
                                <div class="text-primary fw-bold mb-1">$36,500</div>
                                <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Los Angeles</div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
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
                    </div>
                    <!-- Item-->
                    <div class="col-sm-6 mb-4">
                        <div class="card card-light card-hover h-100">
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
                                <!-- <div class="tns-carousel-inner"> -->
                                <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/04.jpg" alt="Image">
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/04.jpg" alt="Image">
                                    </SwiperSlide>
                                </swiper>
                                <!-- </div> -->
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1">
                                    <span class="fs-sm text-light me-3">2019</span>
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
                    <!-- Item-->
                    <div class="col-sm-6 mb-4">
                        <div class="card card-light card-hover h-100">
                            <div class="tns-carousel-wrapper card-img-top card-img-hover">
                                <router-link class="img-overlay" to="/car-finder-single"></router-link>
                                <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                    <span class="d-table badge bg-info mb-1">Used</span>
                                    <span class="d-table badge bg-success" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex&quot;&gt;&lt;i class=&quot;fi-award mt-1 me-2&quot;&gt;&lt;/i&gt;&lt;div&gt;This car is checked and&lt;br&gt;certified by Finder.&lt;/div&gt;&lt;/div&gt;">Certified</span>
                                </div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                        <i class="fi-heart"></i>
                                    </button>
                                </div>
                                <!-- <div class="tns-carousel-inner"> -->
                                <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/05.jpgp" alt="Image">
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/05.jpgp" alt="Image">
                                    </SwiperSlide>
                                </swiper>
                                <!-- </div> -->
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2018</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare5">
                                        <label class="form-check-label fs-sm" for="compare5">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1">
                                    <router-link class="nav-link-light" to="/car-finder-single">BMW 640 XI Gran Turismo</router-link>
                                </h3>
                                <div class="text-primary fw-bold mb-1">$44,300</div>
                                <div class="fs-sm text-light opacity-70">
                                    <i class="fi-map-pin me-1"></i>New Jersey
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
                                    <div class="row g-2">
                                        <div class="col me-sm-1">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                                <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i>
                                                <span class="fs-xs text-light">10K mi</span>
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
                    <!-- Item-->
                    <div class="col-sm-6 mb-4">
                        <div class="card card-light card-hover h-100">
                            <div class="tns-carousel-wrapper card-img-top card-img-hover">
                                <router-link class="img-overlay" to="/car-finder-single"></router-link>
                                <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                    <span class="d-table badge bg-info">Used</span>
                                </div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                                </div>
                                <!-- <div class="tns-carousel-inner"> -->
                                <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/06.jpg" alt="Image">
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/06.jpg" alt="Image">
                                    </SwiperSlide>
                                </swiper>
                                <!-- </div> -->
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1">
                                    <span class="fs-sm text-light me-3">2015</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare6">
                                        <label class="form-check-label fs-sm" for="compare6">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Toyota GT86</router-link></h3>
                                <div class="text-primary fw-bold mb-1">$16,000</div>
                                <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Chicago</div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
                                    <div class="row g-2">
                                        <div class="col me-sm-1">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                                <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i>
                                                <span class="fs-xs text-light">46K mi</span>
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
                    </div>
                    <!-- Item-->
                    <div class="col-sm-6 mb-4">
                        <div class="card card-light card-hover h-100">
                            <div class="tns-carousel-wrapper card-img-top card-img-hover">
                                <router-link class="img-overlay" to="/car-finder-single"></router-link>
                                <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                    <span class="d-table badge bg-info mb-1">Used</span>
                                    <span class="d-table badge bg-success" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex&quot;&gt;&lt;i class=&quot;fi-award mt-1 me-2&quot;&gt;&lt;/i&gt;&lt;div&gt;This car is checked and&lt;br&gt;certified by Finder.&lt;/div&gt;&lt;/div&gt;">Certified</span>
                                </div>
                                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                        <i class="fi-heart"></i>
                                    </button>
                                </div>
                                <!-- <div class="tns-carousel-inner"> -->
                                <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/07.jpg" alt="Image">
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/07.jpg" alt="Image">
                                    </SwiperSlide>
                                </swiper>
                                <!-- </div> -->
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1">
                                    <span class="fs-sm text-light me-3">2019</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare7">
                                        <label class="form-check-label fs-sm" for="compare7">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1"><router-link class="nav-link-light" to="/car-finder-single">Volkswagen GTI S</router-link></h3>
                                <div class="text-primary fw-bold mb-1">$29,000</div>
                                <div class="fs-sm text-light opacity-70">
                                    <i class="fi-map-pin me-1"></i>San Francisco
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
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
                    </div>
                    <!-- Item-->
                    <div class="col-sm-6 mb-4">
                        <div class="card card-light card-hover h-100">
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
                                <!-- <div class="tns-carousel-inner"> -->
                                <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/08.jpg" alt="Image">
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/08.jpg" alt="Image">
                                    </SwiperSlide>
                                </swiper>
                                <!-- </div> -->
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between pb-1">
                                    <span class="fs-sm text-light me-3">2017</span>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="compare8">
                                        <label class="form-check-label fs-sm" for="compare8">Compare</label>
                                    </div>
                                </div>
                                <h3 class="h6 mb-1">
                                    <router-link class="nav-link-light" to="/car-finder-single">Ford Explorer XLT</router-link>
                                </h3>
                                <div class="text-primary fw-bold mb-1">$26,900</div>
                                <div class="fs-sm text-light opacity-70">
                                    <i class="fi-map-pin me-1"></i>Kansas
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top border-light pt-3">
                                    <div class="row g-2">
                                        <div class="col me-sm-1">
                                            <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                                <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i>
                                                <span class="fs-xs text-light">34K mi</span>
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
                <!-- Sorting + Pagination-->
                <div class="d-flex align-items-center justify-content-between py-2">
                    <div class="d-flex align-items-center me-sm-4">
                        <label class="fs-sm text-light me-2 pe-1 text-nowrap" for="sorting2">
                            <i class="fi-arrows-sort mt-n1 me-2"></i>Sort by:</label>
                        <select class="form-select form-select-light form-select-sm me-2 me-sm-4" id="sorting2">
                            <option>Newest</option>
                            <option>Popular</option>
                            <option>Price: Low - High</option>
                            <option>Price: Hight - Low</option>
                        </select>
                        <div class="d-none d-md-block border-end border-light" style="height: 1.25rem;"></div>
                        <div class="d-none d-md-block fw-bold text-light opacity-70 text-nowrap ps-md-4">
                            <i class="fi-switch-horizontal me-2"></i>
                            <span class="align-middle">Compare (0)</span>
                        </div>
                    </div>
                    <nav aria-label="Pagination">
                        <ul class="pagination pagination-light mb-0">
                            <li class="page-item d-sm-none text-nowrap"><span class="page-link page-link-static">1 / 5</span></li>
                            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item d-none d-sm-block">...</li>
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:void(0);">8</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);" aria-label="Next"><i class="fi-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>
