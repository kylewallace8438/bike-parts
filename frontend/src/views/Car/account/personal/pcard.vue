<script setup >
// Import Vue FilePond
import vueFilePond from "vue-filepond";

// Import FilePond styles
import "filepond/dist/filepond.min.css";

// Import image preview plugin styles
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";

// Import image preview and file type validation plugins
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";

// Create component
const FilePond = vueFilePond(
    FilePondPluginFileValidateType,
    FilePondPluginImagePreview
);
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
                    <i class="fi-plus me-2"></i>Sell car
                </router-link>
                <a class="btn btn-outline-light d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse">
                    <i class="fi-align-justify me-2"></i>Menu</a>
                <div class="collapse d-md-block mt-3" id="account-nav">
                    <div class="card-nav">
                        <router-link class="card-nav-link active" to="/car-finder-account-info">
                            <i class="fi-user me-2"></i>Personal Info</router-link>
                        <router-link class="card-nav-link" to="/car-finder-account-security">
                            <i class="fi-lock me-2"></i>Password &amp; Security</router-link>
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
            <h1 class="h2 text-light">Personal Info</h1>
            <div class="text-light mb-2 pt-1">Your personal info is 50% completed</div>
            <div class="progress progress-light mb-4" style="height: .25rem;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="row pt-2">
                <div class="col-lg-9 col-md-12 col-sm-8 mb-2 mb-m-4">
                    <div class="border border-light rounded-3 p-3 mb-4" id="personal-info">
                        <!-- Name-->
                        <div class="border-bottom border-light pb-3 mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pe-2 opacity-70">
                                    <label class="form-label fw-bold text-light">Full name</label>
                                    <div class="text-light" id="name-value">Robert Fox</div>
                                </div>
                                <div data-bs-toggle="tooltip" title="Edit">
                                    <a class="nav-link nav-link-light py-0" href="#name-collapse" data-bs-toggle="collapse">
                                        <i class="fi-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="name-collapse" data-bs-parent="#personal-info">
                                <input class="form-control form-control-light mt-3" type="text" data-bs-binded-element="#name-value" data-bs-unset-value="Not specified" value="Robert Fox">
                            </div>
                        </div>
                        <!-- Gender-->
                        <div class="border-bottom border-light pb-3 mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pe-2 opacity-70">
                                    <label class="form-label fw-bold text-light">Gender</label>
                                    <div class="text-light" id="gender-value">Not specified</div>
                                </div>
                                <div data-bs-toggle="tooltip" title="Edit">
                                    <a class="nav-link nav-link-light py-0" href="#gender-collapse" data-bs-toggle="collapse">
                                        <i class="fi-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="gender-collapse" data-bs-parent="#personal-info">
                                <select class="form-select form-select-light mt-3" data-bs-binded-element="#gender-value">
                                    <option value="" disabled selected>Select your gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <!-- Email-->
                        <div class="border-bottom border-light pb-3 mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pe-2 opacity-70">
                                    <label class="form-label fw-bold text-light">Email</label>
                                    <div class="text-light" id="email-value">robert_fox@email.com</div>
                                </div>
                                <div data-bs-toggle="tooltip" title="Edit">
                                    <a class="nav-link nav-link-light py-0" href="#email-collapse" data-bs-toggle="collapse">
                                        <i class="fi-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="email-collapse" data-bs-parent="#personal-info">
                                <input class="form-control form-control-light mt-3" type="email" data-bs-binded-element="#email-value" data-bs-unset-value="Not specified" value="robert_fox@email.com">
                            </div>
                        </div>
                        <!-- Phone number-->
                        <div class="border-bottom border-light pb-3 mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pe-2 opacity-70">
                                    <label class="form-label fw-bold text-light">Phone number</label>
                                    <div class="text-light" id="phone-value">(302) 555-0107</div>
                                </div>
                                <div data-bs-toggle="tooltip" title="Edit">
                                    <a class="nav-link nav-link-light py-0" href="#phone-collapse" data-bs-toggle="collapse">
                                        <i class="fi-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="phone-collapse" data-bs-parent="#personal-info">
                                <input class="form-control form-control-light mt-3" type="text" data-bs-binded-element="#phone-value" data-bs-unset-value="Not specified" value="(302) 555-0107">
                            </div>
                        </div>
                        <!-- Address-->
                        <div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pe-2 opacity-70">
                                    <label class="form-label fw-bold text-light">Address</label>
                                    <div class="text-light" id="address-value">Not specified</div>
                                </div>
                                <div data-bs-toggle="tooltip" title="Edit">
                                    <a class="nav-link nav-link-light py-0" href="#address-collapse" data-bs-toggle="collapse">
                                        <i class="fi-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="address-collapse" data-bs-parent="#personal-info">
                                <input class="form-control form-control-light mt-3" type="text" data-bs-binded-element="#address-value" data-bs-unset-value="Not specified" placeholder="Enter address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-4 mb-4">
                    <file-pond class="file-uploader border-light bg-faded-light pt-5 pb-4" v-model="FilePond" labelIdle='<i class="d-inline-block fi-camera-plus fs-2 text-light text-muted mb-2"></i><br><span class="fw-bold text-light opacity-70">Change picture</span>' accepted-file-types="image/jpeg, image/png" />
                    <div class="pt-4 pb-2 py-lg-5">
                        <h6 class="text-light mb-2">Who can see my profile?</h6>
                        <p class="fs-sm text-light opacity-70 mb-0">Your profile is private. No one else will see it untill a reservation is confirmed.</p>
                    </div>
                </div>
            </div>
            <!-- Action buttons-->
            <div class="row">
                <div class="col-lg-9">
                    <div class="d-flex align-items-center justify-content-between pb-1">
                        <button class="btn btn-primary" type="button">Save changes</button>
                        <button class="btn btn-link btn-light btn-sm px-0" type="button">
                            <i class="fi-trash me-2"></i>Delete account
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
