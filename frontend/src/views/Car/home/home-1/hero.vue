<script lang="ts" setup>
import Hero from '@/assets/img/car-finder/home/hero-bg.png';
import { ref } from 'vue';
import { useI18n } from 'vue-i18n';

const { t } = useI18n();

const makes = [
  {
    name: 'KTM',
    slug: 'ktm',
    models: [
      {
        name: 'Duke',
        slug: 'duke',
      },
      {
        name: 'RC',
        slug: 'rc',
      },
      {
        name: 'Adventure',
        slug: 'adventure',
      },
    ],
  },
  {
    name: 'Husqvarna',
    slug: 'husqvarna',
    models: [
      {
        name: 'Svartpilen',
        slug: 'svartpilen',
      },
      {
        name: 'Vitpilen',
        slug: 'vitpilen',
      },
    ],
  },
]

const selectedMake = ref(null);
const selectedModel = ref(null);
const models = ref([]);

const selectMake = (make) => {
  selectedMake.value = make;
  models.value = makes.find(item => item.slug === make.slug).models;
}

const selectModel = (model) => {
  selectedModel.value = model;
}

const searchBike = () => {
  const formData = {
    make: selectedMake.value.slug,
    model: selectedModel.value.slug,
  }
}

const switchNav = (type) => {
  if (type === 'bike') {
    console.log(type);
  } else {
    console.log(type)
  }
}
</script>
<template>
  <!-- Hero-->
  <section class="bg-position-top-center bg-repeat-0 pt-5" :style="{ 'background-image': `url(${Hero})`, 'backgroundSize': '1920px 630px' }">
    <div class="container pt-5">
      <div class="row pt-lg-4 pt-xl-5">
        <div class="col-lg-4 col-md-5 pt-3 pt-md-4 pt-lg-5">
          <h1 class="display-4 text-light pb-2 mb-4 me-md-n5">{{ $t('homeText.title') }}</h1>
          <p class="fs-lg text-light opacity-70">{{ $t('homeText.description') }}</p>
        </div>
        <div class="col-lg-8 col-md-7 pt-md-5"><img class="d-block mt-4 ms-auto" src="@/assets/img/bike/ktm_bg.png" width="800" alt="Car"></div>
      </div>
    </div>
    <div class="container mt-4 mt-sm-3 mt-lg-n3 pb-5 mb-md-4">
      <!-- Tabs-->
      <ul class="nav nav-tabs nav-tabs-light mb-4">
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);" @click="switchNav('bike')">{{ $t('homeText.findBike') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" @click="switchNav('sparePart')">{{ $t('homeText.findSparePart') }}</a></li>
      </ul>
      <!-- Form group-->
      <form class="form-group form-group-light d-block">
        <div class="row g-0 ms-lg-n2">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="dropdown border-end-sm border-light" data-bs-toggle="select">
              <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">{{ selectedMake ? selectedMake.name : $t('searchText.make') }}</span></button>
              <input type="hidden" name="make">
              <ul class="dropdown-menu dropdown-menu-dark">
                <li v-for="(make, index) in makes" :key="index"><a class="dropdown-item" href="javascript:void(0);"><span class="dropdown-item-label" @click="selectMake(make)">{{ make.name }}</span></a></li>
              </ul>
            </div>
          </div>
          <hr class="hr-light d-sm-none my-2">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="dropdown border-end-md border-light" data-bs-toggle="select">
              <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">{{ selectedModel ? selectedModel.name : $t('searchText.model') }}</span></button>
              <input type="hidden" name="model">
              <ul class="dropdown-menu dropdown-menu-dark">
                <li v-for="(model, index) in models" :key="index"><a class="dropdown-item" href="javascript:void(0);"><span class="dropdown-item-label" @click="selectModel(model)">{{ model.name }}</span></a></li>
              </ul>
            </div>
          </div>
          <hr class="hr-light d-md-none my-2">
          <div class="col-lg-4">
            <button class="btn btn-primary w-100" type="submit" @click="searchBike">{{ $t('searchText.searchBtn') }}</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</template>
