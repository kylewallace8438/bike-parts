<template>
  <!-- Body type selection-->
  <section class="container pb-5 mb-md-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-sm-2">
      <h2 class="h3 text-light mb-2 mb-sm-0">Popular car body types</h2><router-link class="btn btn-link btn-light fw-normal px-0" to="/car-finder-catalog-grid">View all<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></router-link>
    </div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-2 g-md-4">
      <!-- Item-->
      <div class="col">
        <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="@/assets/img/car-finder/icons/sedan.svg" width="160" alt="Sedan"><router-link class="nav-link-light stretched-link fw-bold" to="/car-finder-catalog-list">Sedan</router-link></div>
      </div>
      <!-- Item-->
      <div class="col">
        <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="@/assets/img/car-finder/icons/suv.svg" width="160" alt="SUV"><router-link class="nav-link-light stretched-link fw-bold" to="/car-finder-catalog-grid">SUV</router-link></div>
      </div>
      <!-- Item-->
      <div class="col">
        <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="@/assets/img/car-finder/icons/wagon.svg" width="160" alt="Wagon"><router-link class="nav-link-light stretched-link fw-bold" to="/car-finder-catalog-list">Wagon</router-link></div>
      </div>
      <!-- Item-->
      <div class="col">
        <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="@/assets/img/car-finder/icons/crossover.svg" width="160" alt="Crossover"><router-link class="nav-link-light stretched-link fw-bold" to="/car-finder-catalog-grid">Crossover</router-link></div>
      </div>
      <!-- Item-->
      <div class="col">
        <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="@/assets/img/car-finder/icons/coupe.svg" width="160" alt="Coupe"><router-link class="nav-link-light stretched-link fw-bold" to="/car-finder-catalog-list">Coupe</router-link></div>
      </div>
      <!-- Item-->
      <div class="col">
        <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="@/assets/img/car-finder/icons/pickup.svg" width="160" alt="Pickup"><router-link class="nav-link-light stretched-link fw-bold" to="/car-finder-catalog-grid">Pickup</router-link></div>
      </div>
      <!-- Item-->
      <div class="col">
        <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="@/assets/img/car-finder/icons/sport.svg" width="160" alt="Sport Coupe"><router-link class="nav-link-light stretched-link fw-bold" to="/car-finder-catalog-list">Sport Coupe</router-link></div>
      </div>
      <!-- Item-->
      <div class="col">
        <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="@/assets/img/car-finder/icons/compact.svg" width="160" alt="Compact"><router-link class="nav-link-light stretched-link fw-bold" to="/car-finder-catalog-grid">Compact</router-link></div>
      </div>
      <!-- Item-->
      <div class="col">
        <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="@/assets/img/car-finder/icons/convertible.svg" width="160" alt="Convertible"><router-link class="nav-link-light stretched-link fw-bold" to="/car-finder-catalog-list">Convertible</router-link></div>
      </div>
      <!-- Item-->
      <div class="col">
        <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="@/assets/img/car-finder/icons/mpv.svg" width="160" alt="Family MPV"><router-link class="nav-link-light stretched-link fw-bold" to="/car-finder-catalog-grid">Family MPV</router-link></div>
      </div>
    </div>
  </section>
</template>
