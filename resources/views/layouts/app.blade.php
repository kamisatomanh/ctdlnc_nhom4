<!DOCTYPE html>
<html class="no-js" lang="en">
<!-- Copied from http://demos.alithemes.com/html/stories/demo/index.html by Cyotek WebCopy 1.8.0.652, Monday, September 7, 2020, 6:05:35 PM -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stories - Personal Blog HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('')}}assets/imgs/theme/favicon.png">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{ asset('')}}assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('')}}assets/css/widgets.css">
    <link rel="stylesheet" href="{{ asset('')}}assets/css/responsive.css">
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="circle"></div>
    </div>
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
        <div class="sidebar-inner">
            <!--Categories-->
            <div class="sidebar-widget widget_categories mb-50 mt-30">
                <div class="widget-header-2 position-relative">
                    <h5 class="mt-5 mb-15">Hot topics</h5>
                </div>
                <div class="widget_nav_menu">
                    <ul>
                        <li class="cat-item cat-item-2"><a href="category.html.htm">Travel tips</a> <span class="post-count">30</span></li>
                        <li class="cat-item cat-item-3"><a href="category-grid.html.htm">Book review</a> <span class="post-count">25</span></li>
                        <li class="cat-item cat-item-4"><a href="category-list.html.htm">Hotel review</a> <span class="post-count">16</span></li>
                        <li class="cat-item cat-item-5"><a href="category-masonry.html.htm">Destinations </a> <span class="post-count">22</span></li>
                        <li class="cat-item cat-item-6"><a href="category-big.html.htm">Lifestyle</a> <span class="post-count">25</span></li>
                    </ul>
                </div>
            </div>
            <!--Latest-->
            <div class="sidebar-widget widget-latest-posts mb-50">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Don't miss</h5>
                </div>
                <div class="post-block-list post-module-1 post-module-5">
                    <ul class="list-post">
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html.htm">
                                        <img src="{{ asset('')}}assets/imgs/news/thumb-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html.htm">The Life of a Travel Writer with David Farley</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">05 August</span>
                                        <span class="post-by has-dot">300 views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html.htm">
                                        <img src="{{ asset('')}}assets/imgs/news/thumb-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html.htm">Why Don’t More Black American Women Travel Solo?</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">12 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html.htm">
                                        <img src="{{ asset('')}}assets/imgs/news/thumb-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html.htm">The 22 Best Things to See and Do in Bangkok</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Ads-->
            <div class="sidebar-widget widget-ads">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Advertise banner</h5>
                </div>
                <a href="../../../user/alithemes/portfolio.htm" target="_blank">
                    <img class="advertise-img border-radius-5" src="{{ asset('')}}assets/imgs/ads/ads-1.jpg" alt="">
                </a>
            </div>
        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container"> 
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-xs-6">
                        <a href="/"><img class="logo" src="{{ asset('')}}assets/imgs/theme/logo.png" alt=""></a>
                    </div>
                    <div class="col-md-9 col-xs-6 text-right header-top-right ">
                        <ul class="list-inline nav-topbar d-none d-md-inline">
                            <li class="list-inline-item menu-item-has-children"><a href="#">Layouts</a>
                                <ul class="sub-menu font-small">
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu font-small">
                                            <li><a href="page-about.html.htm">About</a></li>
                                            <li><a href="page-contact.html.htm">Contact</a></li>
                                            <li><a href="page-typography.html.htm">Typography</a></li>
                                            <li><a href="page-register.html.htm">Register</a></li>
                                            <li><a href="page-login.html.htm">Login</a></li>
                                            <li><a href="page-search.html.htm">Search</a></li>
                                            <li><a href="page-author.html.htm">Author</a></li>
                                            <li><a href="page-404.html.htm">404 page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Category</a>
                                        <ul class="sub-menu font-small">
                                            <li><a href="category-list.html.htm">List layout</a></li>
                                            <li><a href="category-grid.html.htm">Grid layout</a></li>
                                            <li><a href="category-masonry.html.htm">Masonry layout</a></li>
                                            <li><a href="category-big.html.htm">Big layout</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Single post</a>
                                        <ul class="sub-menu font-small">
                                            <li><a href="single.html.htm">Default</a></li>
                                            <li><a href="single-2.html.htm">Big image</a></li>
                                            <li><a href="single-3.html.htm">Left image</a></li>
                                            <li><a href="single-4.html.htm">With sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-inline-item"><a href="http://demos.alithemes.com/html/stories/docs/"><i class="elegant-icon icon_document_alt mr-5"></i>Document</a></li>
                        </ul>
                        <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                        <button class="search-icon d-none d-md-inline"><span class="mr-15 text-muted font-small"><i class="elegant-icon icon_search mr-5"></i>Search</span></button>
                        @if (Auth::check())
                            <a><i class="biolife-icon icon-login"></i>{{ Auth::user()->user_name }}</a>
                            @livewire('logout')
                            @else
                            <a href="{{ route('login') }}" class="btn btn-radius bg-primary text-white ml-15 font-small box-shadow"><i class="biolife-icon icon-login"></i>Đăng nhập</a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <li class="menu-item-has-children">
                                <a href="index.html.htm"> <i class="elegant-icon icon_house_alt mr-5"></i> Home</a>
                                <ul class="sub-menu text-muted font-small">
                                    <li><a href="index.html.htm">Home default</a></li>
                                    <li><a href="home-2.html.htm">Homepage 2</a></li>
                                    <li><a href="home-3.html.htm">Homepage 3</a></li>
                                </ul>
                            </li>
                            <li> <a href="category-list.html.htm">Travel</a> </li>
                            <li class="current-item"> <a href="category-list.html.htm">Destinations</a> </li>
                            <li> <a href="category-grid.html.htm">Guides</a> </li>
                            <li> <a href="category-masonry.html.htm">Food</a> </li>
                            <li> <a href="category-big.html.htm">Hotels</a> </li>
                            <li> <a href="category.html.htm">Review</a> </li>
                            <li> <a href="category.html.htm">Healthy </a> </li>
                            <li> <a href="category.html.htm">Lifestyle</a> </li>
                            <li> <a href="{{ route('posts.create') }}">Đăng bài viết mới</a> </li>
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li class="menu-item-has-children">
                                <a href="index.html.htm">Home</a>
                                <ul class="sub-menu text-muted font-small">
                                    <li><a href="index.html.htm">Home default</a></li>
                                    <li><a href="home-2.html.htm">Homepage 2</a></li>
                                    <li><a href="home-3.html.htm">Homepage 3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="page-about.html.htm">About</a></li>
                                    <li><a href="page-contact.html.htm">Contact</a></li>
                                    <li><a href="page-typography.html.htm">Typography</a></li>
                                    <li><a href="page-register.html.htm">Register</a></li>
                                    <li><a href="page-login.html.htm">Login</a></li>
                                    <li><a href="page-search.html.htm">Search</a></li>
                                    <li><a href="page-author.html.htm">Author</a></li>
                                    <li><a href="page-404.html.htm">404 page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Category</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="category-list.html.htm">List layout</a></li>
                                    <li><a href="category-grid.html.htm">Grid layout</a></li>
                                    <li><a href="category-masonry.html.htm">Masonry layout</a></li>
                                    <li><a href="category-big.html.htm">Big layout</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Single post</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="single.html.htm">Default</a></li>
                                    <li><a href="single-2.html.htm">Big image</a></li>
                                    <li><a href="single-3.html.htm">Left image</a></li>
                                    <li><a href="single-4.html.htm">With sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                    </ul>
                    <div class="off-canvas-toggle-cover d-inline-block">
                        <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!--Start search form-->
    <div class="main-search-form">
        <div class="container">
            <div class=" pt-50 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <p class="text-center"><span class="search-text-bg">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search stories, places and people">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="elegant-icon icon_search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-80 text-center">
                    <div class="col-12 font-small suggested-area">
                        <h5 class="suggested font-heading mb-20 text-muted"> <strong>Suggested keywords:</strong></h5>
                        <ul class="list-inline d-inline-block">
                            <li class="list-inline-item"><a href="category.html.htm">World</a></li>
                            <li class="list-inline-item"><a href="category.html.htm">American</a></li>
                            <li class="list-inline-item"><a href="category.html.htm">Opinion</a></li>
                            <li class="list-inline-item"><a href="category.html.htm">Tech</a></li>
                            <li class="list-inline-item"><a href="category.html.htm">Science</a></li>
                            <li class="list-inline-item"><a href="category.html.htm">Books</a></li>
                            <li class="list-inline-item"><a href="category.html.htm">Travel</a></li>
                            <li class="list-inline-item"><a href="category.html.htm">Business</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-80">
                    <div class="col-lg-4">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html.htm">
                                    <img src="{{ asset('')}}assets/imgs/news/thumb-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html.htm">Travel Tips</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html.htm">
                                    <img src="{{ asset('')}}assets/imgs/news/thumb-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html.htm">Lifestyle</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html.htm">
                                    <img src="{{ asset('')}}assets/imgs/news/thumb-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html.htm">Hotel Review</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{ $slot}}
    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget wow fadeInUp animated mb-30">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">About me</h5>
                        </div>
                        <div class="textwidget">
                            <p>
                                Start writing, no matter what. The water does not flow until the faucet is turned on.
                            </p>
                            <p><strong class="color-black">Address</strong><br>
                                123 Main Street<br>
                                New York, NY 10001</p>
                            <p><strong class="color-black">Follow me</strong><br>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Quick link</h5>
                        </div>
                        <ul class="font-small">
                            <li class="cat-item cat-item-2"><a href="#">About me</a></li>
                            <li class="cat-item cat-item-4"><a href="#">Help & Support</a></li>
                            <li class="cat-item cat-item-5"><a href="#">​​Licensing Policy</a></li>
                            <li class="cat-item cat-item-6"><a href="#">Refund Policy</a></li>
                            <li class="cat-item cat-item-7"><a href="#">Hire me</a></li>
                            <li class="cat-item cat-item-7"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Tagcloud</h5>
                        </div>
                        <div class="tagcloud mt-50">
                            <a class="tag-cloud-link" href="category.html.htm">beautiful</a>
                            <a class="tag-cloud-link" href="category.html.htm">New York</a>
                            <a class="tag-cloud-link" href="category.html.htm">droll</a>
                            <a class="tag-cloud-link" href="category.html.htm">intimate</a>
                            <a class="tag-cloud-link" href="category.html.htm">loving</a>
                            <a class="tag-cloud-link" href="category.html.htm">travel</a>
                            <a class="tag-cloud-link" href="category.html.htm">fighting </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Newsletter</h5>
                        </div>
                        <div class="newsletter">
                            <p class="font-medium">Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                            <form class="input-group form-subcriber mt-30 d-flex">
                                <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                                <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                                <label class="mt-20"> <input class="mr-5" name="name" type="checkbox" value="1" required=""> I agree to the <a href="#" target="_blank">terms &amp; conditions</a> </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-left font-small text-muted">© 2020, Stories - Personal Blog HTML Template </p>
                <p class="float-md-right font-small text-muted">
                    Design by <a href="../../../index.htm" target="_blank">AliThemes</a> | All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="{{ asset('')}}assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/popper.min.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/jquery.slicknav.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/slick.min.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/wow.min.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/jquery.ticker.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/jquery.vticker-min.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/jquery.magnific-popup.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/jquery.sticky.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/perfect-scrollbar.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/waypoints.min.js"></script>
    <script src="{{ asset('')}}assets/js/vendor/jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="{{ asset('')}}assets/js/main.js"></script>
</body>

<!-- Copied from http://demos.alithemes.com/html/stories/demo/index.html by Cyotek WebCopy 1.8.0.652, Monday, September 7, 2020, 6:05:35 PM -->
</html>