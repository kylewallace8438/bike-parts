<script setup >
import axios from '@/lib/axios'
import { onMounted } from 'vue';

onMounted(() => {
    axios.get('user').then(response => {
        if (response.status == 200) {
            localStorage.setItem('user', JSON.stringify(response.data))
        }
    }).catch(error => {
        console.error(error)
    })
})
</script>
<template>
  <component v-if="$route.meta.layout" :is="$route.meta.layout">
    <router-view></router-view>
  </component>
  <router-view v-else />
</template>
