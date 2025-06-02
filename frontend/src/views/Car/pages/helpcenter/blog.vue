<script  setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
</script>
<template>
  <!-- Latest news (Blog)-->
  <section class="container pb-4 pb-sm-5 mb-2 mb-md-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-sm-2">
      <h2 class="h3 text-light mb-2 mb-sm-0">Latest news</h2><router-link class="btn btn-link btn-light fw-normal px-0" to="/car-finder-blog">Go to blog<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></router-link>
    </div>
    <div class="tns-carousel-wrapper tns-nav-outside tns-carousel-light">
      <!-- <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;900&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;gutter&quot;: 24}}}"> -->
      <swiper :autoplay="true" :slidesPerView="3" :loop="true" class="h-100vh">
        <SwiperSlide class="pe-4">
          <div>
            <article><router-link class="d-block rounded-3 overflow-hidden" to="/car-finder-blog-single"><img class="d-block" src="@/assets/img/car-finder/blog/04.webp" alt="Image"></router-link>
              <div class="py-3"><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Events</a>
                <h3 class="text-light fs-base pt-1"><router-link class="nav-link" to="/car-finder-blog-single">Top 10 Classic Car Events</router-link></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/08.jpg" width="44" alt="Avatar">
                  <div class="ps-2">
                    <h6 class="fs-sm text-light lh-base mb-1">Jacob Jones</h6>
                    <div class="d-flex fs-xs text-light opacity-60"><span class="me-2 pe-1"><i class="fi-calendar-alt me-1"></i>May 8</span><span><i class="fi-chat-circle me-1"></i>No comments</span></div>
                  </div>
                </a>
              </div>
            </article>
          </div>
        </SwiperSlide>
        <SwiperSlide class="pe-4">
          <div>
            <article><router-link class="d-block rounded-3 overflow-hidden" to="/car-finder-blog-single"><img class="d-block" src="@/assets/img/car-finder/blog/05.webp" alt="Image"></router-link>
              <div class="py-3"><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Inspiration</a>
                <h3 class="text-light fs-base pt-1"><router-link class="nav-link" to="/car-finder-blog-single">5 Predictions From the Past About the Future</router-link></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/09.jpg" width="44" alt="Avatar">
                  <div class="ps-2">
                    <h6 class="fs-sm text-light lh-base mb-1">Guy Hawkins</h6>
                    <div class="d-flex fs-xs text-light opacity-60"><span class="me-2 pe-1"><i class="fi-calendar-alt me-1"></i>Apr 25</span><span><i class="fi-chat-circle me-1"></i>6 comments</span></div>
                  </div>
                </a>
              </div>
            </article>
          </div>
        </SwiperSlide>
        <SwiperSlide class="pe-4">
          <div>
            <article><router-link class="d-block rounded-3 overflow-hidden" to="/car-finder-blog-single"><img class="d-block" src="@/assets/img/car-finder/blog/06.jpg" alt="Image"></router-link>
              <div class="py-3"><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Test Drives</a>
                <h3 class="text-light fs-base pt-1"><router-link class="nav-link" to="/car-finder-blog-single">This Year is All About New Harley Davidson</router-link></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/12.jpg" width="44" alt="Avatar">
                  <div class="ps-2">
                    <h6 class="fs-sm text-light lh-base mb-1">Ralph Edwards</h6>
                    <div class="d-flex fs-xs text-light opacity-60"><span class="me-2 pe-1"><i class="fi-calendar-alt me-1"></i>Mar 12</span><span><i class="fi-chat-circle me-1"></i>2 comments</span></div>
                  </div>
                </a>
              </div>
            </article>
          </div>
        </SwiperSlide>
      </swiper>
      <!-- </div> -->
    </div>
  </section>
</template>
