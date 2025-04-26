<script setup >
import PHeader from './pheader.vue';
import Content from './content.vue';
import Map from './map.vue';
</script>

<template>
  <section class="py-5">
    <div class="container pt-5 pb-lg-5">
      <PHeader />
      <Content />
    </div>
  </section>
  <Map />
</template>
