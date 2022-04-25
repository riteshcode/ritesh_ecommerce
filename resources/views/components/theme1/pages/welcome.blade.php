<!-- Slider banner -->
<section class="full-container banner margin_bottom_20">
    <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ LoadAssets('images/banner1.png') }}" alt="Los Angeles">
                <div class="carousel-caption">
                    <h3>Sample Text 1</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ LoadAssets('images/banner2.png') }}" alt="Chicago">
                <div class="carousel-caption">
                    <h3>Sample Text 2</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ LoadAssets('images/banner3.jpg') }}" alt="New York">
                <div class="carousel-caption">
                    <h3>Sample Text 3</h3>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
            <li data-target="#mainSlider" data-slide-to="1"></li>
            <li data-target="#mainSlider" data-slide-to="2"></li>
        </ul>
</section>
<!-- container -->
<section class="full-container spacialCard margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="spacialcardBox">
                    <div class="spacialcardInner">
                        <div class="spacialbox1">
                            <div class="spacialImg"><a href="#"><img src="{{ LoadAssets('images/img1.png') }}"></a>
                            </div>
                            <!--spacialImg-->
                            <div class="spacialDetail">
                                <p class="cardDetails">CATCH BIG DEALS ON DRY FRUITS</p>
                                <a href="#" class="shopNow">Shop Now<i class="fa fa-angle-right"></i></a>
                            </div>
                            <!--spacialDetail-->
                        </div>
                        <!--spacialbox1-->
                    </div>
                    <!--spacialcardInner-->
                    <div class="spacialcardInner">
                        <div class="spacialbox1">
                            <div class="spacialImg"><a href="#"><img src="{{ LoadAssets('images/img2.png') }}"></a>
                            </div>
                            <!--spacialImg-->
                            <div class="spacialDetail">
                                <p class="cardDetails">FRESH SPICES BEST IN QUALITY</p>
                                <a href="#" class="shopNow"><span class="upto">UP<br>TO</span><span
                                        class="offer">70%</span><i class="fa fa-angle-right"></i></a>
                            </div>
                            <!--spacialDetail-->
                        </div>
                        <!--spacialbox1-->
                    </div>
                    <!--spacialcardInner-->
                    <div class="spacialcardInner">
                        <div class="spacialbox1">
                            <div class="spacialImg"><a href="#"><img src="{{ LoadAssets('images/img3.png') }}"></a>
                            </div>
                            <!--spacialImg-->
                            <div class="spacialDetail">
                                <p class="cardDetails">SHOP THE HOTTEST PRODUCTS</p>
                                <a href="#" class="shopNow">Shop Now<i class="fa fa-angle-right"></i></a>
                            </div>
                            <!--spacialDetail-->
                        </div>
                        <!--spacialbox1-->
                    </div>
                    <!--spacialcardInner-->
                </div>
                <!--spacialcardBox-->
            </div>
        </div><!-- row -->
    </div>
