<script lang="ts" setup>
import { ref, onMounted, onUnmounted, watch } from 'vue'
import { useRoute } from 'vue-router'
const navbar = ref<HTMLElement | null>(null)
const scrollOffset = 20
const isStuck = ref<Boolean>(false)
const route = useRoute()

const navbarStuck = () => {
    if (navbar.value && window.scrollY > scrollOffset) {
        isStuck.value = true
    } else {
        isStuck.value = false
    }
}

const setActiveNavItem = () => {
    var navbarEle = document.getElementById("navbarNav");
    if (navbarEle) {
        // Remove the 'active' class from any element that has it initially
        navbarEle.querySelectorAll('.dropdown.active').forEach((item) => {
            item.classList.remove("active");
        });

        var activeEle = navbarEle.querySelector(`.nav-item a[href="${route.path}"]`);
        if (activeEle) {
            const parentListItem = activeEle.parentElement;
            if (parentListItem) {
                const grandParentListItem = parentListItem.parentElement?.parentElement;
                if (grandParentListItem) {
                    grandParentListItem.classList.add("active");
                    if (grandParentListItem.parentElement?.parentElement?.classList.contains("nav-item")) {
                        grandParentListItem.parentElement?.parentElement?.classList.add("active");
                    }
                }
            }
        }
    }
};

onMounted(() => {
    window.addEventListener('scroll', navbarStuck);
    setActiveNavItem();
})

onUnmounted(() => {
    window.removeEventListener('scroll', navbarStuck)
})

watch(() => route.fullPath,
    async () => {
        setActiveNavItem();
    }
);
</script>

