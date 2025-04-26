<script  setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
</script>
<template>
  <!-- Our partners (carousel)-->
  <section class="container mb-5 pb-lg-5 pb-2 pb-sm-3">
    <h2 class="mb-4 pb-2 text-center text-light">Our partners</h2>
    <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush">
      <!-- <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 6, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;500&quot;:{&quot;items&quot;:4}, &quot;992&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 16}, &quot;1200&quot;:{&quot;items&quot;:6, &quot;gutter&quot;: 24}}}"> -->


      <swiper :autoplay="true" :slidesPerView="6" :loop="true" :spaceBetween="25" class="h-100vh">
        <SwiperSlide>
          <div><a class="opacity-40 opacity-transition" href="javascript:void(0);"><img class="swap-to" src="@/assets/img/car-finder/brands/provert.svg" alt="Logo" width="196"></a></div>
        </SwiperSlide>
        <SwiperSlide>
          <div><a class="opacity-40 opacity-transition" href="javascript:void(0);"><img class="swap-to" src="@/assets/img/car-finder/brands/pentel.svg" alt="Logo" width="196"></a></div>
        </SwiperSlide>
        <SwiperSlide>
          <div><a class="opacity-40 opacity-transition" href="javascript:void(0);"><img class="swap-to" src="@/assets/img/car-finder/brands/chase.svg" alt="Logo" width="196"></a></div>
        </SwiperSlide>
        <SwiperSlide>
          <div><a class="opacity-40 opacity-transition" href="javascript:void(0);"><img class="swap-to" src="@/assets/img/car-finder/brands/real-seguros.svg" alt="Logo" width="196"></a></div>
        </SwiperSlide>
        <SwiperSlide>
          <div><a class="opacity-40 opacity-transition" href="javascript:void(0);"><img class="swap-to" src="@/assets/img/car-finder/brands/build.svg" alt="Logo" width="196"></a></div>
        </SwiperSlide>
        <SwiperSlide>
          <div><a class="opacity-40 opacity-transition" href="javascript:void(0);"><img class="swap-to" src="@/assets/img/car-finder/brands/cargil.svg" alt="Logo" width="196"></a></div>
        </SwiperSlide>
      </swiper>
      <!-- </div> -->
    </div>
  </section>
</template>
