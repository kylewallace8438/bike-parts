<template>
    <!-- Breadcrumb-->
    <div class="container mt-5 pt-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
            <ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>

    <!-- Page header-->
    <section class="container mb-5 pb-lg-5">
        <div class="row align-items-center justify-content-lg-start justify-content-center flex-lg-nowrap gy-4">
            <div class="col-lg-9"><img class="rounded-3" src="@/assets/img/car-finder/about/hero-img.jpg" alt="Hero image"></div>
            <div class="col-lg-4 ms-lg-n5 col-sm-9 text-lg-start text-center">
                <div class="ms-lg-n5 pe-xl-5">
                    <h1 class="mb-lg-4 text-light">About us</h1>
                    <p class="mb-4 pb-lg-3 fs-lg text-light opacity-70">We believe that car buying and selling should be straight-forward and enjoyable, not time-consuming, complicated or stressful.</p><router-link class="btn btn-lg btn-primary w-sm-auto w-100" to="/car-finder-catalog-list"><i class="fi-search me-2"></i>Search car</router-link>
                </div>
            </div>
        </div>
    </section>
</template>