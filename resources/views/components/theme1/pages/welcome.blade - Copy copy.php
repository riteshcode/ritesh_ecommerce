<!-- Slider Arae Start -->
<div class="slider-area">
    <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
        <!-- Slider Single Item Start -->
        <div class="slider-height-10 d-flex align-items-start justify-content-start bg-img"
            style="background-image: url(assets/images/slider-image/sample-26.jpg);">
            <div class="container">
                <div class="slider-content-13 slider-animated-1 text-left">
                    <span class="animated">GREAT PLACE. GREAT MIND.</span>
                    <h1 class="animated">
                        New Designer Furniture<br />
                        <strong>Elite Collections!</strong>
                    </h1>
                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                </div>
            </div>
        </div>
        <!-- Slider Single Item End -->
        <!-- Slider Single Item Start -->
        <div class="slider-height-10 d-flex align-items-start justify-content-start bg-img"
            style="background-image: url(assets/images/slider-image/sample-27.jpg);">
            <div class="container">
                <div class="slider-content-13 slider-animated-1 text-left">
                    <span class="animated">OUTDOOR & INDOOR DESIGN</span>
                    <h1 class="animated">
                        New Collection<br />
                        <strong>Home Relaxing Chair</strong>
                    </h1>
                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                </div>
            </div>
        </div>
        <!-- Slider Single Item End -->
    </div>
</div>
<!-- Slider Arae End -->
<!-- Category Area Start -->
<section class="categorie-area categorie-area-2 ptb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- Section Title -->
                <div class="section-title mt-res-sx-30px mt-res-md-30px underline-shape">
                    <h2>Popular Categories</h2>
                    <p>Add Popular Categories to weekly line up</p>
                </div>
                <!-- Section Title -->
            </div>
        </div>
        <!-- Category Slider Start -->
        <div class="category-slider-2 owl-carousel owl-nav-style-3">
            <!-- Single item -->
            @foreach($popular_category as $key=>$value)
            <div class="category-item">
                <div class="category-list">
                    <div class="category-thumb">
                        <a href="{{url('category/'.$value->categories_slug)}}">  
                            <img src="{{getFullImageUrl($value->categories_image)}}" alt="" />
                        </a>
                    </div>
                    <div class="desc-listcategoreis">
                        <div class="name_categories">
                            <h4>{{$value->category_name ??  'Test cat'}}</h4>
                        </div>
                        <span class="number_product">17 Products</span>
                        <a href="{{url('category/'.$value->categories_slug)}}"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End of Single item -->
        </div>
    </div>
</section>
<!-- Category Area End  -->
<!-- Banner Area Start -->
<div class="banner-3-area mt-0px mb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-res-xs-30 mb-res-sm-30">
                <div class="banner-wrapper banner-box">
                    <a href="shop-4-column.html"><img src="{{ LoadAssets('assets/images/banner-image/37.jpg') }}" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="banner-wrapper banner-box">
                    <a href="shop-4-column.html"><img src="{{ LoadAssets('assets/images/banner-image/38.jpg') }}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Recent Add Product Area Start -->
<x-Theme1.SharedComponent.NewArrival />

