<script  setup>

</script>
<template>

    <!-- Page title-->
    <h1 class="text-light mb-4">News &amp; reviews</h1>
    <!-- Sorting, filters and search-->
    <div class="d-lg-flex pt-1 pb-4 mb-3">
        <div class="d-flex mb-3 mb-lg-0 pe-lg-2">
            <div class="d-flex flex-md-row flex-column align-items-md-center flex-grow-1 border-end-md border-light pe-md-4 me-md-4">
                <label class="d-inline-block text-light me-sm-2 mb-md-0 mb-2 text-nowrap" for="sortby"><i class="fi-arrows-sort mt-n1 me-2 align-middle opacity-70"></i>Sort by:</label>
                <select class="form-select form-select-light me-md-2" id="sortby">
                    <option>Newest</option>
                    <option>Oldest</option>
                    <option>Popular</option>
                    <option>Sponsored</option>
                </select>
            </div>
            <div class="d-flex flex-md-row flex-column align-items-md-center flex-grow-1 border-end-lg border-light ps-3 ps-md-2 pe-lg-4 me-lg-4">
                <label class="d-inline-block text-light me-sm-2 mb-md-0 mb-2 text-nowrap" for="categories"><i class="fi-align-left mt-n1 me-2 align-middle opacity-70"></i>Category:</label>
                <select class="form-select form-select-light me-lg-2" id="categories">
                    <option>All</option>
                    <option>Reviews</option>
                    <option>Tips &amp; Advice</option>
                    <option>Automotive News</option>
                    <option>Travel</option>
                </select>
            </div>
        </div>
        <div class="position-relative flex-grow-1">
            <input class="form-control form-control-light" type="text" placeholder="Search articles by keywords..."><i class="fi-search position-absolute top-50 end-0 translate-middle-y text-light opacity-70 me-3"></i>
        </div>
    </div>
    <!-- Featured article-->
    <article class="row pb-2 pb-md-1 mb-4 mb-md-5">
        <div class="col-md-7 col-lg-8 mb-lg-0 mb-3 mb-md-0"><router-link class="d-block position-relative" to="/car-finder-blog-single"><span class="badge bg-info position-absolute top-0 end-0 m-3 fs-sm">New</span><img class="rounded-3" src="@/assets/img/car-finder/blog/01.jpg" alt="Post image"></router-link></div>
        <div class="col-md-5 col-lg-4"><a class="fs-sm text-uppercase text-decoration-none" href="javascript:void(0);">Tips &amp; Advice</a>
            <h2 class="h5 text-light pt-1"><router-link class="nav-link" to="/car-finder-blog-single">10 Best Electric Bikes from Automotive Manufacturers for a Long Trip</router-link></h2>
            <p class="d-md-none d-xl-block text-light opacity-70 mb-4">Nulla felis neque ultrices ut aliquam. Pellentesque id semper iaculis scelerisque etiam egestas interdum proin sit. Ornare venenatis, ullamcorper amet arcu ipsum ut morbi enim. Senectus quam egestas facilisi enim diam posuere ultricies interdum sed. Amet, risus eros cursus vitae, sit?</p><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/06.jpg" width="48" alt="Kristin Watson">
                <div class="ps-2">
                    <h6 class="fs-base text-light lh-base mb-1">Kristin Watson</h6>
                    <div class="d-flex fs-sm text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1"></i>May 13</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1"></i>No comments</span></div>
                </div>
            </a>
        </div>
    </article>
    <!-- Latest articles (2 columns)-->
    <div class="row row-cols-1 row-cols-md-2 gy-md-5 gy-4 mb-lg-5 mb-4">
        <article class="col pb-2 pb-md-1"><router-link class="d-block position-relative mb-3" to="/car-finder-blog-single"><span class="badge bg-info position-absolute top-0 end-0 m-3 fs-sm">New</span><img class="d-block rounded-3" src="@/assets/img/car-finder/blog/02.jpg" alt="Post image"></router-link><a class="fs-sm text-uppercase text-decoration-none" href="javascript:void(0);">Travel</a>
            <h3 class="h5 text-light mb-2 pt-1"><router-link class="nav-link" to="/car-finder-blog-single">Across Arctic on Old Good Land Rover Defender</router-link></h3>
            <p class="text-light opacity-70 mb-3">Odio enim, sem massa posuere amet neque. Nisl rutrum morbi tempor, ligula velit justo, morbi lorem. Vestibulum at volutpat sit cursus. Aenean tincidunt integer...</p><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/07.jpg" width="48" alt="Cody Fisher">
                <div class="ps-2">
                    <h6 class="fs-base text-light lh-base mb-1">Cody Fisher</h6>
                    <div class="d-flex fs-sm text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>May 08</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>4 comments</span></div>
                </div>
            </a>
        </article>
        <article class="col pb-2 pb-md-1"><router-link class="d-block position-relative mb-3" to="/car-finder-blog-single"><span class="badge bg-info position-absolute top-0 end-0 m-3 fs-sm">New</span><img class="d-block rounded-3" src="@/assets/img/car-finder/blog/03.jpg" alt="Post image"></router-link><a class="fs-sm text-uppercase text-decoration-none" href="javascript:void(0);">Automotive News</a>
            <h3 class="h5 text-light mb-2 pt-1"><router-link class="nav-link" to="/car-finder-blog-single">10 Ways to Stay Ahead of the Curve</router-link></h3>
            <p class="text-light opacity-70 mb-3">Mi sit montes, aenean tempor sollicitudin volutpat viverra. Tellus amet, vitae ac consectetur blandit at. Odio proin elit, vehicula morbi faucibus vestibulum…</p><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/03.jpg" width="48" alt="Kathryn Murphy">
                <div class="ps-2">
                    <h6 class="fs-base text-light lh-base mb-1">Kathryn Murphy</h6>
                    <div class="d-flex fs-sm text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Apr 27</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>1 comment</span></div>
                </div>
            </a>
        </article>
    </div>
    <!-- Latest articles (3 columns)-->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 gy-md-5 gy-4 mb-lg-5 mb-4">
        <article class="col pb-2 pb-md-1"><router-link class="d-block position-relative mb-3" to="/car-finder-blog-single"><img class="d-block rounded-3" src="@/assets/img/car-finder/blog/04.webp" alt="Post image"></router-link><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Automotive News</a>
            <h3 class="fs-base text-light pt-1"><router-link class="nav-link" to="/car-finder-blog-single">Volkswagen: Never Done Innovating</router-link></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/08.jpg" width="44" alt="Darrell Steward">
                <div class="ps-2">
                    <h6 class="fs-sm text-light lh-base mb-1">Darrell Steward</h6>
                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Apr 15</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>No comments</span></div>
                </div>
            </a>
        </article>
        <article class="col pb-2 pb-md-1"><router-link class="d-block position-relative mb-3" to="/car-finder-blog-single"><img class="d-block rounded-3" src="@/assets/img/car-finder/blog/05.webp" alt="Post image"></router-link><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Tips &amp; Advice</a>
            <h3 class="fs-base text-light pt-1"><router-link class="nav-link" to="/car-finder-blog-single">5 Predictions From the Past About the Future</router-link></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/09.jpg" width="44" alt="Guy Hawkins">
                <div class="ps-2">
                    <h6 class="fs-sm text-light lh-base mb-1">Guy Hawkins</h6>
                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Apr 06</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>2 comments</span></div>
                </div>
            </a>
        </article>
        <article class="col pb-2 pb-md-1"><router-link class="d-block position-relative mb-3" to="/car-finder-blog-single"><img class="d-block rounded-3" src="@/assets/img/car-finder/blog/06.webp" alt="Post image"></router-link><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Reviews</a>
            <h3 class="fs-base text-light pt-1"><router-link class="nav-link" to="/car-finder-blog-single">This Year is All About New Harley Davidson</router-link></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/10.jpg" width="44" alt="Kristin Watson">
                <div class="ps-2">
                    <h6 class="fs-sm text-light lh-base mb-1">Kristin Watson</h6>
                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Mar 25</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>3 comments</span></div>
                </div>
            </a>
        </article>
        <article class="col pb-2 pb-md-1"><router-link class="d-block position-relative mb-3" to="/car-finder-blog-single"><img class="d-block rounded-3" src="@/assets/img/car-finder/blog/07.jpg" alt="Post image"></router-link><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Reviews</a>
            <h3 class="fs-base text-light pt-1"><router-link class="nav-link" to="/car-finder-blog-single">First ATV from KTM. Test Drive in Sahara</router-link></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/11.jpg" width="44" alt="Marvin McKinney">
                <div class="ps-2">
                    <h6 class="fs-sm text-light lh-base mb-1">Marvin McKinney</h6>
                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Mar 12</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>8 comments</span></div>
                </div>
            </a>
        </article>
        <article class="col pb-2 pb-md-1"><router-link class="d-block position-relative mb-3" to="/car-finder-blog-single"><img class="d-block rounded-3" src="@/assets/img/car-finder/blog/08.jpg" alt="Post image"></router-link><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Automotive News</a>
            <h3 class="fs-base text-light pt-1"><router-link class="nav-link" to="/car-finder-blog-single">Closer Look at Yet Another Electric Bike Startup</router-link></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/07.jpg" width="44" alt="Cody Fisher">
                <div class="ps-2">
                    <h6 class="fs-sm text-light lh-base mb-1">Cody Fisher</h6>
                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Feb 28</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>5 comments</span></div>
                </div>
            </a>
        </article>
        <article class="col pb-2 pb-md-1"><router-link class="d-block position-relative mb-3" to="/car-finder-blog-single"><img class="d-block rounded-3" src="@/assets/img/car-finder/blog/09.jpg" alt="Post image"></router-link><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Reviews</a>
            <h3 class="fs-base text-light pt-1"><router-link class="nav-link" to="/car-finder-blog-single">All New Aston Martin Superleggera</router-link></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/09.jpg" width="44" alt="Guy Hawkins">
                <div class="ps-2">
                    <h6 class="fs-sm text-light lh-base mb-1">Guy Hawkins</h6>
                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Feb 19</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>10 comments</span></div>
                </div>
            </a>
        </article>
    </div>
    <!-- Pagination-->
    <nav class="border-top border-light pt-4" aria-label="Reviews pagination">
        <ul class="pagination pagination-light">
            <li class="page-item d-sm-none text-nowrap"><span class="page-link page-link-static">1 / 5</span></li>
            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item d-none d-sm-block">...</li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:void(0);">8</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);" aria-label="Next"><i class="fi-chevron-right"></i></a></li>
        </ul>
    </nav>
</template>