</section><!-- container -->
<section class="full-container featured margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="featuredBox">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#NewArrival">New Arrival</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">On Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">Top Rated</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="NewArrival" class="tab-pane active">
                            <div class="productDetail">

                                <x-Theme1.SharedComponent.NewArrival />

                            </div><!-- productDetail -->
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="productDetail">
                                <div class="productBox">
                                    <div class="productBoxInner">
                                        <span class="flavour">Spices</span>
                                        <a href="#" class="productName">Buffallo Seasoning 500g Pack</a>
                                        <a href="#" class="productImg"><img
                                                src="{{ LoadAssets('images/img4.png') }}"></a>
                                        <p class="priceList">
                                            <span class="mainPrice">Rs. 685,00</span>
                                            <strike class="offerPrice">Rs. 2 299,00</strike>
                                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </p>
                                        <select class="rateList">
                                            <option>Rs 20 - 1kg</option>
                                            <option>Rs 60 - 2kg</option>
                                            <option>Rs 30 - 200gm</option>
                                            <option>Rs 60 - 400gm</option>
                                        </select>
                                    </div><!-- productBoxInner -->
                                </div><!-- productBox -->
                            </div><!-- productDetail -->
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="productDetail">
                                <div class="productBox">
                                    <div class="productBoxInner">
                                        <span class="flavour">Spices</span>
                                        <a href="#" class="productName">Buffallo Seasoning 500g Pack</a>
                                        <a href="#" class="productImg"><img
                                                src="{{ LoadAssets('images/img4.png') }}"></a>
                                        <p class="priceList">
                                            <span class="mainPrice">Rs. 685,00</span>
                                            <strike class="offerPrice">Rs. 2 299,00</strike>
                                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </p>
                                        <select class="rateList">
                                            <option>Rs 20 - 1kg</option>
                                            <option>Rs 60 - 2kg</option>
                                            <option>Rs 30 - 200gm</option>
                                            <option>Rs 60 - 400gm</option>
                                        </select>
                                    </div><!-- productBoxInner -->
                                </div><!-- productBox -->
                            </div><!-- productDetail -->
                        </div>
                    </div>
                </div>
                <!--featuredBox-->
            </div>
        </div>
    </div><!-- row -->
    </div>
