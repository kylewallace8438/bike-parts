<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper/modules'

const modules = [Navigation, Pagination, Scrollbar, A11y];
</script>

<template>
    <!-- CTA carousel-->
    <section class="container pt-4 pb-5 py-sm-5">
        <div class="tns-carousel-wrapper">
            <!-- <div class="tns-carousel-inner d-block d-md-flex" data-carousel-options="{&quot;controlsContainer&quot;: &quot;#external-controls&quot;, &quot;nav&quot;: false, &quot;gutter&quot;: 20, &quot;autoHeight&quot;: true}"> -->
            <swiper :autoplay="true" :slidesPerView="1" :spaceBetween="20" :loop="true" class="h-100vh">
                <SwiperSlide class="">
                    <!-- Slide 1-->
                    <div>
                        <div class="card card-body p-sm-5 card-light h-100">
                            <div class="row align-items-center py-3 py-sm-0">
                                <div class="col-md-4 col-xl-3 mb-4 pb-3 mb-md-0 pb-md-0 text-center text-md-start">
                                    <h2 class="text-light">Phụ tùng thay thế</h2>
                                    <p class="fs-lg text-light opacity-70 pb-md-4">Các loại phụ tùng hao mòn </p>
                                    <router-link class="btn btn-primary" to="/car-finder-catalog-grid">Mua hàng<i
                                            class="fi-chevron-right fs-sm ms-2"></i></router-link>
                                </div>
                                <div class="col-md-8 col-xl-9">
                                    <div class="row row-cols-2 row-cols-lg-4 gy-4 gx-3 gx-sm-4">
                                        <a class="col text-light text-decoration-none" href="javascript:void(0);">
                                            <img loading="lazy" class="d-block mb-2 mx-auto"
                                                src="@/assets/img/kwapp-store/01.webp" width="168" alt="Nhông đĩa">
                                            <div class="fw-bold text-center pt-1">Nhông đĩa</div>
                                        </a>
                                        <a class="col text-light text-decoration-none" href="javascript:void(0);">
                                            <img loading="lazy" class="d-block mb-2 mx-auto"
                                                src="@/assets/img/kwapp-store/02.webp" width="168" alt="Lốp">
                                            <div class="fw-bold text-center pt-1">Lốp</div>
                                        </a>
                                        <a class="col text-light text-decoration-none" href="javascript:void(0);">
                                            <img loading="lazy" class="d-block mb-2 mx-auto"
                                                src="@/assets/img/kwapp-store/03.webp" width="168" alt="Dầu nhớt">
                                            <div class="fw-bold text-center pt-1">Dầu nhớt</div>
                                        </a>
                                        <a class="col text-light text-decoration-none" href="javascript:void(0);">
                                            <img loading="lazy" class="d-block mb-2 mx-auto"
                                                src="@/assets/img/kwapp-store/04.webp" width="168" alt="Phụ kiện">
                                            <div class="fw-bold text-center pt-1">Phụ kiện</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </SwiperSlide>
                <!-- <SwiperSlide class="">
                    <div>
                        <div class="card card-body p-sm-5 card-light h-100">
                            <div class="row align-items-center py-3 py-sm-0">
                                <div class="col-md-6 mb-4 pb-3 mb-md-0 pb-md-0 text-center text-md-start">
                                    <h2 class="text-light">Car sale in 24 hours</h2>
                                    <p class="fs-lg text-light opacity-70 pb-md-4">Calculate your car's value, then choose how you want to sell.</p><router-link class="btn btn-primary" to="/car-finder-sell-car">Sell my car<i class="fi-chevron-right fs-sm ms-2"></i></router-link>
                                </div>
                                <div class="col-md-6">
                                    <div class="row row-cols-sm-3 row-cols-md-2 row-cols-lg-3 gy-4 gx-3 gx-sm-4">
                                        <div class="col">
                                            <div class="d-table bg-dark rounded-3 p-4 mx-auto mb-3"><img class="d-block m-sm-2" src="@/assets/img/car-finder/icons/buyers.svg" width="56" alt="Vetted buyers"></div>
                                            <div class="fw-bold text-center">Vetted buyers</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-table bg-dark rounded-3 p-4 mx-auto mb-3"><img class="d-block m-sm-2" src="@/assets/img/car-finder/icons/tools.svg" width="56" alt="Smart tools"></div>
                                            <div class="fw-bold text-center">Smart tools</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-table bg-dark rounded-3 p-4 mx-auto mb-3"><img class="d-block m-sm-2" src="@/assets/img/car-finder/icons/handshake.svg" width="56" alt="Handshake"></div>
                                            <div class="fw-bold text-center">The offer you deserve</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </SwiperSlide> -->
            </swiper>
            <!-- </div> -->
        </div>
        <!-- External carousel controls-->
        <div class="tns-carousel-controls tns-carousel-light pt-4 pb-2" id="external-controls">
            <button class="me-3" type="button"><i class="fi-chevron-left"></i></button>
            <button type="button"><i class="fi-chevron-right"></i></button>
        </div>
    </section>

</template>
