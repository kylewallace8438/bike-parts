<script lang="ts" setup>
document.body.classList.add("bg-dark")
</script>
<template>
    <main class="page-wrapper">
        <!-- Page content-->
        <div class="container-fluid d-flex h-100 align-items-center justify-content-center py-4 py-sm-5">
            <div class="card card-light card-body" style="max-width: 940px">
                <a class="position-absolute top-0 end-0 nav-link-light fs-sm py-1 px-2 mt-3 me-3" href="javascript:void(0);" onclick="window.history.go(-1); return false;">
                    <i class="fi-arrow-long-left fs-base me-2"></i>Go back
                </a>
                <div class="row mx-0 align-items-center">
                    <div class="col-md-6 border-end-md border-light p-2 p-sm-5">
                        <h2 class="h3 text-light mb-4 mb-sm-5">Hey there!<br>Welcome back.</h2>
                        <img class="d-block mx-auto" src="@/assets/img/signin-modal/signin-dark.svg" width="344" alt="Illustartion">
                        <div class="text-light mt-4 mt-sm-5">
                            <span class="opacity-60">Don't have an account? </span>
                            <router-link class="text-light" to="/signup-dark">Sign up here</router-link>
                        </div>
                    </div>
                    <div class="col-md-6 px-2 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                        <a class="btn btn-outline-info w-100 mb-3" href="javascript:void(0);">
                            <i class="fi-google fs-lg me-1"></i>Sign in with Google
                        </a>
                        <a class="btn btn-outline-info w-100 mb-3" href="javascript:void(0);">
                            <i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook
                        </a>
                        <div class="d-flex align-items-center py-3 mb-3">
                            <hr class="hr-light w-100">
                            <div class="text-light opacity-70 px-3">Or</div>
                            <hr class="hr-light w-100">
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="mb-4">
                                <label class="form-label text-light mb-2" for="signin-email">Email address</label>
                                <input class="form-control form-control-light" type="email" id="signin-email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <label class="form-label text-light mb-0" for="signin-password">Password</label>
                                    <a class="fs-sm text-light" href="javascript:void(0);">Forgot password?</a>
                                </div>
                                <div class="password-toggle">
                                    <input class="form-control form-control-light" type="password" id="signin-password" placeholder="Enter password" required>
                                    <label class="password-toggle-btn" aria-label="Show/hide password">
                                        <input class="password-toggle-check" type="checkbox">
                                        <span class="password-toggle-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg w-100" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>