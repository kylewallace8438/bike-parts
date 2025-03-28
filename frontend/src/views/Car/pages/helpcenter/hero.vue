<script lang="ts" setup>
import Hero from '@/assets/img/car-finder/home/hero-bg.png';

</script>
<template>
  <!-- Hero search-->
  <section class="position-relative mb-5 pt-5 pb-lg-5">
    <!-- Overlay bg--><span class="d-block position-absolute top-0 left-0 w-100 h-100 zindex-1" style="background: linear-gradient(26.21deg, rgba(93, 60, 242, 0.15) 0%, rgba(253, 86, 49, 0.15) 108.88%);"></span>
    <!-- Overlay content-->
    <div class="container position-relative zindex-5 py-5">
      <!-- Breadcrumb-->
      <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
        <ol class="breadcrumb breadcrumb-light">
          <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
          <li class="breadcrumb-item active" aria-current="page">Help center</li>
        </ol>
      </nav>
      <div class="col-lg-8 col-md-10 mx-auto px-0 pt-2">
        <h1 class="mb-4 pb-2 text-center text-light">Hello, what can we do for you?</h1>
        <!-- Search form-->
        <form class="form-group form-group-light mb-4">
          <input class="form-control form-control-lg" type="text" placeholder="What are you looking for?">
          <button class="btn btn-lg btn-primary px-sm-4 px-3" type="submit"><i class="fi-search me-sm-2"></i><span class="d-sm-inline d-none">Search</span></button>
        </form>
        <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-center">
          <div class="pb-3 mb-2 me-2 flex-shrink-0 fw-bold text-light opacity-70">Popular sections:</div>
          <div class="text-nowrap overflow-auto pb-3">
            <div><a class="btn btn-xs btn-translucent-light fw-normal mb-2 me-2" href="javascript:void(0);">General inquiries</a><a class="btn btn-xs btn-translucent-light fw-normal mb-2 me-2" href="javascript:void(0);">Warranties &amp; more</a><a class="btn btn-xs btn-translucent-light fw-normal mb-2 me-2" href="javascript:void(0);">Account questions</a><a class="btn btn-xs btn-translucent-light fw-normal mb-2 me-2" href="javascript:void(0);">Payment &amp; Documentation</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
