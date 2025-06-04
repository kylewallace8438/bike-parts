<script setup lang="ts">
import Content from './content.vue';
import { onMounted } from 'vue';
onMounted(() => {
    window.scrollTo(0, 0);
})
</script>

<template>
  <Content/>

</template>
