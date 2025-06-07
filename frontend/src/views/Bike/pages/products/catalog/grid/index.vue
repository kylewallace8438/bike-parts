<script setup >
import { onMounted } from 'vue';
import Content from './content.vue';
onMounted(() => {
    window.scrollTo(0, 0);
})
</script>

<template>
  <Content />
  <button class="btn btn-primary btn-sm w-100 rounded-0 fixed-bottom d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#filters-sidebar"><i class="fi-filter me-2"></i>Filters</button>
</template>
