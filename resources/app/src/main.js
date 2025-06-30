import './assets/main.css'

import {createApp} from 'vue/dist/vue.esm-bundler';
import TheWelcome from './components/TheWelcome.vue'
import HomeComponent from './Home.vue'
import ProductsComponent from './Products.vue'
createApp({
    components: {
        'home-component': HomeComponent
    }
}).mount('#home-app')
createApp({
    components: {
        'product-list-component': ProductsComponent
    }
}).mount('#product-list-app')

createApp({
    components: {
        'the-welcome': TheWelcome
    }
}).mount('#app')
