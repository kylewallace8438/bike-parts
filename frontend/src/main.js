import './assets/scss/theme.scss'
import { createApp } from 'vue'
import Vue3Lottie from 'vue3-lottie'
import App from './App.vue'
import router from './router'
import VueSmoothScroll from 'vue3-smooth-scroll'
import { createI18n } from 'vue-i18n'
import vi from './i18n/vi'
import en from './i18n/en'
import { register } from 'swiper/element/bundle';
import { createPinia } from 'pinia';

if (window.token) {
    const regex = /^\d+\|[A-Za-z0-9]+$/;
    if (regex.test(window.token)) {
        console.log('✅ Valid token format');
    } else {
        console.log('❌ Invalid token format');
    }
    const [id, key] = window.token.split('|');
    localStorage.setItem('id', id)
    localStorage.setItem('token', key)
}
register();
const i18n = createI18n({
  locale: 'vi',
  fallbackLocale: 'vi',
  messages: {
    vi: vi,
    en: en
  },
})

const app = createApp(App)
app.use(i18n)
app.use(router).use(Vue3Lottie)
app.use(VueSmoothScroll)
app.use(createPinia())

app.mount('#app')
