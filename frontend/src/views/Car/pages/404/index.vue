<script setup lang="ts">
import { Vue3Lottie } from 'vue3-lottie';

import astronautJSON from '@/assets/json/animation-car-finder-404.json';

document.body.classList.add('bg-dark');
</script>
<template>
    <main class="page-wrapper">
        <!-- Page content-->
        <section class="d-flex align-items-center position-relative min-vh-100 py-5">
            <!-- Bg overlay--><span class="position-absolute top-50 start-50 translate-middle zindex-1 rounded-circle mt-sm-0 mt-n5" style="width: 50vw; height: 50vw; background-color: rgba(83, 74, 117, 0.3); filter: blur(6.4vw);"></span>
            <!-- Overlay content-->
            <div class="container d-flex justify-content-center position-relative zindex-5 text-center">
                <div class="col-lg-8 col-md-10 col-12 px-0">
                    <h1 class="display-1 mb-lg-5 mb-4 text-light">Oops!</h1>
                    <div class="ratio ratio-16x9 mx-auto mb-lg-5 mb-4 py-4" style="max-width: 556px;">
                        <Vue3Lottie :animationData="astronautJSON" class="py-4" />
                    </div>
                    <p class="h2 mb-lg-5 mb-4 pb-2 text-light">The requested page doesn’t exist</p><router-link class="btn btn-lg btn-primary w-sm-auto w-100 mb-3 me-sm-4" to="/">Go to homepage</router-link><router-link class="btn btn-lg btn-outline-light w-sm-auto w-100 mb-3" to="/car-finder-contacts">Contact us</router-link>
                </div>
            </div>
        </section>
    </main>
</template>