</section><!-- container -->
<section class="full-container bestsellers margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headdingBox">
                    <h3 class="headdingLine">Bestsellers</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bestsellersBox">
                    <div class="productBox">
                        <div class="productBoxInner">
                            <div class="imgPart"><a href="#" class="productImg"><img
                                        src="{{ LoadAssets('images/img2.png') }}"></a></div>
                            <div class="bestsellersDetail">
                                <span class="flavour">Pickles</span>
                                <a href="#" class="productName">Charito Mix 810 G2</a>
                                <p class="priceList">
                                    <span class="mainPrice">Rs. 685,00</span>
                                    <strike class="offerPrice">Rs. 2 299,00</strike>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                                <select class="rateList">
                                    <option>Rs 20 - 1kg</option>
                                    <option>Rs 60 - 2kg</option>
                                    <option>Rs 30 - 200gm</option>
                                    <option>Rs 60 - 400gm</option>
                                </select>
                            </div>
                            <!-- bestsellersDetail -->
                        </div>
                        <!-- productBoxInner -->
                    </div>
                    <!-- productBox -->
                    <div class="productBox">
                        <div class="productBoxInner">
                            <div class="imgPart"><a href="#" class="productImg"><img
                                        src="{{ LoadAssets('images/img2.png') }}"></a></div>
                            <div class="bestsellersDetail">
                                <span class="flavour">Pickles</span>
                                <a href="#" class="productName">Charito Mix 810 G2</a>
                                <p class="priceList">
                                    <span class="mainPrice">Rs. 685,00</span>
                                    <strike class="offerPrice">Rs. 2 299,00</strike>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                                <select class="rateList">
                                    <option>Rs 20 - 1kg</option>
                                    <option>Rs 60 - 2kg</option>
                                    <option>Rs 30 - 200gm</option>
                                    <option>Rs 60 - 400gm</option>
                                </select>
                            </div>
                            <!-- bestsellersDetail -->
                        </div>
                        <!-- productBoxInner -->
                    </div>
                    <!-- productBox -->
                    <div class="productBox">
                        <div class="productBoxInner">
                            <div class="imgPart"><a href="#" class="productImg"><img
                                        src="{{ LoadAssets('images/img2.png') }}"></a></div>
                            <div class="bestsellersDetail">
                                <span class="flavour">Pickles</span>
                                <a href="#" class="productName">Charito Mix 810 G2</a>
                                <p class="priceList">
                                    <span class="mainPrice">Rs. 685,00</span>
                                    <strike class="offerPrice">Rs. 2 299,00</strike>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                                <select class="rateList">
                                    <option>Rs 20 - 1kg</option>
                                    <option>Rs 60 - 2kg</option>
                                    <option>Rs 30 - 200gm</option>
                                    <option>Rs 60 - 400gm</option>
                                </select>
                            </div>
                            <!-- bestsellersDetail -->
                        </div>
                        <!-- productBoxInner -->
                    </div>
                    <!-- productBox -->
                    <div class="productBox">
                        <div class="productBoxInner">
                            <div class="imgPart"><a href="#" class="productImg"><img
                                        src="{{ LoadAssets('images/img2.png') }}"></a></div>
                            <div class="bestsellersDetail">
                                <span class="flavour">Pickles</span>
                                <a href="#" class="productName">Charito Mix 810 G2</a>
                                <p class="priceList">
                                    <span class="mainPrice">Rs. 685,00</span>
                                    <strike class="offerPrice">Rs. 2 299,00</strike>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                                <select class="rateList">
                                    <option>Rs 20 - 1kg</option>
                                    <option>Rs 60 - 2kg</option>
                                    <option>Rs 30 - 200gm</option>
                                    <option>Rs 60 - 400gm</option>
                                </select>
                            </div>
                            <!-- bestsellersDetail -->
                        </div>
                        <!-- productBoxInner -->
                    </div>
                    <!-- productBox -->
                    <div class="productBox">
                        <div class="productBoxInner">
                            <div class="imgPart"><a href="#" class="productImg"><img
                                        src="{{ LoadAssets('images/img2.png') }}"></a></div>
                            <div class="bestsellersDetail">
                                <span class="flavour">Pickles</span>
                                <a href="#" class="productName">Charito Mix 810 G2</a>
                                <p class="priceList">
                                    <span class="mainPrice">Rs. 685,00</span>
                                    <strike class="offerPrice">Rs. 2 299,00</strike>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                                <select class="rateList">
                                    <option>Rs 20 - 1kg</option>
                                    <option>Rs 60 - 2kg</option>
                                    <option>Rs 30 - 200gm</option>
                                    <option>Rs 60 - 400gm</option>
                                </select>
                            </div>
                            <!-- bestsellersDetail -->
                        </div>
                        <!-- productBoxInner -->
                    </div>
                    <!-- productBox -->
                    <div class="productBox">
                        <div class="productBoxInner">
                            <div class="imgPart"><a href="#" class="productImg"><img
                                        src="{{ LoadAssets('images/img2.png') }}"></a></div>
                            <div class="bestsellersDetail">
                                <span class="flavour">Pickles</span>
                                <a href="#" class="productName">Charito Mix 810 G2</a>
                                <p class="priceList">
                                    <span class="mainPrice">Rs. 685,00</span>
                                    <strike class="offerPrice">Rs. 2 299,00</strike>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </p>
                                <select class="rateList">
                                    <option>Rs 20 - 1kg</option>
                                    <option>Rs 60 - 2kg</option>
                                    <option>Rs 30 - 200gm</option>
                                    <option>Rs 60 - 400gm</option>
                                </select>
                            </div>
                            <!-- bestsellersDetail -->
                        </div>
                        <!-- productBoxInner -->
                    </div>
                    <!-- productBox -->
                </div>
                <!-- bestsellersBox -->
            </div>
        </div>
        <!-- row -->
    </div>
</section>
<!-- container -->
<section class="full-container saveBig margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="saveBigBox">
                    <a href="#"> <img src="{{ LoadAssets('images/ads.png') }}"></a>
                </div>
                <!-- saveBigBox -->
            </div>
        </div>
        <!-- row -->
    </div>
