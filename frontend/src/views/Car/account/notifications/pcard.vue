<script lang="ts" setup>
</script>

<template>
    <!-- Page content-->
    <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
            <!-- Account nav-->
            <div class="card card-body card-light border-0 shadow-sm pb-1 me-lg-1">
                <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4">
                    <img class="rounded-circle" src="@/assets/img/avatars/01.jpg" width="48" alt="Robert Fox">
                    <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                        <h2 class="fs-lg text-light mb-0">Robert Fox</h2>
                        <span class="star-rating">
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                        </span>
                        <ul class="list-unstyled fs-sm mt-3 mb-0">
                            <li><a class="nav-link-light fw-normal" href="tel:3025550107">
                                    <i class="fi-phone opacity-60 me-2"></i>(302) 555-0107</a>
                            </li>
                            <li><a class="nav-link-light fw-normal" href="mailto:robert_fox@email.com">
                                    <i class="fi-mail opacity-60 me-2"></i>robert_fox@email.com</a>
                            </li>
                        </ul>
                    </div>
                </div><router-link class="btn btn-primary btn-lg w-100 mb-3" to="/car-finder-sell-car">
                    <i class="fi-plus me-2"></i>Sell car</router-link>
                <a class="btn btn-outline-light d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse">
                    <i class="fi-align-justify me-2"></i>Menu
                </a>
                <div class="collapse d-md-block mt-3" id="account-nav">
                    <div class="card-nav">
                        <router-link class="card-nav-link" to="/car-finder-account-info">
                            <i class="fi-user me-2"></i>Personal Info
                        </router-link>
                        <router-link class="card-nav-link" to="/car-finder-account-security">
                            <i class="fi-lock me-2"></i>Password &amp; Security
                        </router-link>
                        <router-link class="card-nav-link" to="/car-finder-account-cars">
                            <i class="fi-car me-2"></i>My Cars
                        </router-link>
                        <router-link class="card-nav-link" to="/car-finder-account-wishlist">
                            <i class="fi-heart me-2"></i>Wishlist
                            <span class="badge bg-faded-light ms-2">4</span>
                        </router-link>
                        <router-link class="card-nav-link" to="/car-finder-account-reviews">
                            <i class="fi-star me-2"></i>Reviews
                        </router-link>
                        <router-link class="card-nav-link active" to="/car-finder-account-notifications">
                            <i class="fi-bell me-2"></i>Notifications
                        </router-link>
                        <router-link class="card-nav-link" to="/car-finder-help-center">
                            <i class="fi-help me-2"></i>Help
                        </router-link>
                        <router-link class="card-nav-link" to="/signin-dark">
                            <i class="fi-logout me-2"></i>Sign Out
                        </router-link>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Content-->
        <div class="col-lg-8 col-md-7 mb-5">
            <h1 class="h2 text-light">Notifications</h1>
            <p class="text-light pt-1 mb-4">Get real-time vehicle updates, price drop alerts, helpful shopping information and more.</p>
            <div class="py-2" id="notification-settings">
                <div class="d-flex justify-content-between mb-4">
                    <div class="me-2">
                        <h6 class="text-light mb-1">New vehicles alerts</h6>
                        <p class="fs-sm text-light mb-0"><span class='opacity-70'>New vehicles that match your</span>
                            <router-link to='/car-finder-account-wishlist' class='text-light'>Wishlist</router-link>
                        </p>
                    </div>
                    <div class="form-check form-switch form-switch-light">
                        <input class="form-check-input" type="checkbox" id="new-vehicles" checked>
                        <label class="form-check-label" for="new-vehicles"></label>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                    <div class="me-2">
                        <h6 class="text-light mb-1">Vehicle status updates</h6>
                        <p class="fs-sm text-light mb-0">
                            <span class='opacity-70'>Updates like price changes and off-market status on your</span>
                            <router-link to='/car-finder-account-wishlist' class='text-light'>Wishlist</router-link>
                        </p>
                    </div>
                    <div class="form-check form-switch form-switch-light">
                        <input class="form-check-input" type="checkbox" id="vehicle-update" checked>
                        <label class="form-check-label" for="vehicle-update"></label>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                    <div class="me-2">
                        <h6 class="text-light mb-1">Finder recommendations</h6>
                        <p class="fs-sm text-light opacity-70 mb-0">Vehicles we think you'll like. These recommendations may be slightly outside your search criteria</p>
                    </div>
                    <div class="form-check form-switch form-switch-light">
                        <input class="form-check-input" type="checkbox" id="finder-recomendation">
                        <label class="form-check-label" for="finder-recomendation"> </label>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                    <div class="me-2">
                        <h6 class="text-light mb-1">Featured news</h6>
                        <p class="fs-sm text-light opacity-70 mb-0">News and tips you may be interested in</p>
                    </div>
                    <div class="form-check form-switch form-switch-light">
                        <input class="form-check-input" type="checkbox" id="featured-news" checked>
                        <label class="form-check-label" for="featured-news"></label>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                    <div class="me-2">
                        <h6 class="text-light mb-1">Finder extras</h6>
                        <p class="fs-sm text-light opacity-70 mb-0">Occasional notifications about new features to make finding the perfect car easy</p>
                    </div>
                    <div class="form-check form-switch form-switch-light">
                        <input class="form-check-input" type="checkbox" id="extras">
                        <label class="form-check-label" for="extras"></label>
                    </div>
                </div>
            </div>
            <div class="border-top border-light pt-4">
                <div class="form-check form-switch form-switch-light">
                    <input class="form-check-input" type="checkbox" id="all-notifications" data-master-checkbox-for="#notification-settings" checked>
                    <label class="form-check-label" for="all-notifications">Enable / disable all notifications</label>
                </div>
            </div>
        </div>
    </div>
</template>