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
                                    <i class="fi-phone opacity-60 me-2"></i>(302) 555-0107</a></li>
                            <li><a class="nav-link-light fw-normal" href="mailto:robert_fox@email.com">
                                    <i class="fi-mail opacity-60 me-2"></i>robert_fox@email.com</a>
                            </li>
                        </ul>
                    </div>
                </div><router-link class="btn btn-primary btn-lg w-100 mb-3" to="/car-finder-sell-car">
                    <i class="fi-plus me-2"></i>Sell car
                </router-link>
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
                        <router-link class="card-nav-link active" to="/car-finder-account-reviews">
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
            <h1 class="h2 text-light">Reviews</h1>
            <p class="text-light pt-1 mb-4">Reviews you’ve received will be visible both here and on your public profile.</p>
            <!-- Nav tabs-->
            <ul class="nav nav-tabs nav-tabs-light flex-column flex-sm-row align-items-stretch align-items-sm-start border-bottom border-light mb-4" role="tablist">
                <li class="nav-item me-sm-3 mb-3">
                    <a class="nav-link text-center active" href="#reviews-about-you" data-bs-toggle="tab" role="tab" aria-controls="reviews-about-you" aria-selected="true">Reviews about you</a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link text-center" href="#reviews-by-you" data-bs-toggle="tab" role="tab" aria-controls="reviews-by-you" aria-selected="false">Reviews by you</a>
                </li>
            </ul>
            <!-- Tabs content-->
            <div class="tab-content pt-2">
                <!-- Reviews about you tab-->
                <div class="tab-pane fade show active" id="reviews-about-you" role="tabpanel">
                    <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch justify-content-between pb-4 mb-2 mb-md-3">
                        <h3 class="h4 mb-sm-0">
                            <i class="fi-star-filled mt-n1 me-2 lead align-middle text-warning"></i>
                            <span class="text-light">4,9 (32 reviews)</span>
                        </h3>
                        <div class="d-flex align-items-center ms-sm-4">
                            <label class="fs-sm text-light me-2 pe-1 text-nowrap" for="review-sorting1">
                                <i class="fi-arrows-sort mt-n1 me-2"></i>Sort by:</label>
                            <select class="form-select form-select-light form-select-sm" id="review-sorting1">
                                <option>Newest</option>
                                <option>Oldest</option>
                                <option>Popular</option>
                                <option>High rating</option>
                                <option>Low rating</option>
                            </select>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="mb-4 pb-4 border-bottom border-light">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="d-flex align-items-center pe-2">
                                <img class="rounded-circle me-1" src="@/assets/img/avatars/06.jpg" width="48" alt="Avatar">
                                <div class="ps-2">
                                    <h6 class="fs-base text-light mb-0">Kathryn Murphy</h6>
                                    <div class="text-light"><span class="star-rating">
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><span class="text-light fs-sm opacity-50">Jan 17, 2021</span>
                        </div>
                        <p class="text-light opacity-70">Elementum ut quam tincidunt egestas vitae elit, hendrerit. Ullamcorper nulla amet lobortis elit, nibh condimentum enim. Aliquam felis nisl tellus sodales lectus dictum tristique proin vitae. Odio fermentum viverra tortor quis.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn-like btn-light" type="button">
                                <i class="fi-like"></i><span>(3)</span>
                            </button>
                            <div class="border-end border-light me-1">&nbsp;</div>
                            <button class="btn-dislike btn-light" type="button">
                                <i class="fi-dislike"></i><span>(0)</span>
                            </button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="mb-4 pb-4 border-bottom border-light">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="d-flex align-items-center pe-2">
                                <img class="rounded-circle me-1" src="@/assets/img/avatars/14.png" width="48" alt="Avatar">
                                <div class="ps-2">
                                    <h6 class="fs-base text-light mb-0">Darrell Steward</h6>
                                    <div class="text-light">
                                        <span class="star-rating">
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-half active"></i>
                                            <i class="star-rating-icon fi-star"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><span class="text-light fs-sm opacity-50">Dec 1, 2020</span>
                        </div>
                        <p class="text-light opacity-70">Vel dictum nunc ut tristique. Egestas diam amet, ut proin hendrerit. Dui accumsan at phasellus tempus consequat dignissim tellus sodales.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn-like btn-light" type="button">
                                <i class="fi-like"></i><span>(0)</span>
                            </button>
                            <div class="border-end border-light me-1">&nbsp;</div>
                            <button class="btn-dislike btn-light" type="button">
                                <i class="fi-dislike"></i><span>(1)</span>
                            </button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="mb-4 pb-4 border-bottom border-light">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="d-flex align-items-center pe-2">
                                <img class="rounded-circle me-1" src="@/assets/img/avatars/05.jpg" width="48" alt="Avatar">
                                <div class="ps-2">
                                    <h6 class="fs-base text-light mb-0">Floyd Miles</h6>
                                    <div class="text-light"><span class="star-rating">
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><span class="text-light fs-sm opacity-50">Oct 28, 2020</span>
                        </div>
                        <p class="text-light opacity-70">Viverra nunc blandit sapien non imperdiet sit. Purus tempus elementum aliquam eu urna. A aenean duis non egestas at libero porttitor integer eget. Sed dictum lobortis laoreet gravida.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn-like btn-light" type="button">
                                <i class="fi-like"></i><span>(2)</span>
                            </button>
                            <div class="border-end border-light me-1">&nbsp;</div>
                            <button class="btn-dislike btn-light" type="button">
                                <i class="fi-dislike"></i><span>(1)</span>
                            </button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="mb-4 pb-4 border-bottom border-light">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="d-flex align-items-center pe-2">
                                <img class="rounded-circle me-1" src="@/assets/img/avatars/04.jpg" width="48" alt="Avatar">
                                <div class="ps-2">
                                    <h6 class="fs-base text-light text-light mb-0">Ralph Edwards</h6>
                                    <div class="text-light"><span class="star-rating">
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star-filled active"></i>
                                            <i class="star-rating-icon fi-star"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><span class="text-light fs-sm opacity-50">Sep 14, 2020</span>
                        </div>
                        <p class="text-light opacity-70">Elementum nisl, egestas nam consectetur nisl, at pellentesque cras. Non sed ac vivamus dolor dignissim ut. Nisl sapien blandit pulvinar sagittis donec sociis ipsum arcu est. Tempus, rutrum morbi scelerisque tempor mi. Etiam urna, cras bibendum leo nec faucibus velit. Tempor lectus dignissim at auctor integer neque quam amet.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn-like btn-light" type="button">
                                <i class="fi-like"></i><span>(0)</span>
                            </button>
                            <div class="border-end border-light me-1">&nbsp;</div>
                            <button class="btn-dislike btn-light" type="button">
                                <i class="fi-dislike"></i><span>(0)</span>
                            </button>
                        </div>
                    </div>
                    <!-- Pagination-->
                    <nav class="mt-2" aria-label="Reviews pagination">
                        <ul class="pagination pagination-light">
                            <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item d-none d-sm-block">...</li>
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:void(0);">8</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);" aria-label="Next"><i class="fi-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Reviews by you tab-->
                <div class="tab-pane fade" id="reviews-by-you" role="tabpanel">
                    <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch justify-content-between pb-4 mb-2 mb-md-3">
                        <h3 class="h4 text-light mb-sm-0">3 reviews</h3>
                        <div class="d-flex align-items-center ms-sm-4">
                            <label class="fs-sm text-light me-2 pe-1 text-nowrap" for="review-sorting2"><i class="fi-arrows-sort mt-n1 me-2"></i>Sort by:</label>
                            <select class="form-select form-select-light form-select-sm" id="review-sorting2">
                                <option>Newest</option>
                                <option>Oldest</option>
                                <option>Popular</option>
                                <option>High rating</option>
                                <option>Low rating</option>
                            </select>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="mb-4 pb-4 border-bottom border-light">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="pe-2">
                                <h6 class="text-light mb-0"> <span class="fw-normal opacity-70 me-1">For:</span>Ford Truck Lifted</h6>
                                <div class="text-light"><span class="star-rating">
                                        <i class="star-rating-icon fi-star-filled active"></i>
                                        <i class="star-rating-icon fi-star-filled active"></i>
                                        <i class="star-rating-icon fi-star"></i>
                                        <i class="star-rating-icon fi-star"></i>
                                        <i class="star-rating-icon fi-star"></i>
                                    </span>
                                </div>
                            </div><span class="text-light fs-sm opacity-50">Jan 13, 2021</span>
                        </div>
                        <p class="text-light opacity-70">Elementum ut quam tincidunt egestas vitae elit, hendrerit. Ullamcorper nulla amet lobortis elit, nibh condimentum enim. Aliquam felis nisl tellus sodales lectus dictum tristique proin vitae. Odio fermentum viverra tortor quis.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn-like btn-light" type="button">
                                <i class="fi-like"></i><span>(2)</span>
                            </button>
                            <div class="border-end border-light me-1">&nbsp;</div>
                            <button class="btn-dislike btn-light" type="button">
                                <i class="fi-dislike"></i><span>(1)</span>
                            </button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="mb-4 pb-4 border-bottom border-light">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="pe-2">
                                <h6 class="text-light mb-0">
                                    <span class="fw-normal opacity-70 me-1">For:</span>Mercedes Benz C300 Sport
                                </h6>
                                <div class="text-light">
                                    <span class="star-rating">
                                        <i class="star-rating-icon fi-star-filled active"></i>
                                        <i class="star-rating-icon fi-star-filled active"></i>
                                        <i class="star-rating-icon fi-star-filled active"></i>
                                        <i class="star-rating-icon fi-star-half active"></i>
                                        <i class="star-rating-icon fi-star"></i>
                                    </span>
                                </div>
                            </div><span class="text-light fs-sm opacity-50">Dec 10, 2020</span>
                        </div>
                        <p class="text-light opacity-70">Vel dictum nunc ut tristique. Egestas diam amet, ut proin hendrerit. Dui accumsan at phasellus tempus consequat dignissim tellus sodales.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn-like btn-light" type="button"><i class="fi-like"></i><span>(4)</span></button>
                            <div class="border-end border-light me-1">&nbsp;</div>
                            <button class="btn-dislike btn-light" type="button"><i class="fi-dislike"></i><span>(2)</span></button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="mb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="pe-2">
                                <h6 class="text-light mb-0">
                                    <span class="fw-normal opacity-70 me-1">For:</span>BMW 640 XI Gran Turismo
                                </h6>
                                <div class="text-light"><span class="star-rating">
                                        <i class="star-rating-icon fi-star-filled active"></i>
                                        <i class="star-rating-icon fi-star-filled active"></i>
                                        <i class="star-rating-icon fi-star-filled active"></i>
                                        <i class="star-rating-icon fi-star-filled active"></i>
                                        <i class="star-rating-icon fi-star-filled active"></i>
                                    </span>
                                </div>
                            </div><span class="text-light fs-sm opacity-50">Oct 24, 2020</span>
                        </div>
                        <p class="text-light opacity-70">Viverra nunc blandit sapien non imperdiet sit. Purus tempus elementum aliquam eu urna. A aenean duis non egestas at libero porttitor integer eget. Sed dictum lobortis laoreet gravida.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn-like btn-light" type="button"><i class="fi-like"></i><span>(2)</span></button>
                            <div class="border-end border-light me-1">&nbsp;</div>
                            <button class="btn-dislike btn-light" type="button"><i class="fi-dislike"></i><span>(0)</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>