<!-- Recent product area end -->
<!-- Blog area Start -->
<section class="blog-area mb-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- Section title -->
                <div class="section-title underline-shape">
                    <h2>Latest Blogs</h2>
                    <p>Present posts in a best way to highlight interesting moments of your blog.</p>
                </div>
                <!-- Section title -->
            </div>
        </div>
        <!-- Blog Slider Start -->
        <div class="blog-slider-active owl-carousel owl-nav-style-3">
            <!-- single item -->
            <article class="blog-post">
                <div class="blog-post-top">
                    <div class="blog-img banner-wrapper">
                        <a href="#"><img src="{{ LoadAssets('assets/images/blog-image/blog-16') }}.jpg" alt="" /></a>
                    </div>
                    <a href="blog-grid-left-sidebar.html" class="blog-meta">Furniture</a>
                </div>
                <div class="blog-post-content">
                    <h4 class="blog-post-heading"><a href="blog-single-left-sidebar.html">This is First Post For
                            XipBlog</a></h4>
                    <p class="blog-text">
                        Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                        has been the industrys ...
                    </p>
                    <a class="read-more-btn" href="blog-single-left-sidebar.html"> Read More <i
                            class="ion-android-arrow-dropright-circle"></i></a>
                </div>
            </article>
            <!-- single item -->
            <article class="blog-post">
                <div class="blog-post-top">
                    <div class="blog-img banner-wrapper">
                        <a href="#"><img src="{{ LoadAssets('assets/images/blog-image/blog-13') }}.jpg" alt="" /></a>
                    </div>
                    <a href="blog-grid-left-sidebar.html" class="blog-meta">Furniture</a>
                </div>
                <div class="blog-post-content">
                    <h4 class="blog-post-heading"><a href="blog-single-left-sidebar.html">This is Secound Post
                            For XipBlog</a></h4>
                    <p class="blog-text">
                        Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                        has been the industrys ...
                    </p>
                    <a class="read-more-btn" href="blog-single-left-sidebar.html"> Read More <i
                            class="ion-android-arrow-dropright-circle"></i></a>
                </div>
            </article>
            <!-- single item -->
            <article class="blog-post">
                <div class="blog-post-top">
                    <div class="blog-img banner-wrapper">
                        <a href="#"><img src="{{ LoadAssets('assets/images/blog-image/blog-14') }}.jpg" alt="" /></a>
                    </div>
                    <a href="blog-grid-left-sidebar.html" class="blog-meta">Furniture</a>
                </div>
                <div class="blog-post-content">
                    <h4 class="blog-post-heading"><a href="blog-single-left-sidebar.html">This is Third Post For
                            XipBlog</a></h4>
                    <p class="blog-text">
                        Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                        has been the industrys ...
                    </p>
                    <a class="read-more-btn" href="blog-single-left-sidebar.html"> Read More <i
                            class="ion-android-arrow-dropright-circle"></i></a>
                </div>
            </article>
            <!-- single item -->
            <article class="blog-post">
                <div class="blog-post-top">
                    <div class="blog-img banner-wrapper">
                        <a href="#"><img src="{{ LoadAssets('assets/images/blog-image/blog-15') }}.jpg" alt="" /></a>
                    </div>
                    <a href="blog-grid-left-sidebar.html" class="blog-meta">Furniture</a>
                </div>
                <div class="blog-post-content">
                    <h4 class="blog-post-heading"><a href="blog-single-left-sidebar.html">This is Foruth Post
                            For XipBlog</a></h4>
                    <p class="blog-text">
                        Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                        has been the industrys ...
                    </p>
                    <a class="read-more-btn" href="blog-single-left-sidebar.html"> Read More <i
                            class="ion-android-arrow-dropright-circle"></i></a>
                </div>
            </article>
            <!-- single item -->
        </div>
        <!-- Blog Slider Start -->
    </div>
</section>
<!-- Blog Area End -->
<!-- Brand area start -->
<div class="brand-area">
    <div class="container">
        <div class="brand-slider owl-carousel owl-nav-style owl-nav-style-2">
            <div class="brand-slider-item">
                <a href="#"><img src="{{ LoadAssets('assets/images/brand-logo/1.jpg') }}" alt="" /></a>
            </div>
            <div class="brand-slider-item">
                <a href="#"><img src="{{ LoadAssets('assets/images/brand-logo/2.jpg') }}" alt="" /></a>
            </div>
            <div class="brand-slider-item">
                <a href="#"><img src="{{ LoadAssets('assets/images/brand-logo/3.jpg') }}" alt="" /></a>
            </div>
            <div class="brand-slider-item">
                <a href="#"><img src="{{ LoadAssets('assets/images/brand-logo/4.jpg') }}" alt="" /></a>
            </div>
            <div class="brand-slider-item">
                <a href="#"><img src="{{ LoadAssets('assets/images/brand-logo/5.jpg') }}" alt="" /></a>
            </div>
            <div class="brand-slider-item">
                <a href="#"><img src="{{ LoadAssets('assets/images/brand-logo/1.jpg') }}" alt="" /></a>
            </div>
            <div class="brand-slider-item">
                <a href="#"><img src="{{ LoadAssets('assets/images/brand-logo/2.jpg') }}" alt="" /></a>
            </div>
        </div>
    </div>
