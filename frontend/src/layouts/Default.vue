<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { useRouter } from 'vue-router';
import initComponent from '@/mixins/bootstrap';

import AuthModals from '@/components/AuthModals.vue';
import NavBar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
document.body.classList?.remove("bg-secondary")

const isLoader = ref(false);
const router = useRouter();

const scrollTopButton = () => {
  const element = document.querySelector('.btn-scroll-top') as HTMLElement;
  const scrollOffset = 300;

  if (!element) return;

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > scrollOffset) {
      element.classList.add('show');
    } else {
      element.classList.remove('show');
    }
  });
  element?.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
};

onMounted(() => {
  document.body.classList.add("bg-dark")

  isLoader.value = true;
  setTimeout(() => isLoader.value = false, 500);

  // initialize bootstrap components
  initComponent();

  // handle scroll
  let n: HTMLElement | null = document.querySelector(".btn-scroll-top");
  let a = 600;
  if (n) {
    window.addEventListener("scroll", (e) => {
      if (window.scrollY > a) {
        n?.classList.add("show");
      } else {
        n?.classList.remove("show");
      }
    });

    n?.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }
  scrollTopButton();
});

// show loader on route chnage
router.beforeEach(() => {
  isLoader.value = true;
  setTimeout(() => isLoader.value = false, 500);
});

</script>

<template>
  <!-- Page loading spinner-->
  <div class="page-loading active" v-if="isLoader">
    <div class="page-loading-inner">
      <div class="page-spinner"></div><span>Loading...</span>
    </div>
  </div>

  <main class="page-wrapper">
    <AuthModals />
    <NavBar />

    <slot />
  </main>
  <Footer />
  <a class="btn-scroll-top" href="#top" v-smooth-scroll>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon fi-chevron-up"> </i>
  </a>

</template>
