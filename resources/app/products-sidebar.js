import { defineCustomElement } from 'vue'
import ProductsSidebar from './components/ProductsSidebar.vue'

// Define the custom element without shadow DOM
const ProductsSidebarElement = defineCustomElement(ProductsSidebar, {
    shadowRoot: false
})

// Register the custom element
customElements.define('products-sidebar', ProductsSidebarElement)
