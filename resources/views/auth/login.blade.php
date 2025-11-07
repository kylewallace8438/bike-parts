@extends('layouts.layout')
@section('title')
    <title>Trang chủ - Kwapp Store</title>
@endsection
@section('meta')
    <meta name="description"
        content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
    <meta name="keywords"
        content="medical theme, vegetables, medicine store, eCommerce html template, responsive, multipurpose, mask, sanitizer, eCommerce store, health, tables, dental, healthcare, pharmacy, herbal, medicine shop">
    <meta name="author" content="spacingtech_webify">
@endsection
@section('styles')
    <!-- plugin css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/plugin.css') }}">
    <!-- collection css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/collection2.css') }}">
    <!-- feather -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/feather.css') }}">
    <!-- blog css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/blog.css') }}">
    <!-- other-pages css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/other-pages.css') }}">
    <!-- product-page css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/product-page.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/style2.css') }}">
@endsection
@section('content')
    <!-- screen-bg start -->
    <div class="screen-bg"></div>
    <!-- screen-bg end -->
    <!-- preloader start -->
    <div class="preloader"></div>
    <!-- preloader end -->
    <x-common.top-notification />
    <x-common.header />
    <x-common.menu-main />
    <!-- customer-page start -->
    <section class="customer-page section-pt">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="acc-form">
                        <div class="log-acc-page" id="CustomerLoginForm">
                            <!-- account title start -->
                            <div class="section-capture">
                                <div class="section-title">
                                    <h2 data-animate="animate__fadeIn"><span>Login account</span></h2>
                                    <p data-animate="animate__fadeIn">Please login account detail</p>
                                </div>
                            </div>
                            <!-- account title end -->
                            <!-- account login start -->
                            <div class="acc-page">
                                <div class="login">
                                    <form method="post">
                                        <div class="login-form-container">
                                            <ul class="fill-form">
                                                <li class="log-email" data-animate="animate__fadeIn">
                                                    <label>Email address</label>
                                                    <input type="email" name="q" class="input-full"
                                                        placeholder="Email address" autocomplete="off">
                                                </li>
                                                <li class="log-pwd" data-animate="animate__fadeIn">
                                                    <label>Password</label>
                                                    <input type="password" name="q" class="input-full"
                                                        placeholder="Password">
                                                </li>
                                            </ul>
                                            <div class="form-action-button" data-animate="animate__fadeIn">
                                                <button type="submit" class="btn btn-style2">Sign In</button>
                                                <a href="javascript:void(0)" onclick="myFunction()">Forgot your
                                                    password?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="acc-wrapper" data-animate="animate__fadeIn">
                                    <h6 data-animate="animate__fadeIn">Don't have account?</h6>
                                    <div class="account-optional-action" data-animate="animate__fadeIn">
                                        <a href="create-account.html">Create account</a>
                                    </div>
                                </div>
                            </div>
                            <!-- account login end -->
                        </div>
                        <div class="log-acc-page" id="RecoverPasswordForm" style="display: none;">
                            <!-- account title start -->
                            <div class="content-main-title">
                                <div class="section-cont-title">
                                    <h2 data-animate="animate__fadeIn">
                                        <span class="title-main">Reset your password</span>
                                    </h2>
                                    <p data-animate="animate__fadeIn">We will send you an email to reset your password.</p>
                                </div>
                            </div>
                            <!-- account title end -->
                            <!-- account login start -->
                            <div class="acc-page">
                                <div class="login">
                                    <form method="post">
                                        <div class="login-form-container">
                                            <ul class="fill-form">
                                                <li class="log-email" data-animate="animate__fadeIn">
                                                    <label>Email address</label>
                                                    <input type="email" name="q" class="input-full"
                                                        placeholder="Email address" autocomplete="off">
                                                </li>
                                                <li class="form-toggle-btn" data-animate="animate__fadeIn">
                                                    <div class="form-action-button">
                                                        <button type="submit" class="btn btn-style2">Submit</button>
                                                        <a onclick="myFunction()" href="javascript:void(0)">Cancel</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- account login end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- customer-page end  -->
    <x-common.footer />
    <x-common.mobile-vega />
    <x-common.mobile-menu />
    <x-common.search-modal />
    <x-common.cart-drawer />
    <x-common.bottom-menu />
    <!-- fullscreen start -->
    <div class="bg-screen"></div>
    <!-- fullscreen end -->
    <!-- back-to-top start -->
    <a href="javascript:void(0)" id="top" class="scroll"><span><i class="feather-arrow-up"></i></span></a>
    <!-- back-to-top end -->
@endsection
