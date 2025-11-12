import { defineCustomElement } from 'vue'
import ProductAll from './components/ProductAll.vue'

// Define the custom element without shadow DOM
const ProductsSidebarElement = defineCustomElement(ProductAll, {
    shadowRoot: false
})

// Register the custom element
customElements.define('prodcuct-all', ProductsSidebarElement)
