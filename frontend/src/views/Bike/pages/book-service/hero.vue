<script setup>
import Hero from '@/assets/img/car-finder/home/hero-bg.png';
import { ref } from 'vue';
import { useI18n } from 'vue-i18n';
import { useRouter } from 'vue-router';

const router = useRouter();

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
const selectedTab = ref('parts');
const models = ref([]);

const selectMake = (make) => {
  selectedMake.value = make;
  models.value = makes.find(item => item.slug === make.slug).models;
}

const selectModel = (model) => {
  selectedModel.value = model;
}

const searchBike = () => {
  router.push({
    name: "find-bikes",
    query: {
        make: selectedMake.value.slug,
        model: selectedModel.value.slug,
    }
  })
}

const switchNav = (type) => {
  if (type === 'parts') {
    selectedTab.value = 'parts';
  } else {
    selectedTab.value = 'lookup';
  }
}
</script>
<template>
  <!-- Hero-->
  <div class="container mt-5 mt-sm-3 pb-5 mb-md-4" style="margin-top: 100px !important;">
      <!-- Tabs-->
      <ul class="nav nav-tabs nav-tabs-light mb-4">
        <li class="nav-item"><a class="nav-link" :class="{'active': selectedTab == 'parts'}" href="javascript:void(0);" @click="switchNav('parts')">Tìm phụ tùng</a></li>
        <li class="nav-item"><a class="nav-link" :class="{'active': selectedTab == 'lookup'}" href="javascript:void(0);" @click="switchNav('lookup')">Tra cứu</a></li>
      </ul>
      <!-- Form group-->
      <form class="form-group form-group-light d-block" v-if="selectedTab == 'parts'" @submit.prevent>
        <div class="row g-0 ms-lg-n2">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="dropdown border-end-sm border-light" data-bs-toggle="select">
              <input type="text" class="form-control form-control-light" placeholder="Từ khoá" aria-label="Search" />
            </div>
          </div>
          <hr class="hr-light d-sm-none my-2">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="dropdown border-end-sm border-light" data-bs-toggle="select">
              <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">{{ selectedMake ? selectedMake?.name : $t('searchText.make') }}</span></button>
              <input type="hidden" name="make">
              <ul class="dropdown-menu dropdown-menu-dark">
                <li v-for="(make, index) in makes" :key="index" @click="selectMake(make)"><a class="dropdown-item" href="javascript:void(0);"><span class="dropdown-item-label">{{ make.name }}</span></a></li>
              </ul>
            </div>
          </div>
          <hr class="hr-light d-sm-none my-2">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="dropdown border-end-md border-light" data-bs-toggle="select">
              <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown" :disabled="!selectedMake"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">{{ selectedModel ? selectedModel.name : $t('searchText.model') }}</span></button>
              <input type="hidden" name="model">
              <ul class="dropdown-menu dropdown-menu-dark">
                <li v-for="(model, index) in models" :key="index"  @click="selectModel(model)"><a class="dropdown-item" href="javascript:void(0);"><span class="dropdown-item-label">{{ model.name }}</span></a></li>
              </ul>
            </div>
          </div>
          <hr class="hr-light d-md-none my-2">
          <div class="col-lg-3">
            <button class="btn btn-primary w-100" type="submit" @click="searchBike" :disabled="!selectedModel && !selectedMake">{{ $t('searchText.searchBtn') }}</button>
          </div>
        </div>
      </form>
      <form class="form-group form-group-light d-block" v-if="selectedTab == 'lookup'" @submit.prevent>
        <div class="row g-0 ms-lg-n2">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="dropdown border-end-sm border-light" data-bs-toggle="select">
              <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">{{ selectedMake ? selectedMake?.name : $t('searchText.make') }}</span></button>
              <input type="hidden" name="make">
              <ul class="dropdown-menu dropdown-menu-dark">
                <li v-for="(make, index) in makes" :key="index" @click="selectMake(make)"><a class="dropdown-item" href="javascript:void(0);"><span class="dropdown-item-label">{{ make.name }}</span></a></li>
              </ul>
            </div>
          </div>
          <hr class="hr-light d-sm-none my-2">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="dropdown border-end-md border-light" data-bs-toggle="select">
              <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown" :disabled="!selectedMake"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">{{ selectedModel ? selectedModel.name : $t('searchText.model') }}</span></button>
              <input type="hidden" name="model">
              <ul class="dropdown-menu dropdown-menu-dark">
                <li v-for="(model, index) in models" :key="index"  @click="selectModel(model)"><a class="dropdown-item" href="javascript:void(0);"><span class="dropdown-item-label">{{ model.name }}</span></a></li>
              </ul>
            </div>
          </div>
          <hr class="hr-light d-md-none my-2">
          <div class="col-lg-4">
            <button class="btn btn-primary w-100" @click="searchBike" :disabled="!selectedModel && !selectedMake">{{ $t('searchText.searchBtn') }}</button>
          </div>
        </div>
      </form>
    </div>
</template>
