<script setup lang="ts">
import PNav from './pnav.vue';
import Feature from './feature.vue';
import Step from './step.vue';
import Search from './search.vue';
import Selling from './selling.vue';
import Faq from './faq.vue';
import Brand from './brand.vue';
import Blog from './blog.vue';
import 'swiper/css';
import 'swiper/css/navigation';
</script>

<template>
  <PNav />
    <Feature />
    <Step />
    <Search />
    <Selling />
    <Brand />
    <Faq />
    <Blog />
</template>