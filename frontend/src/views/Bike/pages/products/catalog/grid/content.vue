<script  setup>
import { ref } from 'vue';
import simplebar from 'simplebar-vue';
import 'simplebar/dist/simplebar.min.css';
import "@vueform/slider/themes/default.css";
import { onMounted } from 'vue';
import axios from "axios";
import { useRouter } from 'vue-router';
import LoadingComponent from '@/components/LoadingComponent.vue';
import { mixins } from '@/mixins'
const router = useRouter();
const products = ref([]);
const loading = ref(true);
const { formatMoney, getIdFromGid } = mixins();
const pagination = ref({
    endCursor: null,
    hasNextPage: false,
    hasPreviousPage: false,
    startCursor: null
})
const fetchProducts = async (startCursor = null, endCursor = null) => {
    loading.value = true
    try {
        let params = {}
        if (startCursor) {
            params.startCursor = startCursor
        }
        if (endCursor) {
            params.endCursor = endCursor
        }
        await axios.get('/api/products', {
            params: params
         }).then((response) => {
            console.log(response)
            if (response.status == 200 && response.data.data) {
                products.value = response.data.data
                const pageInfo = response.data.pageInfo;
                pagination.value = pageInfo
            }
        });
    } catch (error) {
        console.log(error)
    } finally {
        loading.value = false
    }
}
onMounted(() => {
  fetchProducts()
})
const gotoProduct = function (item) {
    router.push({
        name: 'product-detail',
        params: {
            id: getIdFromGid(item.node.id)
        }
    })
}
const handleGoPrevious = function () {
    fetchProducts(pagination.value.startCursor, null)
}
const handleGoNext = function () {
    fetchProducts(null, pagination.value.endCursor)
}
</script>
<style>
.slider-connect {
    background: #fd5631;
    border-color: #fd5631;
}
.slider-tooltip {
    padding: .25rem .5rem;
    border: 1px solid #efecf3;
    border-radius: 50rem;
    background-color: #fff;
    color: #454056;
    font-size: .75rem;
    line-height: 1.2;
    box-shadow: 0 .125rem .125rem -0.125rem rgba(31, 27, 45, .08), 0 .25rem .75rem rgba(31, 27, 45, .08);
}

.loader-container {
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
}
.loader-container.--spinning-dots {
    --loader-size: 60px;
    --loader-color-primary: #007bff;
    --loader-dot-size: 10px;
    --loader-speed: 1.2s;
    position: relative;
    width: var(--loader-size);
    height: var(--loader-size);
}

.loader-container.--spinning-dots .dot {
    position: absolute;
    width: var(--loader-dot-size);
    height: var(--loader-dot-size);
    border-radius: 50%;
    background-color: var(--loader-color-primary);
    animation: spinDots var(--loader-speed) infinite ease-in-out;
}

.loader-container.--spinning-dots .dot1 {
    top: 0;
    left: 50%;
    margin-left: calc(var(--loader-dot-size) / -2);
    animation-delay: 0s;
}

.loader-container.--spinning-dots .dot2 {
    top: 50%;
    right: 0;
    margin-top: calc(var(--loader-dot-size) / -2);
    animation-delay: calc(var(--loader-speed) / 3);
}

.loader-container.--spinning-dots .dot3 {
    bottom: 0;
    left: 50%;
    margin-left: calc(var(--loader-dot-size) / -2);
    animation-delay: calc(var(--loader-speed) / 3 * 2);
}

