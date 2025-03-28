<script lang="ts" setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
</script>
<template>
    <!-- Features-->
    <section class="container mb-5 pb-lg-5">
        <h2 class="mb-4 pb-2 text-light text-center">We are new and growing fast</h2>
        <!-- Features carousel-->
        <div class="tns-carousel-wrapper tns-nav-outside tns-carousel-light">
            <!-- <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 3, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16, &quot;controls&quot;: false},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;900&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;gutter&quot;: 24}}}"> -->
            <swiper :autoplay="true" :slidesPerView="3" :loop="true" :spaceBetween="20" class="h-100">
                <SwiperSlide>
                    <div>
                        <div class="card card-light card-hover h-100">
                            <div class="card-body icon-box text-center">
                                <div class="icon-box-media bg-dark text-light mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width: 4.5rem; height: 4.5rem;"><img src="@/assets/img/car-finder/icons/car.svg" alt="Car icon"></div>
                                <h4 class="card-title">~ 1 mln cars</h4>
                                <p class="card-text fs-sm opacity-70">Fringilla vivamus arcu faucibus malesuada. Dui aenean suspendisse a aliquet id gravida ut. Lorem lacinia sed mauris erat at nisl.</p>
                            </div>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide>
                    <!-- Feature item-->
                    <div>
                        <div class="card card-light card-hover h-100">
                            <div class="card-body icon-box text-center">
                                <div class="icon-box-media bg-dark text-light mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width: 4.5rem; height: 4.5rem;"><img src="@/assets/img/car-finder/icons/building.svg" alt="Building icon"></div>
                                <h4 class="card-title">5 subsidiaries</h4>
                                <p class="card-text fs-sm opacity-70">Porttitor bibendum pharetra volutpat est. Vitae tortor magna gravida non lacus. Arcu auctor malesuada dui congue.</p>
                            </div>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide>
                    <!-- Feature item-->
                    <div>
                        <div class="card card-light card-hover h-100">
                            <div class="card-body icon-box text-center">
                                <div class="icon-box-media bg-dark text-light mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width: 4.5rem; height: 4.5rem;"><img src="@/assets/img/car-finder/icons/flag.svg" alt="Flag icon"></div>
                                <h4 class="card-title">8 countries</h4>
                                <p class="card-text fs-sm opacity-70">Duis tortor, vel nisi, leo vulputate sed quis. Ultrices arcu, amet aliquam id massa egestas ut. Dui, sed risus cursus magna dolor.</p>
                            </div>
                        </div>
                    </div>
                </SwiperSlide>
            </swiper>
            <!-- Feature item-->



            <!-- </div> -->
        </div>
    </section>
</template>