</section>
<!-- container -->
<section class="full-container recentlyViewed margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headdingBox">
                    <h3 class="headdingLine">Recently Viewed</h3>
                </div>
                <!-- headdingBox -->
            </div>
        </div>
        <div class="row rview">
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="{{ LoadAssets('images/img6.png') }}"></a>
                        <p class="priceList">
                            <span class="mainPrice">Rs. 685,00</span>
                            <strike class="offerPrice">Rs. 2 299,00</strike>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </p>
                        <select class="rateList">
                            <option>Rs 20 - 1kg</option>
                            <option>Rs 60 - 2kg</option>
                            <option>Rs 30 - 200gm</option>
                            <option>Rs 60 - 400gm</option>
                        </select>
                    </div>
                    <!-- productBoxInner -->
                </div>
                <!-- productBox -->
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="{{ LoadAssets('images/img2.png') }}"></a>
                        <p class="priceList">
                            <strike class="offerPrice">Rs. 2 299,00</strike>
                            <span class="mainPrice">Rs. 685,00</span>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </p>
                        <select class="rateList">
                            <option>Rs 20 - 1kg</option>
                            <option>Rs 60 - 2kg</option>
                            <option>Rs 30 - 200gm</option>
                            <option>Rs 60 - 400gm</option>
                        </select>
                    </div>
                    <!-- productBoxInner -->
                </div>
                <!-- productBox -->
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="{{ LoadAssets('images/img3.png') }}"></a>
                        <p class="priceList">
                            <span class="mainPrice">Rs. 685,00</span>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </p>
                        <select class="rateList">
                            <option>Rs 20 - 1kg</option>
                            <option>Rs 60 - 2kg</option>
                            <option>Rs 30 - 200gm</option>
                            <option>Rs 60 - 400gm</option>
                        </select>
                    </div>
                    <!-- productBoxInner -->
                </div>
                <!-- productBox -->
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="{{ LoadAssets('images/img4.png') }}"></a>
                        <p class="priceList">
                            <span class="mainPrice">Rs. 685,00</span>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </p>
                        <select class="rateList">
                            <option>Rs 20 - 1kg</option>
                            <option>Rs 60 - 2kg</option>
                            <option>Rs 30 - 200gm</option>
                            <option>Rs 60 - 400gm</option>
                        </select>
                    </div>
                    <!-- productBoxInner -->
                </div>
                <!-- productBox -->
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="{{ LoadAssets('images/img5.png') }}"></a>
                        <p class="priceList">
                            <span class="mainPrice">Rs. 685,00</span>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </p>
                        <select class="rateList">
                            <option>Rs 20 - 1kg</option>
                            <option>Rs 60 - 2kg</option>
                            <option>Rs 30 - 200gm</option>
                            <option>Rs 60 - 400gm</option>
                        </select>
                    </div>
                    <!-- productBoxInner -->
                </div>
                <!-- productBox -->
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="{{ LoadAssets('images/img1.png') }}"></a>
                        <p class="priceList">
                            <span class="mainPrice">Rs. 685,00</span>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </p>
                        <select class="rateList">
                            <option>Rs 20 - 1kg</option>
                            <option>Rs 60 - 2kg</option>
                            <option>Rs 30 - 200gm</option>
                            <option>Rs 60 - 400gm</option>
                        </select>
                    </div>
                    <!-- productBoxInner -->
                </div>
                <!-- productBox -->
            </div>
        </div>
        <!-- row -->
    </div>
</section>
<!-- container -->
<section class="full-container brand margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme owl-brand">
                    <a class="item" href="#"><img src="{{ LoadAssets('images/company4.png') }}" /></a>
                    <a class="item" href="#"><img src="{{ LoadAssets('images/company1.png') }}" /></a>
                    <a class="item" href="#"><img src="{{ LoadAssets('images/company2.png') }}" /></a>
                    <a class="item" href="#"><img src="{{ LoadAssets('images/company3.png') }}" /></a>
                    <a class="item" href="#"><img src="{{ LoadAssets('images/company4.png') }}" /></a>
                    <a class="item" href="#"><img src="{{ LoadAssets('images/company1.png') }}" /></a>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
</section>
<!-- container -->