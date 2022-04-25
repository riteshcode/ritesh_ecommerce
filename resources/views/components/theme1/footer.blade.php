<section class="full-container greenRibbon">
    <div class="container">
        <div class="row">
            <div class="col-md-3"><label><i class="fa fa-paper-plane-o"></i> Sign up to Newsletter</label></div>
            <div class="col-md-4">
                <p>...and receive $20 coupon for first shopping.</p>
            </div>
            <div class="col-md-5">
                <div class="newsltrBox">
                    <div class="newsltrForm">
                        <input type="text" class="sBox" placeholder="Enter your email address" />
                        <button class="sButton">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
</section>
<!-- container -->
<footer class="full-container footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footerlogo"><a href="#"><img src="{{ LoadAssets('images/logo.png') }}"></a></div>
                <div class="gotQuestion">
                    <p class="hedphone"><i class="fa fa-headphones"></i></p>
                    <p class="queDetails">
                        <label>Got questions? Call us 24/7!</label>
                        <span>(800) 8001-8588, (0600) 874 548</span>
                    </p>
                    <p class="contactInfo">
                        <label>Contact info</label>
                        <span>17 Princess Road, London, Greater London NW1 8JR, UK</span>
                    </p>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                <h2>Find it Fast</h2>
                <ul class="findFast">
                    <li><a href="#">Laptops & Computers</a></li>
                    <li><a href="#">Cameras & Photography</a></li>
                    <li><a href="#">Smart Phones & Tablets</a></li>
                    <li><a href="#">Video Games & Consoles</a></li>
                    <li><a href="#">TV & Audio</a></li>
                    <li><a href="#">Gadgets</a></li>
                    <li><a href="#">Car Electronic & GPS</a></li>
                    <li><a href="#">Printers & InkSoftware</a></li>
                    <li><a href="#">Office Supplies</a></li>
                    <li><a href="#">Computer Components</a></li>
                    <li><a href="#">Accesories</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <h2>Customer Care</h2>
                <ul class="customerCare">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Order Tracking</a></li>
                    <li><a href="#">Wish List</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#">Returns / Exchange</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Product Support</a></li>
                </ul>
            </div>
            <!-- col -3 -->
        </div>
        <!-- row -->
    </div>
</footer>
<footer class="full-container copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 float-left">
                <p class="copyrightText">@ Sardarji Store - All rights Reserved</p>
            </div>
            <div class="col-md-6 float-right">
                <div class="company">
                    <img src="{{ LoadAssets('images/comp1.png') }}" />
                    <img src="{{ LoadAssets('images/comp2.png') }}" />
                    <img src="{{ LoadAssets('images/comp3.png') }}" />
                    <img src="{{ LoadAssets('images/comp4.png') }}" />
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
</footer>

<!-- // modal  -->
<div class="modal fade" id="productModalShow" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <!--Product Detail Modal-->
                <div id="product-detail-modal"></div>
                <!--End of Product Detail Modal-->
            </div>
        </div>
    </div>
</div>