</div>
<!-- Brand area end -->
<!-- Category Product  Area start-->
<section class="category-product-area home-10 mt-40px mb-70px">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-9">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-4">
                        <!-- Section Title -->
                        <div class="section-title underline-shape underline-shape-left">
                            <h2>Home Furniture</h2>
                        </div>
                        <!-- Section Title -->
                        <div
                            class="category-product-slider owl-carousel responsive-owl-nav-style owl-nav-style owl-nav-style-4">
                            <!-- Single Item -->
                            <div class="feature-slider-item">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/7') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/8') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Water and
                                                Wind...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/9') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/10') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Originals Kaval
                                                Win...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€29.90</li>
                                                <li class="current-price">€21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/11') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/12') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance
                                                Fresh...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/13') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/14') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Juicy Couture
                                                Solid...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/15') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/16') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Originals Kaval
                                                Win...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/17') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/18') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance
                                                Fresh...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€29.90</li>
                                                <li class="current-price">€21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/19') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/20') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Juicy Couture
                                                Solid...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/21') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/22') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Originals Kaval
                                                Win...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€29.90</li>
                                                <li class="current-price">€21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/23') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/24') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance
                                                Fresh...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-4">
                        <!-- Section Title -->
                        <div class="section-title mt-res-sx-30px mt-res-md-30px underline-shape underline-shape-left">
                            <h2>Office Furniture</h2>
                        </div>
                        <!-- Section Title -->
                        <div
                            class="category-product-slider owl-carousel responsive-owl-nav-style owl-nav-style owl-nav-style-4">
                            <!-- Single Item -->
                            <div class="feature-slider-item">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/25') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/26') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Juicy Couture
                                                Solid...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€29.90</li>
                                                <li class="current-price">€21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/27') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/28') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Brixton Patrol
                                                Terr...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/29') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/30') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance
                                                Fresh...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/31') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/1') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Juicy Couture
                                                Solid...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€29.90</li>
                                                <li class="current-price">€21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/7') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/8') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Brixton Patrol
                                                Terr...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€10.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/9') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/10') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance
                                                Fresh...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€29.90</li>
                                                <li class="current-price">€21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/11') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/12') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Juicy Couture
                                                Solid...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€20.90</li>
                                                <li class="current-price">€15.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/13') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/14') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Brixton Patrol
                                                Terr...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/15') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/16') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance
                                                Fresh...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€29.90</li>
                                                <li class="current-price">€21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-4">
                        <!-- Section Title -->
                        <div class="section-title mt-res-sx-30px mt-res-md-30px underline-shape underline-shape-left">
                            <h2>Outdoor Furniture</h2>
                        </div>
                        <!-- Section Title -->
                        <div
                            class="category-product-slider owl-carousel responsive-owl-nav-style owl-nav-style owl-nav-style-4">
                            <!-- Single Item -->
                            <div class="feature-slider-item">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/17') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/18') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Water and
                                                Wind...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/19') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/20') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Luxury
                                                Men's...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€19.90</li>
                                                <li class="current-price">€15.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/21') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/22') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Trans-Weight
                                                Ho...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€14.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/23') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/24') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Juicy Couture
                                                Solid...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€12.90</li>
                                                <li class="current-price">€11.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/25') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/26') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Luxury
                                                Slim...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€9.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/27') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/28') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Trans-Weight
                                                Ho...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€29.90</li>
                                                <li class="current-price">€21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                            <div class="feature-slider-item">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/29') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/30') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Juicy Couture
                                                Solid...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€15.90</li>
                                                <li class="current-price">€10.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/31') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/7') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Luxury
                                                Slim...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€9.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{ LoadAssets('assets/images/product-image/furniture/8') }}.jpg"
                                                alt="" />
                                            <img class="second-img" src="{{ LoadAssets('assets/images/product-image/furniture/9') }}.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Trans-Weight
                                                Ho...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€25.90</li>
                                                <li class="current-price">€21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Item -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 d-lg-none d-xl-block col-xl-3 mtb-res-sm-30 mtb-res-md-30">
                <div class="banner-inner">
                    <a href="shop-4-column.html"><img src="{{ LoadAssets('assets/images/banner-image/39.jpg') }}" alt=""
                            class="img-responsive" /></a>
                </div>
            </div>
        </div>
    </div>
</section>