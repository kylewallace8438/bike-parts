<script  setup>
import { ref } from 'vue'

import { Swiper, SwiperSlide } from 'swiper/vue'
const swiperOptions = ref({
    breakpoints: {
        320: {
            slidesPerView: 4,
            spaceBetween: 20
        },
        582: {
            slidesPerView: 8,
            spaceBetween: 20
        },

        992: {
            slidesPerView: 10,
            spaceBetween: 20
        },
        1264: {
            slidesPerView:12,
            spaceBetween: 20
        },
        1980: {
            slidesPerView: 12,
            spaceBetween: 20
        }
    }
});
</script>
<template>
    <!-- Brands-->
    <section class="container py-2 py-sm-3">
        <div class="row g-2 g-sm-4">
            <swiper :autoplay="true" :slidesPerView="12" :breakpoints="swiperOptions.breakpoints" :loop="true" class="h-100">
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/opel.svg" width="86" alt="Opel"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/audi.svg" width="86" alt="Audi"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/mercedes.svg" width="86" alt="Mercedes-Benz"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/toyota.svg" width="86" alt="Toyota"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/mazda.svg" width="86" alt="Mazda"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/nissan.svg" width="86" alt="Nissan"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/hyundai.svg" width="86" alt="Hyundai"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/lexus.svg" width="86" alt="Lexus"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/honda.svg" width="86" alt="Honda"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/renault.svg" width="86" alt="Renault"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/infiniti.svg" width="86" alt="Infiniti"></a></div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="javascript:void(0);"><img src="@/assets/img/car-finder/brands/mitsubishi.svg" width="86" alt="Mitsubishi"></a></div>
                </SwiperSlide>
            </swiper>
        </div>
    </section>
</template>
