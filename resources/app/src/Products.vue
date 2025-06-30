<template>
     <!-- Begin Uren's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Shop</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Shop Left Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Uren's Breadcrumb Area End Here -->

        <!-- Begin Uren's Shop Left Sidebar Area -->
        <div class="shop-content_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-5 order-2 order-lg-1 order-md-1">
                        <div class="uren-sidebar-catagories_area">
                            <div class="category-module uren-sidebar_categories">
                                <div class="category-module_heading">
                                    <h5>Danh mục hàng</h5>
                                </div>
                                <div class="module-body">
                                    <ul class="module-list_item">
                                        <li>
                                            <a href="javascript:void(0)">Xe naked<span>(12)</span></a>
                                            <a href="javascript:void(0)">Xe ADV <span>(0)</span></a>
                                            <a href="javascript:void(0)">Xe Sport <span>(0)</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uren-sidebar_categories">
                                <div class="uren-categories_title">
                                    <h5>Khoảng giá</h5>
                                </div>
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <label>Giá : </label>
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <!-- <button type="button">Filter</button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="uren-sidebar_categories">
                                <div class="uren-categories_title">
                                    <h5>Màu sắc</h5>
                                </div>
                                <ul class="sidebar-checkbox_list">
                                    <li>
                                        <a href="javascript:void(0)">Black <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Blue <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Red <span>(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Yellow <span>(0)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="uren-sidebar_categories">
                                <div class="uren-categories_title">
                                    <h5>Nhà sản xuất</h5>
                                </div>
                                <ul class="sidebar-checkbox_list">
                                    <li>
                                        <a href="javascript:void(0)">Hàng hãng <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Hàng Trung Quốc <span>(2)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-banner_area">
                            <div class="banner-item img-hover_effect">
                                <a href="javascript:void(0)">
                                    <img :src="`/assets/images/shop/1.jpg`" alt="Uren's Shop Banner Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7 order-1 order-lg-2 order-md-2">
                        <div class="shop-toolbar">
                            <!-- <div class="product-view-mode">
                                <a class="grid-1" data-target="gridview-1" data-toggle="tooltip" data-placement="top" title="1">1</a>
                                <a class="grid-2" data-target="gridview-2" data-toggle="tooltip" data-placement="top" title="2">2</a>
                                <a class="grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="3">3</a>
                                <a class="grid-4" data-target="gridview-4" data-toggle="tooltip" data-placement="top" title="4">4</a>
                                <a class="grid-5" data-target="gridview-5" data-toggle="tooltip" data-placement="top" title="5">5</a>
                                <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List"><i class="fa fa-th-list"></i></a>
                            </div> -->
                            <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">Lọc theo:</label>
                                    <select class="myniceselect nice-select">
                                        <option value="1">Default</option>
                                        <option value="2">Name, A to Z</option>
                                        <option value="3">Name, Z to A</option>
                                        <option value="4">Price, low to high</option>
                                        <option value="5">Price, high to low</option>
                                        <option value="5">Rating (Highest)</option>
                                        <option value="5">Rating (Lowest)</option>
                                        <option value="5">Model (A - Z)</option>
                                        <option value="5">Model (Z - A)</option>
                                    </select>
                                </div>
                                <!-- <div class="product-showing">
                                    <label class="select-label">Show:</label>
                                    <select class="myniceselect short-select nice-select">
                                        <option value="1">15</option>
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                    </select>
                                </div> -->
                            </div>
                        </div>
                        <div class="shop-product-wrap grid gridview-4 img-hover-effect_area row">
                            <div class="col-lg-4" v-for="(product, index) in products" :key="index">
                                <div class="product-slide_item">
                                    <div class="inner-slide">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" :src="product.featuredImage?.url" alt="Uren's Product Image">
                                                    <!-- <img class="secondary-img" :src="`/assets/images/product/large-size/2.jpg`" alt="Uren's Product Image"> -->
                                                </a>
                                                <div class="sticker">
                                                    <span class="sticker">New</span>
                                                </div>
                                                <div class="add-actions mt-2">
                                                    <ul>
                                                        <!-- <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                                            class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                        <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                            class="ion-android-options"></i></a>
                                                        </li> -->
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Xem nhanh"><i
                                                            class="ion-android-open"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content mt-2">
                                                <div class="product-desc_info">
                                                    <!-- <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li class="silver-color"><i class="ion-android-star"></i>
                                                            </li>
                                                            <li class="silver-color"><i class="ion-android-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div> -->
                                                    <h6><a class="product-name" href="single-product.html">{{ product.title }}</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">{{ product.priceRange.minVariantPrice.amount }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="uren-paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="uren-pagination-box primary-color">
                                                <li><a class="Previous" href="javascript:void(0)" @click="goBack()">Trang trước</a></li>
                                                <li><a class="Next" href="javascript:void(0)" @click="goNext()">Trang sau</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Shop Left Sidebar Area End Here -->
</template>
<script>
import axios from '@/api/axios';

export default {
    data() {
        return {
            products: [],
            pageInfo: {
                endCursor: null,
                hasNextPage: false,
                hasPreviousPage: false,
                startCursor: null
            }
        }
    },
    methods: {
        getProducts(pageInfo = null) {
            axios.get('products', {
                params: pageInfo
            })
                .then(response => {
                    this.products = response.data.data.map(item => {
                        return item.node
                    });
                    this.pageInfo = response.data.pageInfo;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        goNext() {
            if (!this.pageInfo.hasNextPage) {
                return
            }
            this.getProducts({
                endCursor: this.pageInfo.endCursor
            })
        },
        goBack() {
            if (!this.pageInfo.hasPreviousPage) {
                return
            }
            this.getProducts({
                startCursor: this.pageInfo.startCursor
            })
        },
    },
    mounted() {
        this.getProducts()
    },
}
</script>
<style scoped lang="scss">
.uren-pagination-box {
    a.disabled {
        pointer-events: none;
    }
}
</style>
