<template>
  <!-- Footer-->
  <footer class="footer bg-faded-light">
    <!-- <div class="border-bottom border-light py-4">
      <div class="container d-sm-flex align-items-center justify-content-between">
        <router-link class="d-inline-block" to="/real-estate-home-v1">
          <img src="@/assets/img/logo/logo-light.svg" width="116" alt="logo">
        </router-link>
        <div class="d-flex pt-3 pt-sm-0">
          <div class="dropdown ms-n3">
            <button class="btn btn-light btn-link btn-sm dropdown-toggle fw-normal py-2" type="button" data-bs-toggle="dropdown">
              <i class="fi-globe me-2"></i>Eng
            </button>
            <div class="dropdown-menu dropdown-menu-dark w-100">
              <a class="dropdown-item" href="javascript:void(0);">Deutsch</a>
              <a class="dropdown-item" href="javascript:void(0);">Français</a>
              <a class="dropdown-item" href="javascript:void(0);">Español</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="btn btn-light btn-link btn-sm dropdown-toggle fw-normal py-2 pe-2" type="button" data-bs-toggle="dropdown">
              <i class="fi-map-pin me-2"></i>New York
            </button>
            <div class="dropdown-menu dropdown-menu-dark dropdown-menu-sm-end" style="min-width: 7.5rem;">
              <a class="dropdown-item" href="javascript:void(0);">Chicago</a><a class="dropdown-item" href="javascript:void(0);">Dallas</a>
              <a class="dropdown-item" href="javascript:void(0);">Los Angeles</a><a class="dropdown-item" href="javascript:void(0);">San Diego</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container pt-4 pb-3 pt-lg-5 pb-lg-4">
      <div class="row pt-2 pt-lg-0">
        <div class="col-lg-3 pb-2 mb-4">
          <h3 class="h5 text-light mb-2">Đăng kí nhận tin</h3>
          <p class="fs-sm text-light opacity-70">Nhận tin mới nhất về các sản phẩm!</p>
          <form class="form-group form-group-light w-100">
            <div class="input-group input-group-sm"><span class="input-group-text"> <i class="fi-mail"></i></span>
              <input class="form-control" type="text" placeholder="Your email">
            </div>
            <button class="btn btn-primary btn-icon btn-sm" type="button"><i class="fi-send"></i></button>
          </form>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 offset-xl-1 mb-2 mb-sm-4">
          <h3 class="fs-base text-light">Mua &amp; bán</h3>
          <ul class="list-unstyled fs-sm">
            <li><a class="nav-link-light" href="javascript:void(0);">Tìm phụ tùng</a></li>
            <li><a class="nav-link-light" href="javascript:void(0);">Tìm cửa hàng bảo dưỡng</a></li>
            <li><a class="nav-link-light" href="javascript:void(0);">Bán xe</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 mb-2 mb-sm-4">
          <h3 class="fs-base text-light">Về chúng tôi</h3>
          <ul class="list-unstyled fs-sm">
            <li><a class="nav-link-light" href="javascript:void(0);">Thông tin</a></li>
            <li><a class="nav-link-light" href="javascript:void(0);">Liên hệ</a></li>
            <li><a class="nav-link-light" href="javascript:void(0);">Câu hỏi thường gặp</a></li>
            <li><a class="nav-link-light" href="javascript:void(0);">Bài viết</a></li>
          </ul>
        </div>
        <!-- <div class="col-lg-2 col-md-3 col-sm-6 mb-2 mb-sm-4">
          <h3 class="fs-base text-light">Profile</h3>
          <ul class="list-unstyled fs-sm">
            <li><a class="nav-link-light" href="javascript:void(0);">My account</a></li>
            <li><a class="nav-link-light" href="javascript:void(0);">Wishlist</a></li>
            <li><a class="nav-link-light" href="javascript:void(0);">My listings</a></li>
            <li><a class="nav-link-light" href="javascript:void(0);">Add listing</a></li>
          </ul>
        </div> -->
        <div class="col-xl-2 col-lg-3 col-sm-6 col-md-3 mb-2 mb-sm-4">
          <router-link class="d-flex align-items-center text-decoration-none mb-2" to="tel:4065550120">
            <i class="fi-device-mobile me-2"></i>
            <span class="text-light">(406) 555-0120</span>
          </router-link>
          <router-link class="d-flex align-items-center text-decoration-none mb-2" to="mailto:example@email.com">
            <i class="fi-mail me-2"></i><span class="text-light">example@email.com</span>
          </router-link>
          <div class="d-flex flex-wrap pt-4">
            <a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2 me-2" href="javascript:void(0);">
              <i class="fi-facebook"></i>
            </a>
            <a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2" href="javascript:void(0);">
              <i class="fi-messenger"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="container d-lg-flex align-items-center justify-content-between fs-sm pb-3">
      <div class="d-flex flex-wrap justify-content-center order-lg-2 mb-3">
        <a class="nav-link nav-link-light fw-normal" href="javascript:void(0);">Terms of use</a>
        <a class="nav-link nav-link-light fw-normal" href="javascript:void(0);">Privacy policy</a>
        <a class="nav-link nav-link-light fw-normal" href="javascript:void(0);">Accessibility statement</a>
        <a class="nav-link nav-link-light fw-normal pe-0" href="javascript:void(0);">Interest based ads</a>
      </div>
      <p class="text-center text-lg-start order-lg-1 mb-lg-0">
        <span class="text-light opacity-50">&copy; All rights reserved. Made by </span>
        <a class="nav-link-light fw-bold" href="#!"  rel="noopener">SRBThemes</a>
      </p>
    </div> -->
  </footer>
</template>
