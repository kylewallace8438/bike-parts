<script setup >
import Hero from './hero.vue'
// import Topoffer from './top-offer.vue'
// import Bodytype from './bodytype.vue'
import Blog from './blog.vue'
import CTA from './cta.vue'
import { onMounted } from 'vue'
// import MCTA from './mcta.vue'
// import Features from './features.vue'
// import LetestCar from './letest-car.vue'
// import Brands from './brands.vue'
onMounted(() => {
    window.scrollTo(0, 0);
})
</script>

<template>
    <Hero />
    <!-- <Bodytype /> -->
    <!-- <Topoffer /> -->
    <!-- <Brands /> -->
    <!-- <Features /> -->
    <!-- <LetestCar /> -->
    <CTA />
    <!-- <MCTA /> -->

    <Blog />

</template>

