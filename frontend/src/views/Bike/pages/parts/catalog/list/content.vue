<script setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue'
import simplebar from 'simplebar-vue';
import 'simplebar/dist/simplebar.min.css';
import Slider from '@vueform/slider';
import "@vueform/slider/themes/default.css";

const value = ref([25000, 65000]); // initial values

// Expose value to the template

import img09 from '@/assets/img/car-finder/catalog/09.jpg'
import img10 from '@/assets/img/car-finder/catalog/10.jpg'
import img11 from '@/assets/img/car-finder/catalog/11.jpg'
import img12 from '@/assets/img/car-finder/catalog/12.jpg'
import img13 from '@/assets/img/car-finder/catalog/13.jpg'
import img14 from '@/assets/img/car-finder/catalog/14.jpg'
import img15 from '@/assets/img/car-finder/catalog/15.jpg'
import img16 from '@/assets/img/car-finder/catalog/16.jpg'
// export { value };
const manufactureYears = [
    2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025
];
const bikes = ref([]);
const pagination = ref({
    current_page: 1,
    last_page: 10,
    total: 0
});
bikes.value.push({
    id: 1,
    title: 'KTM RC390 2018',
    odo: '25k km',
    price: '8x.000.000',
    tyre: 'Rosso Sport 110-150',
    transmission: 4,
    accessories: 5,
    manufactureYear: 2018,
    color: 'Cam đen'
})
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
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas"
                            data-bs-target="#filters-sidebar"></button>
                    </div>
                    <!-- <div class="offcanvas-header bg-transparent d-block border-bottom border-light pt-0 pt-lg-4 px-lg-0">
                        <ul class="nav nav-tabs nav-tabs-light mb-0">
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Search New</a></li>
                            <li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Search Used</a></li>
                        </ul>
                    </div> -->
                    <div class="offcanvas-body py-lg-4">
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light">Kiểu xe</h3>
                            <simplebar class="overflow-auto simplebar-wrapper" data-simplebar
                                data-simplebar-auto-hide="false" data-simplebar-inverse>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="naked">
                                    <label class="form-check-label fs-sm" for="naked">Naked</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="sport">
                                    <label class="form-check-label fs-sm" for="sport">Sport</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="adv">
                                    <label class="form-check-label fs-sm" for="adv">ADV</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="dirtbike">
                                    <label class="form-check-label fs-sm" for="dirtbike">Cào cào</label>
                                </div>

                            </simplebar>
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light pt-1">Năm sản xuất</h3>
                            <div class="d-flex align-items-center">
                                <select class="form-select form-select-light w-100">
                                    <option value="" disabled selected>Năm</option>
                                    <option :value="year" v-for="(year, index) in manufactureYears" :key="index">{{ year
                                        }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light">Hãng</h3>
                            <select class="form-select form-select-light mb-2">
                                <option value="" disabled selected>Chọn hãng</option>
                                <option value="KTM">KTM</option>
                                <option value="Husqvana">Husqvana</option>
                            </select>
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light">Mẫu xe</h3>
                            <select class="form-select form-select-light mb-2">
                                <option value="" disabled selected>Chọn mẫu</option>
                                <option value="Duke">Duke</option>
                                <option value="RC">RC</option>
                                <option value="ADV">ADV</option>
                                <option value="Svartpilen">Svartpilen</option>
                                <option value="Vitpilen">Vitpilen</option>
                            </select>
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light">Màu</h3>
                            <simplebar class="overflow-auto" data-simplebar data-simplebar-auto-hide="false"
                                data-simplebar-inverse style="height: 11rem;">
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="amber">
                                    <label class="form-check-label fs-sm" for="amber">Cam</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="white">
                                    <label class="form-check-label fs-sm" for="white">Trắng</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="black">
                                    <label class="form-check-label fs-sm" for="black">Đen</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="grey">
                                    <label class="form-check-label fs-sm" for="grey">Xám</label>
                                </div>
                            </simplebar>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Catalog list view-->
            <div class="col-lg-9">
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-2 pt-lg-4" aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><router-link to="/">Trang chủ</router-link></li>
                        <li class="breadcrumb-item active" aria-current="page">Tìm xe</li>
                    </ol>
                </nav>
                <!-- Page title-->
                <div class="d-flex align-items-center justify-content-between pb-4 mb-2">
                    <h1 class="text-light me-3 mb-0">Tìm xe</h1>
                    <div class="text-light"><i class="fi-car fs-lg me-2"></i><span class="align-middle">100 xe</span>
                    </div>
                </div>
                <!-- Sorting + View-->
                <div class="d-sm-flex align-items-center justify-content-between pb-4 mb-2">
                    <div class="d-flex align-items-center me-sm-4">
                        <label class="fs-sm text-light me-2 pe-1 text-nowrap" for="sorting1"><i
                                class="fi-arrows-sort mt-n1 me-2"></i>Lọc theo:</label>
                        <select class="form-select form-select-light form-select-sm me-sm-4" id="sorting1">
                            <option>Mới nhất</option>
                            <option>Xem nhiều</option>
                            <option>Giá: Thấp - Cao</option>
                            <option>Giá: Cao - Thấp</option>
                        </select>
                        <!-- <div class="d-none d-md-block border-end border-light" style="height: 1.25rem;"></div> -->

                    </div>
                    <!-- <div class="d-none d-sm-flex">
                        <router-link class="nav-link nav-link-light px-2 active" to="/car-finder-catalog-list"
                            data-bs-toggle="tooltip" title="List view">
                            <i class="fi-list"></i>
                        </router-link>
                        <router-link class="nav-link nav-link-light px-2" to="/car-finder-catalog-grid"
                            data-bs-toggle="tooltip" title="Grid view">
                            <i class="fi-grid"></i>
                        </router-link>
                    </div> -->
                </div>
                <!-- Item-->
                <div class="card card-light card-hover card-horizontal mb-4" v-for="(bike, index) in bikes" :key="index">
                    <div class="tns-carousel-wrapper card-img-top card-img-hover">
                        <router-link class="img-overlay" to="/car-finder-single"></router-link>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3">
                            <span class="d-table badge bg-info mb-1">Qua sử dụng</span>
                            <span class="d-table badge bg-success">Đẹp</span>
                        </div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                <i class="fi-heart"></i>
                            </button>
                        </div>
                        <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100">
                            <SwiperSlide>
                                <div class="bg-size-cover bg-position-center w-100 h-100 d-sm-block d-none"
                                    :style="{ 'background-image': `url(${img09})` }"></div>
                                <SwiperSlide>
                                    <img class="d-block d-sm-none" src="@/assets/img/car-finder/catalog/09.jpg"
                                        alt="Image">
                                </SwiperSlide>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div class="bg-size-cover bg-position-center w-100 h-100 d-sm-block d-none"
                                    :style="{ 'background-image': `url(${img09})` }"></div>
                                <SwiperSlide>
                                    <img class="d-block d-sm-none" src="@/assets/img/car-finder/catalog/09.jpg"
                                        alt="Image">
                                </SwiperSlide>
                            </SwiperSlide>
                        </swiper>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between pb-1">
                            <span class="fs-sm text-light me-3">{{ bike.manufactureYear }}</span>
                            <!-- <div class="form-check form-check-light">
                                <input class="form-check-input" type="checkbox" id="compare1">
                                <label class="form-check-label fs-sm" for="compare1">Compare</label>
                            </div> -->
                        </div>
                        <h3 class="h6 mb-1">
                            <router-link class="nav-link-light" to="/car-finder-single">{{ bike.title }}</router-link>
                        </h3>
                        <div class="text-primary fw-bold mb-1">{{ bike.price }}đ</div>
                        <div class="border-top border-light mt-3 pt-3">
                            <div class="py-3 mb-3">
                                <div class="row text-light">
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2">
                                                <strong>ODO: </strong><span class="opacity-70 ms-1">{{ bike.odo }}</span>
                                            </li>
                                            <li class="mb-2">
                                                <strong>Lốp: </strong><span class="opacity-70 ms-1">{{ bike.tyre }}</span>
                                            </li>
                                            <li class="mb-2">
                                                <strong>Màu: </strong><span class="opacity-70 ms-1">{{ bike.color }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2">
                                                <strong>Nhông dĩa: </strong>
                                                <span class="star-rating star-rating-sm">
                                                    <i class="star-rating-icon fi-star-filled" :class="{ active: index <= bike.transmission - 1}" v-for="(item, index) in 5" :key="index"></i>
                                                </span>
                                            </li>
                                            <li class="mb-2">
                                                <strong>Phụ kiện: </strong>
                                                <span class="star-rating star-rating-sm">
                                                    <i class="star-rating-icon fi-star-filled" :class="{ active: index <= bike.accessories - 1}" v-for="(item, index) in 5" :key="index"></i>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sorting + Pagination-->
                <div class="d-flex align-items-center justify-content-between py-2">
                    <div class="d-flex align-items-center me-sm-4">
                    </div>
                    <nav aria-label="Pagination">
                        <ul class="pagination pagination-light mb-0" v-if="pagination.last_page > 1">
                            <li class="page-item d-sm-none text-nowrap"><span class="page-link page-link-static">1 /
                                    5</span></li>
                            <li class="page-item active d-none d-sm-block" aria-current="page"><span
                                    class="page-link">1</span></li>
                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                    href="javascript:void(0);">2</a></li>
                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                    href="javascript:void(0);">3</a></li>
                            <li class="page-item d-none d-sm-block">...</li>
                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                    href="javascript:void(0);">8</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);" aria-label="Next"><i
                                        class="fi-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</template>
