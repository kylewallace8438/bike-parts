import './assets/scss/theme.scss'

import { createApp } from 'vue'
import Vue3Lottie from 'vue3-lottie'
import App from './App.vue'
import router from './router'
import VueSmoothScroll from 'vue3-smooth-scroll'


const app = createApp(App)

app.use(router).use(Vue3Lottie)
app.use(VueSmoothScroll)

app.mount('#app')