<template>
    <!-- Navbar-->
    <header ref="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top" :class="{ 'navbar-stuck': isStuck }">
        <div class="container">
            <router-link class="navbar-brand me-3 me-xl-4" to="/">
                <img class="d-block" src="@/assets/img/logo/logo-light.svg" width="116" alt="Finder">
            </router-link>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="dropdown d-none d-lg-block order-lg-3 my-n2 me-3">
                <router-link class="d-block py-2" to="/car-finder-account-info">
                    <img class="rounded-circle" src="@/assets/img/avatars/02.jpg" width="40" alt="Robert Fox">
                </router-link>
                <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                    <div class="d-flex align-items-start border-bottom border-light px-3 py-1 mb-2" style="width: 16rem;">
                        <img class="rounded-circle" src="@/assets/img/avatars/01.jpg" width="48" alt="Robert Fox">
                        <div class="ps-2">
                            <h6 class="fs-base text-light mb-0">Robert Fox</h6><span class="star-rating star-rating-sm">
                                <i class="star-rating-icon fi-star-filled active"></i>
                                <i class="star-rating-icon fi-star-filled active"></i>
                                <i class="star-rating-icon fi-star-filled active"></i>
                                <i class="star-rating-icon fi-star-filled active"></i>
                                <i class="star-rating-icon fi-star-filled active"></i>
                            </span>
                            <div class="fs-xs py-2">(302) 555-0107<br>robert_fox@email.com</div>
                        </div>
                    </div>
                    <router-link class="dropdown-item" to="/car-finder-account-info">
                        <i class="fi-user me-2"></i>Personal Info
                    </router-link>
                    <router-link class="dropdown-item" to="/car-finder-account-security">
                        <i class="fi-lock me-2"></i>Password &amp; Security
                    </router-link>
                    <router-link class="dropdown-item" to="/car-finder-account-cars">
                        <i class="fi-car me-2"></i>My Cars
                    </router-link>
                    <router-link class="dropdown-item" to="/car-finder-account-wishlist">
                        <i class="fi-heart me-2"></i>Wishlist
                        <span class="badge bg-faded-light ms-2">4</span>
                    </router-link>
                    <router-link class="dropdown-item" to="/car-finder-account-reviews">
                        <i class="fi-star me-2"></i>Reviews
                    </router-link>
                    <router-link class="dropdown-item" to="/car-finder-account-notifications">
                        <i class="fi-bell me-2"></i>Notifications
                    </router-link>
                    <div class="dropdown-divider"></div>
                    <router-link class="dropdown-item" to="/car-finder-help-center">Help</router-link>
                    <router-link class="dropdown-item" to="/signin-dark">Sign Out</router-link>
                </div>
            </div><router-link class="btn btn-primary btn-sm ms-2 order-lg-3" to="/car-finder-sell-car">
                <i class="fi-plus me-2"></i>Sell car
            </router-link>
            <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
                <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
                    <li class="nav-item dropdown me-lg-2"><a class="nav-link dropdown-toggle align-items-center pe-lg-4" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false"><i class="fi-layers me-2"></i>Demos<span class="d-none d-lg-block position-absolute top-50 end-0 translate-middle-y border-end border-light" style="width: 1px; height: 30px;"></span></a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                          <li><a class="dropdown-item" href="https://property-finder-vue.vercel.app/"><i class="fi-building fs-base me-2"></i>Real Estate Demo</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="https://car-finder-vue.vercel.app/"><i class="fi-car fs-base me-2"></i>Car Finder Demo</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="https://job-finder-vue.vercel.app/"><i class="fi-briefcase fs-base me-2"></i>Job Board Demo</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="https://city-finder-vue.vercel.app/"><i class="fi-map-pin fs-base me-2"></i>City Guide Demo</a></li>
                        </ul>
                      </li>
                    <!-- Menu items-->
                    <li class="nav-item"><router-link class="nav-link" to="/">Home</router-link></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><router-link class="dropdown-item" to="/car-finder-catalog-list">List View</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-catalog-grid">Grid View</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-single">Car Single Page</router-link></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><router-link class="dropdown-item" to="/car-finder-account-info">Personal Info</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-account-security">Password &amp; Security</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-account-cars">My Cars</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-account-wishlist">Wishlist</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-account-reviews">Reviews</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-account-notifications">Notifications</router-link></li>
                            <li><router-link class="dropdown-item" to="signin-dark">Sign In</router-link></li>
                            <li><router-link class="dropdown-item" to="signup-dark">Sign Up</router-link></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vendor</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><router-link class="dropdown-item" to="/car-finder-sell-car">Sell Car</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-promotion">Ad Promotion Page</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-vendor">Vendor Page</router-link></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><router-link class="dropdown-item" to="/car-finder-about">About</router-link></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><router-link class="dropdown-item" to="/car-finder-blog">Blog Grid</router-link></li>
                                    <li><router-link class="dropdown-item" to="/car-finder-blog-single">Single Post</router-link></li>
                                </ul>
                            </li>
                            <li><router-link class="dropdown-item" to="/car-finder-contacts">Contacts</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-help-center">Help Center</router-link></li>
                            <li><router-link class="dropdown-item" to="/car-finder-404">404 Not Found</router-link></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown d-lg-none">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="rounded-circle me-2" src="@/assets/img/avatars/02.jpg" width="30" alt="Robert Fox">
                            Robert Fox</a>
                        <div class="dropdown-menu dropdown-menu-dark">
                            <div class="ps-3">
                                <span class="star-rating star-rating-sm">
                                    <i class="star-rating-icon fi-star-filled active"></i>
                                    <i class="star-rating-icon fi-star-filled active"></i>
                                    <i class="star-rating-icon fi-star-filled active"></i>
                                    <i class="star-rating-icon fi-star-filled active"></i>
                                    <i class="star-rating-icon fi-star-filled active"></i>
                                </span>
                                <div class="fs-xs py-2">(302) 555-0107<br>robert_fox@email.com</div>
                            </div>
                            <router-link class="dropdown-item" to="/car-finder-account-info">
                                <i class="fi-user me-2"></i>Personal Info
                            </router-link>
                            <router-link class="dropdown-item" to="/car-finder-account-security">
                                <i class="fi-lock me-2"></i>Password &amp; Security
                            </router-link>
                            <router-link class="dropdown-item" to="/car-finder-account-cars">
                                <i class="fi-car me-2"></i>My Cars
                            </router-link>
                            <router-link class="dropdown-item" to="/car-finder-account-wishlist">
                                <i class="fi-heart me-2"></i>Wishlist<span class="badge bg-faded-light ms-2">4</span>
                            </router-link>
                            <router-link class="dropdown-item" to="/car-finder-account-reviews"><i class="fi-star me-2"></i>Reviews</router-link>
                            <router-link class="dropdown-item" to="/car-finder-account-notifications"><i class="fi-bell me-2"></i>Notifications</router-link>
                            <div class="dropdown-divider"></div>
                            <router-link class="dropdown-item" to="/car-finder-help-center">Help</router-link>
                            <router-link class="dropdown-item" to="signin-dark">Sign Out</router-link>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>

</template>
