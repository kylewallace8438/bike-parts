<script setup >
import PNav from './pnav.vue';
import Blog from './blog.vue';
import { onMounted } from 'vue';
onMounted(() => {
    window.scrollTo(0, 0);
})
</script>

<template>
  <div class="container mt-5 mb-md-4 py-5">
    <PNav />
    <Blog />
  </div>
</template>