</style>
<template>
    <!-- Page container-->
    <div class="container mt-5 mb-md-4 py-5">
        <div class="row py-md-1">
            <!-- Filers sidebar (Offcanvas on mobile)-->
            <div class="col-lg-3 pe-xl-4">
                <div class="offcanvas-lg offcanvas-start bg-dark" id="filters-sidebar">
                    <div class="offcanvas-header bg-transparent d-flex d-lg-none align-items-center">
                        <h2 class="h5 text-light mb-0">Bộ lọc</h2>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas"
                            data-bs-target="#filters-sidebar"></button>
                    </div>
                    <!-- <div class="offcanvas-header bg-transparent d-block border-bottom border-light pt-0 pt-lg-4 px-lg-0">
                        <ul class="nav nav-tabs nav-tabs-light mb-0">
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Search New</a></li>
                            <li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Search Used</a></li>
                        </ul>
                    </div> -->
                    <div class="offcanvas-body py-lg-4">
                        <div class="pb-4 mb-2">
                            <input class="form-control" type="email" id="signin-email" placeholder="Tìm kiếm" />
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light">Kiểu xe</h3>
                            <simplebar class="overflow-auto simplebar-wrapper" data-simplebar
                                data-simplebar-auto-hide="false" data-simplebar-inverse>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="naked">
                                    <label class="form-check-label fs-sm" for="naked">Naked</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="sport">
                                    <label class="form-check-label fs-sm" for="sport">Sport</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="adv">
                                    <label class="form-check-label fs-sm" for="adv">ADV</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="dirtbike">
                                    <label class="form-check-label fs-sm" for="dirtbike">Cào cào</label>
                                </div>

                            </simplebar>
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light pt-1">Năm sản xuất</h3>
                            <div class="d-flex align-items-center">
                                <select class="form-select form-select-light w-100">
                                    <option value="" disabled selected>Năm</option>
                                    <option :value="year" v-for="(year, index) in manufactureYears" :key="index">{{ year
                                        }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light">Hãng</h3>
                            <select class="form-select form-select-light mb-2">
                                <option value="" disabled selected>Chọn hãng</option>
                                <option value="KTM">KTM</option>
                                <option value="Husqvana">Husqvana</option>
                            </select>
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light">Mẫu xe</h3>
                            <select class="form-select form-select-light mb-2">
                                <option value="" disabled selected>Chọn mẫu</option>
                                <option value="Duke">Duke</option>
                                <option value="RC">RC</option>
                                <option value="ADV">ADV</option>
                                <option value="Svartpilen">Svartpilen</option>
                                <option value="Vitpilen">Vitpilen</option>
                            </select>
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6 text-light">Màu</h3>
                            <simplebar class="overflow-auto" data-simplebar data-simplebar-auto-hide="false"
                                data-simplebar-inverse style="height: 11rem;">
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="amber">
                                    <label class="form-check-label fs-sm" for="amber">Cam</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="white">
                                    <label class="form-check-label fs-sm" for="white">Trắng</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="black">
                                    <label class="form-check-label fs-sm" for="black">Đen</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="grey">
                                    <label class="form-check-label fs-sm" for="grey">Xám</label>
                                </div>
                            </simplebar>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Catalog grid view-->
            <div class="col-lg-9">
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-2 pt-lg-4" aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><router-link to="/">Trang chủ</router-link></li>
                        <li class="breadcrumb-item active" aria-current="page">Tìm phụ tùng</li>
                    </ol>
                </nav>
                <!-- Page title-->
                <div class="d-flex align-items-center justify-content-between pb-4 mb-2">
                    <h1 class="text-light me-3 mb-0">Tìm phụ tùng</h1>
                </div>
                <!-- Sorting + View-->
                <div class="d-sm-flex align-items-center justify-content-between pb-4 mb-2">
                    <!-- <div class="d-none d-sm-flex">
                        <router-link class="nav-link nav-link-light px-2 active" to="/car-finder-catalog-list"
                            data-bs-toggle="tooltip" title="List view">
                            <i class="fi-list"></i>
                        </router-link>
                        <router-link class="nav-link nav-link-light px-2" to="/car-finder-catalog-grid"
                            data-bs-toggle="tooltip" title="Grid view">
                            <i class="fi-grid"></i>
                        </router-link>
                    </div> -->
                </div>
                <div class="row" v-if="products.length > 0 && !loading">
                    <!-- Item-->
                    <div class="col-sm-3 mb-4" v-for="(product, index) in products" :key="index">
                        <div class="card card-light card-hover h-100">
                            <div class="tns-carousel-wrapper card-img-top card-img-hover">
                                <a class="img-overlay" href="javascript:void(0)" @click="gotoProduct(product)"></a>
                                <!-- <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                    <span class="d-table badge bg-info">Used</span>
                                </div> -->
                                <!-- <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                        <i class="fi-heart"></i>
                                    </button>
                                </div> -->
                               <img :src="product.node.featuredImage?.url ?? 'https://placehold.co/600x400'" alt="Image">
                            </div>
                            <div class="card-body">
                                <h3 class="h6 mb-1">
                                    <router-link class="nav-link-light" to="/car-finder-single">{{product.node.title}}</router-link>
                                </h3>
                                <div class="text-primary fw-bold mb-1">{{ product.node.priceRange.maxVariantPrice.amount == 0 ? 'Liên hệ' : formatMoney(product.node.priceRange.maxVariantPrice.amount) }}</div>
                                <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Hà Nội</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" v-else-if="loading" style="height: 100vh">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <LoadingComponent />
                    </div>
                </div>
                <div class="row" v-else>
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <h6 class="text-white">Không tìm thấy phụ tùng</h6>
                    </div>
                </div>
                <!-- Sorting + Pagination-->
                <div class="d-flex align-items-center justify-content-between py-2" v-if="products.length > 0">
                    <nav aria-label="Pagination">
                        <ul class="pagination pagination-light mb-0">
                            <li class="page-item">
                                <button class="page-link" :disabled="!pagination.hasPreviousPage" aria-label="Previous" @click="handleGoPrevious"><i class="fi-chevron-left"></i>Trước</button>
                            </li>
                            <li class="page-item">
                                <button class="page-link" :disabled="!pagination.hasNextPage" aria-label="Next" @click="handleGoNext">Sau<i class="fi-chevron-right"></i></button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>
