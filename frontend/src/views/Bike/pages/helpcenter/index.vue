<script setup>
import Hero from './hero.vue'
import Contactus from './contactus.vue'
import FAQ from './faq.vue'
import { onMounted } from 'vue';
onMounted(() => {
    window.scrollTo(0, 0);
})
</script>

<template>
    <Hero />
    <FAQ />
    <Contactus />

</template>
