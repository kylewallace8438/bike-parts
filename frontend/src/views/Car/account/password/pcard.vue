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
                </div>
                <router-link class="btn btn-primary btn-lg w-100 mb-3" to="/car-finder-sell-car">
                    <i class="fi-plus me-2"></i>Sell car
                </router-link>
                <a class="btn btn-outline-light d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse">
                    <i class="fi-align-justify me-2"></i>Menu</a>
                <div class="collapse d-md-block mt-3" id="account-nav">
                    <div class="card-nav"><router-link class="card-nav-link" to="/car-finder-account-info">
                            <i class="fi-user me-2"></i>Personal Info
                        </router-link>
                        <router-link class="card-nav-link active" to="/car-finder-account-security">
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
                        <router-link class="card-nav-link" to="/car-finder-account-notifications">
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
            <h1 class="h2 text-light">Password &amp; Security</h1>
            <p class="text-light pt-1">Manage your password settings and secure your account.</p>
            <h2 class="h5 text-light">Password</h2>
            <form class="needs-validation pb-4" novalidate>
                <div class="row align-items-end mb-2">
                    <div class="col-sm-6 mb-2">
                        <label class="form-label text-light" for="account-password">Current password</label>
                        <div class="password-toggle">
                            <input class="form-control form-control-light" type="password" id="account-password" required>
                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <a class="d-inline-block text-light mb-2" href="javascript:void(0);">Forgot password?</a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label text-light" for="account-password-new">New password</label>
                        <div class="password-toggle">
                            <input class="form-control form-control-light" type="password" id="account-password-new" required>
                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox">
                                <span class="password-toggle-indicator"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label text-light" for="account-password-confirm">Confirm password</label>
                        <div class="password-toggle">
                            <input class="form-control form-control-light" type="password" id="account-password-confirm" required>
                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-primary" type="submit">Update password</button>
            </form>
            <div class="border-top border-light pt-4 mt-3"></div>
            <h2 class="h5 text-light pt-2 mb-4">Where you're signed in on</h2>
            <div class="d-flex border-bottom border-light pb-3 mb-3"><i class="fi-device-desktop fs-5 text-light me-1"></i>
                <div class="ps-2 text-light">
                    <div class="fw-bold mb-1">Mac – New York, USA</div>
                    <span class="d-inline-block fs-sm border-end border-light pe-2 me-2">
                        <span class="opacity-70">Chrome</span></span>
                    <span class="fs-sm fw-bold text-success">Active now</span>
                </div>
            </div>
            <div class="d-flex border-bottom border-light pb-3 mb-3">
                <i class="fi-device-mobile fs-5 text-light me-1"></i>
                <div class="ps-2 text-light">
                    <div class="fw-bold mb-1">iPhone 12 – New York, USA</div>
                    <span class="d-inline-block fs-sm border-end border-light pe-2 me-2">
                        <span class="opacity-70">Finder App</span></span>
                    <span class="fs-sm opacity-70">20 hours ago</span>
                </div>
                <div class="align-self-center ms-auto">
                    <div class="dropdown">
                        <button class="btn btn-icon btn-translucent-light btn-xs rounded-circle" type="button" id="contextMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fi-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark pb-3 my-1" aria-labelledby="contextMenu1">
                            <li><a class="dropdown-item" href="javascript:void(0);">Not you?</a></li>
                            <li><a class="d-block px-3" href="javascript:void(0);">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex border-bottom border-light pb-3 mb-3">
                <i class="fi-device-desktop fs-5 text-light me-1"></i>
                <div class="ps-2 text-light">
                    <div class="fw-bold mb-1">Windows 10.1 – New York, USA</div>
                    <span class="d-inline-block fs-sm border-end border-light pe-2 me-2">
                        <span class="opacity-70">Chrome</span></span>
                    <span class="fs-sm text-light opacity-70">November 15 at 8:42 AM
                    </span>
                </div>
                <div class="align-self-center ms-auto">
                    <div class="dropdown">
                        <button class="btn btn-icon btn-translucent-light btn-xs rounded-circle" type="button" id="contextMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fi-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark pb-3 my-1" aria-labelledby="contextMenu2">
                            <li><a class="dropdown-item" href="javascript:void(0);">Not you?</a></li>
                            <li><a class="d-block px-3" href="javascript:void(0);">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div><a class="nav-link nav-link-light px-0 mt-4" href="javascript:void(0);">Sign out of all sessions </a>
        </div>
    </div>
</template>