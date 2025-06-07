<script lang="ts" setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue'
import simplebar from 'simplebar-vue';
import 'simplebar/dist/simplebar.min.css';
import Slider from '@vueform/slider';
import "@vueform/slider/themes/default.css";

const value = ref([25000, 65000] as [number, number]);
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
    <div class="container mb-md-4">
        <div class="row py-md-1">
            <div class="col">
                <!-- Sorting + View-->
                <div class="row">
                    <div class="col-sm-3 mb-4">
                        <div class="card card-light card-hover h-100">
                            <div class="tns-carousel-wrapper card-img-top card-img-hover">
                                <router-link class="img-overlay" to="/phu-tung"></router-link>
                                <!-- <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                    <span class="d-table badge bg-info">Used</span>
                                </div> -->
                                <!-- <div class="tns-carousel-inner"> -->
                                <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                                    <SwiperSlide>
                                        <img src="@/assets/img/car-finder/catalog/01.jpg" alt="Image">
                                    </SwiperSlide>
                                </swiper>
                                <!-- </div> -->
                            </div>
                            <div class="card-body">
                                <h3 class="h6 mb-1">
                                    <router-link class="nav-link-light" to="/car-finder-single">Ford Truck Lifted</router-link>
                                </h3>
                                <div class="text-primary fw-bold mb-1">$24,000</div>
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
