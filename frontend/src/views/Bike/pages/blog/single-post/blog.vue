<script  setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
</script>
<template>
    <!-- Page title-->
    <h1 class="h2 text-light pb-3">This Year is All About New Harley Davidson</h1><img class="rounded-3" src="@/assets/img/car-finder/blog/10.jpg" alt="Image">
    <div class="row mt-4 pt-3">
        <!-- Post content-->
        <div class="col-lg-8">
            <!-- Post meta-->
            <div class="d-flex flex-wrap border-bottom border-light pb-3 mb-4"><a class="text-uppercase text-decoration-none border-end border-light pe-3 me-3 mb-2" href="javascript:void(0);">Reviews</a>
                <div class="d-flex align-items-center text-light border-end border-light pe-3 me-3 mb-2"><i class="fi-calendar-alt opacity-70 me-2"></i><span>Mar 25</span></div>
                <div class="d-flex align-items-center text-light border-end border-light pe-3 me-3 mb-2"><i class="fi-clock opacity-70 me-2"></i><span>6 min read</span></div><a class="d-flex align-items-center text-light text-decoration-none mb-2" href="#comments" data-scroll><i class="fi-chat-circle opacity-70 me-2"></i><span>3 comments</span></a>
            </div>
            <p class="fs-lg fw-bold text-light mb-4">Feugiat eget gravida urna placerat posuere pulvinar. Id nibh hendrerit semper urna consequat. Mauris elit tellus risus ultricies ut consequat. Tempor tellus imperdiet nec velit fames pellentesque sed sed arcu. Neque quam id pellentesque in diam in.</p>
            <p class="text-light opacity-70">Purus ornare nisl est nec. Nunc, enim tellus pretium viverra quisque id in metus volutpat. Urna eget velit venenatis, commodo eget massa. Magna donec dictum cras nullam platea. Diam rhoncus massa lectus pellentesque tristique. Amet commodo, egestas vitae bibendum. Volutpat elit condimentum integer tortor porttitor justo vel lobortis risus. Lacinia pellentesque fermentum tellus orci mauris, velit duis eget. Commodo justo, hac ligula molestie felis, iaculis. Vitae dui at ante orci, dictum fusce. Urna, sed urna fringilla faucibus euismod aliquet nec. Quis libero, fermentum amet eu, condimentum auctor. Sit vel ipsum sem tempus gravida et. Scelerisque blandit orci, est quis. Nisi, tellus amet est nascetur habitant faucibus ornare et vivamus.</p>
            <p class="text-light opacity-70">Convallis massa nunc, tempus eget egestas sollicitudin mauris. Purus donec sed neque arcu, dictumst tortor nisi, odio. A sit lectus sem velit orci, rhoncus pharetra facilisis. Cras sodales a, dui pellentesque enim odio rutrum leo. Auctor viverra sit sit ut. Massa, elit venenatis, ultrices viverra at sagittis, velit. Cursus tempus phasellus consectetur suspendisse a blandit pellentesque diam neque. Massa est nibh congue elit amet, diam faucibus. Morbi non est semper ullamcorper quam iaculis at.</p>
            <!-- Video-->
            <div class="position-relative py-4 mb-2"><router-link class="btn btn-icon btn-light-primary text-primary rounded-circle position-absolute start-50 top-50 translate-middle zindex-5" to="/https://www.youtube.com/watch?v=MHw6PI_6ygs" data-bs-toggle="lightbox" data-video="true" style="width: 4.5rem; height: 4.5rem;"><i class="fi-play-filled fs-sm"></i></router-link><img class="opacity-60 rounded-3" src="@/assets/img/car-finder/blog/11.jpg" alt="Video cover"></div>
            <p class="text-light opacity-70">Velit dignissim pharetra ut augue. Nunc felis neque non sagittis. Sodales eros suspendisse scelerisque varius neque elit elementum quis. Ut euismod id auctor donec consectetur massa. Sed vitae accumsan lorem pharetra dictum eget vestibulum. Non blandit viverra laoreet amet, maecenas auctor leo justo, sit. Vitae vulputate gravida est feugiat. Adipiscing tristique mauris, eu sit tortor. Velit in scelerisque sit tincidunt habitant urna nec. Justo, non massa metus convallis cursus lorem volutpat eu duis. Ipsum dolor feugiat est tristique.</p>
            <blockquote class="blockquote text-light mb-4">
                <p>Consequat posuere egestas elit nunc eget elementum sed proin eget. Eget at elementum vestibulum ut eget. Etiam cursus magnis diam id dignissim sit nulla sit. Arcu eu enim nunc rutrum. Auctor venenatis aliquam quam sit.</p>
                <footer class="blockquote-footer text-light"> Annette Black</footer>
            </blockquote>
            <p class="text-light opacity-70">Praesent sed pulvinar posuere nisl tincidunt. Iaculis sit quam magna congue. Amet vel non aliquet habitasse. Egestas erat odio et, eleifend turpis etiam blandit interdum. Nec augue ut senectus quisque diam quis. At augue accumsan, in bibendum. A eget et, eget quisque egestas netus vel. Velit, aliquet turpis convallis ullamcorper. Scelerisque sagittis condimentum pretium in vitae etiam lacinia quis amet. Porttitor consequat, sollicitudin vivamus pharetra nibh faucibus neque, viverra. Praesent amet sed lacus vitae.</p>
            <p class="text-light opacity-70">Velit parturient tellus tellus, congue pulvinar tellus viverra. In cum massa mattis ac. Amet vitae massa ut mi etiam. Auctor aliquam tristique felis donec eu sit nisi. Accumsan mauris eget convallis mattis sed etiam scelerisque.</p>
            <!-- Tags + Sharing-->
            <div class="pt-4 pb-5 mb-md-3">
                <div class="d-md-flex align-items-center justify-content-between border-top border-light pt-4">
                    <div class="d-flex align-items-center me-3 mb-3 mb-md-0">
                        <div class="d-none d-sm-block text-light fw-bold text-nowrap mb-2 me-2 pe-1">Tags:</div>
                        <div class="d-flex flex-wrap"><a class="btn btn-xs btn-translucent-light rounded-pill fs-sm fw-normal me-2 mb-2" href="javascript:void(0);">Reviews</a><a class="btn btn-xs btn-translucent-light rounded-pill fs-sm fw-normal me-2 mb-2" href="javascript:void(0);">Bikes</a><a class="btn btn-xs btn-translucent-light rounded-pill fs-sm fw-normal mb-2" href="javascript:void(0);">Harley Davidson</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="text-light fw-bold text-nowrap pe-1 mb-2">Share:</div>
                        <div class="d-flex"><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2 ms-2" href="javascript:void(0);" data-bs-toggle="tooltip" title="Share with Facebook"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2 ms-2" href="javascript:void(0);" data-bs-toggle="tooltip" title="Share with Twitter"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2 ms-2" href="javascript:void(0);" data-bs-toggle="tooltip" title="Share with LinkedIn"><i class="fi-linkedin"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- Comments-->
            <div class="mb-4 mb-md-5" id="comments">
                <h3 class="text-light mb-4 pb-2">3 comments</h3>
                <!-- Comment-->
                <div class="border-bottom border-light pb-4 mb-4">
                    <p class="text-light opacity-70">Elementum ut quam tincidunt egestas vitae elit, hendrerit. Ullamcorper nulla amet lobortis elit, nibh condimentum enim. Aliquam felis nisl tellus sodales lectus dictum tristique proin vitae. Odio fermentum viverra tortor quis reprehenderit in voluptate velit.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="@/assets/img/avatars/05.jpg" width="48" alt="Daniel Adams">
                            <div class="ps-2">
                                <h6 class="text-light fs-base mb-0">Daniel Adams</h6><span class="text-light opacity-50 fs-sm">3 days ago</span>
                            </div>
                        </div>
                        <button class="btn btn-link btn-light btn-sm" type="button"><i class="fi-reply fs-lg me-2"></i><span class="fw-normal">Reply</span></button>
                    </div>
                    <!-- Reply to comment-->
                    <div class="border-start border-4 border-light ps-4 ms-4 mt-4">
                        <p class="text-light opacity-70">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="@/assets/img/avatars/06.jpg" width="48" alt="Kristin Watsons">
                            <div class="ps-2">
                                <h6 class="text-light fs-base mb-0">Kristin Watsons<span class="badge bg-info rounded-pill fs-xs ms-2">Author</span></h6><span class="text-light opacity-50 fs-sm">2 days ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comment-->
                <div class="pb-4">
                    <p class="text-light opacity-70">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center pe-2"><img class="rounded-circle me-1" src="@/assets/img/avatars/04.jpg" width="48" alt="Darrel Steward">
                            <div class="ps-2">
                                <h6 class="text-light fs-base mb-0">Darrel Steward</h6><span class="text-light opacity-50 fs-sm">1 week ago</span>
                            </div>
                        </div>
                        <button class="btn btn-link btn-light btn-sm" type="button"><i class="fi-reply fs-lg me-2"></i><span class="fw-normal">Reply</span></button>
                    </div>
                </div>
            </div>
            <!-- Comment form-->
            <h3 class="text-light mb-4 pb-sm-2">Leave your comment</h3>
            <form class="needs-validation row gy-md-4 gy-3 pb-sm-2" novalidate>
                <div class="col-sm-6">
                    <label class="form-label text-light" for="comment-name">Name</label>
                    <input class="form-control form-control-light form-control-lg" type="text" id="comment-name" placeholder="Enter your name" required>
                    <div class="invalid-feedback">Please enter your name.</div>
                </div>
                <div class="col-sm-6">
                    <label class="form-label text-light" for="comment-email">Email</label>
                    <input class="form-control form-control-light form-control-lg" type="email" id="comment-email" placeholder="Enter your email" required>
                    <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>
                <div class="col-12">
                    <label class="form-label text-light" for="comment-text">Comment</label>
                    <textarea class="form-control form-control-light form-control-lg" id="comment-text" rows="4" placeholder="Type comment here" required></textarea>
                    <div class="invalid-feedback">Please type your comment.</div>
                </div>
                <div class="col-12 py-2">
                    <button class="btn btn-lg btn-primary" type="submit">Post comment</button>
                </div>
            </form>
        </div>
        <!-- Sidebar-->
        <aside class="col-lg-4">
            <div class="offcanvas-lg offcanvas-end bg-dark" id="blog-sidebar">
                <div class="offcanvas-header bg-transparent border-bottom border-light">
                    <h2 class="h5 text-light mb-0">Sidebar</h2>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" data-bs-target="#blog-sidebar"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- Search-->
                    <div class="position-relative mb-4">
                        <input class="form-control form-control-light" type="text" placeholder="Search..."><i class="fi-search position-absolute top-50 end-0 translate-middle-y text-light opacity-70 me-3"></i>
                    </div>
                    <!-- Author widget-->
                    <div class="card card-flush bg-transparent border-light mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-start pt-3 pt-lg-0"><img class="rounded-circle" src="@/assets/img/avatars/32.jpg" width="80" alt="Kristin Watson">
                                <div class="ps-3">
                                    <h3 class="h5 text-light mb-2">Kristin Watson</h3>
                                    <p class="fs-sm text-light opacity-70">Chief Editor at Finder</p>
                                    <div class="d-flex"><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle me-2" href="javascript:void(0);"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle me-2" href="javascript:void(0);"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle me-2" href="javascript:void(0);"><i class="fi-linkedin"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent posts widget-->
                    <div class="card card-flush bg-transparent border-light mb-4">
                        <div class="card-body">
                            <h3 class="h5 text-light pt-3 pt-lg-0">Recent Posts</h3>
                            <div class="d-flex align-items-start border-bottom border-light pb-3 mb-3"><a class="flex-shrink-0" href="javascript:void(0);"><img class="rounded-3" src="@/assets/img/car-finder/blog/th01.jpg" width="80" alt="Image"></a>
                                <div class="ps-3"><a class="fs-xs text-uppercase text-primary text-decoration-none" href="javascript:void(0);">Travel</a>
                                    <h4 class="fs-base text-light pt-1 mb-2"><a class="nav-link" href="javascript:void(0);">Across Arctic on Old Good Land Rover Defender</a></h4>
                                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>May 08</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>4 comments</span></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start border-bottom border-light pb-3 mb-3"><a class="flex-shrink-0" href="javascript:void(0);"><img class="rounded-3" src="@/assets/img/car-finder/blog/th02.jpg" width="80" alt="Image"></a>
                                <div class="ps-3"><a class="fs-xs text-uppercase text-primary text-decoration-none" href="javascript:void(0);">Reviews</a>
                                    <h4 class="fs-base text-light pt-1 mb-2"><a class="nav-link" href="javascript:void(0);">First ATV from KTM. Test Drive in Sahara</a></h4>
                                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Mar 12</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>8 comments</span></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start"><a class="flex-shrink-0" href="javascript:void(0);"><img class="rounded-3" src="@/assets/img/car-finder/blog/th03.jpg" width="80" alt="Image"></a>
                                <div class="ps-3"><a class="fs-xs text-uppercase text-primary text-decoration-none" href="javascript:void(0);">Reviews</a>
                                    <h4 class="fs-base text-light pt-1 mb-2"><a class="nav-link" href="javascript:void(0);">All New Aston Martin Superleggera</a></h4>
                                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Feb 19</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>10 comments</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post carousel widget-->
                    <div class="card card-flush bg-transparent border-light mb-4">
                        <div class="card-body">
                            <h3 class="h5 text-light pt-3 pt-lg-0">Editor's Choice</h3>
                            <div class="tns-carousel-wrapper">
                                <!-- <div class="tns-carousel-inner d-block" data-carousel-options="{&quot;nav&quot;: false, &quot;gutter&quot;: 20, &quot;autoHeight&quot;: true, &quot;controlsContainer&quot;: &quot;#externalControls&quot;}"> -->
                                <swiper :autoplay="true" :slidesPerView="1" :loop="true" class="h-100vh">
                                    <SwiperSlide>
                                        <article><a class="d-block position-relative mb-3" href="javascript:void(0);"><img class="d-block rounded-3" src="@/assets/img/car-finder/blog/04.webp" alt="Post image"></a><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Automotive News</a>
                                            <h3 class="fs-base text-light pt-1"><a class="nav-link" href="javascript:void(0);">Volkswagen: Never Done Innovating</a></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/08.jpg" width="44" alt="Darrell Steward">
                                                <div class="ps-2">
                                                    <h6 class="fs-sm text-light lh-base mb-1">Darrell Steward</h6>
                                                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Apr 15</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>No comments</span></div>
                                                </div>
                                            </a>
                                        </article>
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <article><router-link class="d-block position-relative mb-3" to="/car-finder-blog-single"><img class="d-block rounded-3" src="@/assets/img/car-finder/blog/08.jpg" alt="Post image"></router-link><a class="fs-xs text-uppercase text-decoration-none" href="javascript:void(0);">Automotive News</a>
                                            <h3 class="fs-base text-light pt-1"><router-link class="nav-link" to="/car-finder-blog-single">Closer Look at Electric Bike Startup</router-link></h3><a class="d-flex align-items-center text-decoration-none" href="javascript:void(0);"><img class="rounded-circle" src="@/assets/img/avatars/07.jpg" width="44" alt="Cody Fisher">
                                                <div class="ps-2">
                                                    <h6 class="fs-sm text-light lh-base mb-1">Cody Fisher</h6>
                                                    <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Feb 28</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>5 comments</span></div>
                                                </div>
                                            </a>
                                        </article>
                                    </SwiperSlide>
                                </swiper>
                                <!-- </div> -->
                            </div>
                            <div class="tns-carousel-controls tns-carousel-light pt-4 mt-lg-2" id="externalControls">
                                <button class="me-3" type="button"><i class="fi-chevron-left fs-xs"></i></button>
                                <button type="button"><i class="fi-chevron-right fs-xs"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Subscription form-->
                    <div class="card card-flush bg-transparent border-light mb-4">
                        <div class="card-body">
                            <h3 class="h5 text-light pt-3 pt-lg-0 pb-1 mb-2">Subscribe to our newsletter</h3>
                            <p class="fs-sm text-light opacity-70">We will send you hottest news as soon as they are posted in the picked category.</p>
                            <form class="form-group form-group-light w-100">
                                <div class="input-group input-group-sm"><span class="input-group-text"> <i class="fi-mail"></i></span>
                                    <input class="form-control" type="text" placeholder="Your email">
                                </div>
                                <button class="btn btn-primary btn-sm" type="button">Subscribe</button>
                            </form>
                            <p class="fs-sm pt-3 mb-0"><span class="text-light opacity-70">* By signing up you agree to our </span><a href="javascript:void(0);">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</template>
