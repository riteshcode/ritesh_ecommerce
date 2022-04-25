<section class="full-container chainGrid margin_bottom_10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="chainGridBox">
                    <li><a href="#"><i class="fa fa-home"></i></a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#" class="active">Smartphones & Tablets</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#" class="active">Smartphones </a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#">Smartphones Shop</a></li>
                </ul>
            </div>
        </div><!-- row -->
    </div>
</section><!-- container -->

<section class="full-container singleProduct margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="images/img1.png" class="singleProdImg">
            </div>
            <div class="col-md-8 ProdDeatils">
                <div class="prodTitle"><span>Smartphones</span></div>
                <div class="prodName">
                    <h2>{{ $products->products_name ?? '' }}</h2>
                </div>
                <div class="Availability">
                    <p>Availability :<a href="#">In stock</a></p>
                </div>
                <div class="wishcompBox"><span><a href="#"><i class="fa fa-refresh"></i>Compare</a> <a href="#"><i
                                class="fa fa-heart-o"></i>Add to Wishlist</a></span></div>
                <div class="productInfo">
                    <ul>
                        <li>4.5 inch HD Touch Screen (1280 x 720)</li>
                        <li>Android 4.4 KitKat OS</li>
                        <li>1.4 GHz Quad Core™ Processor</li>
                        <li>20 MP front and 28 megapixel CMOS rear camera</li>
                    </ul>
                    <p>Nullam mollis vel ipsum sit amet fringilla. Suspendisse mattis tortor a dui euismod finibus ac
                        eget metus. </p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                </div>
                <div class="rating">
                    <h2> {{ currencyFormat($products->product_sale_price ?? '0.00') }} </h2><strike>$2 299,00</strike>
                </div>
                <div class="quanityBox">
                    <!-- proudtc attribue -->
                    @if(!empty($products->productAttribute))
                    @foreach($products->productAttribute as $attribute)
                    <div class="product-size">
                        <span>{{ ucfirst($attribute->option_name ?? '')}}</span>
                        @if( isset($attribute->option_value_list) && !empty($attribute->option_value_list))
                        <select onchange="chooseAttributes(this)">
                            @foreach($attribute->option_value_list as $option_value)
                            <option value="{{ $option_value->options_values_id}}">
                                {{ $option_value->productOptionsValue->products_options_values_name}} </option>
                            @endforeach
                        </select>
                        @endif
                    </div>
                    @endforeach
                    @endif
                    <!-- end product attribute -->
                    <!-- // cart -->
                    <div class="cart-plus-minus">

                    </div>
                    <div class="pro-details-cart btn-hover">
                        <a href="javascript:void(0);"> +
                            Add To Cart
                        </a>
                    </div>

                    <!-- end cart -->
                    <input class="cart-plus-minus-box" type="number" id="qtyItemAdd" name="qtybutton" value="1" />
                    <button class="redbtn" onclick="addToCartFromDetail({{ $products->product_id }})"><i
                            class="fa fa-shopping-cart"></i>Add to Cart</button>
                </div>
            </div>
        </div><!-- row -->
    </div>
</section><!-- container -->

<section class="full-container singleProductNav margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="description">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Specification</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="tab-pane active descriptionBox">
                            {{ $products->products_description ?? 'Lorem ipsum dolor sit amet, consectetur adipisic elit
                            eiusm
                            tempor incidid ut labore et dolore
                            magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco' }}
                        </div>

                        <div id="menu1" class="tab-pane fade descriptionBox">
                            {{ $products->products_description ?? 'Lorem ipsum dolor sit amet, consectetur adipisic elit
                            eiusm
                            tempor incidid ut labore et dolore
                            magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco' }}
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- row -->
    </div>
</section><!-- container -->

<section class="full-container recentlyViewed margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headdingBox">
                    <h3 class="headdingLine">Related products</h3>
                </div><!-- headdingBox -->
            </div>
        </div>

        <div class="row rview">
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="images/img6.png"></a>
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
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="images/img2.png"></a>
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
                    </div><!-- productBoxInner -->
                </div><!-- productBox -->
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="images/img3.png"></a>
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
                    </div><!-- productBoxInner -->
                </div><!-- productBox -->
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="images/img4.png"></a>
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
                    </div><!-- productBoxInner -->
                </div><!-- productBox -->
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="images/img5.png"></a>
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
                    </div><!-- productBoxInner -->
                </div><!-- productBox -->
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="productBox">
                    <div class="productBoxInner">
                        <span class="flavour">Dry Fruits</span>
                        <a href="#" class="productName">Dry Fruits</a>
                        <a href="#" class="productImg"><img src="images/img1.png"></a>
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
                    </div><!-- productBoxInner -->
                </div><!-- productBox -->
            </div>
        </div><!-- row -->
    </div>
</section>


@push('scripts')
<script>
let choosen_attributes = [];

function addToCartFromDetail(product_id) {
    var qtyItemAdd = $('#qtyItemAdd').val();
    let attributes = choosen_attributes.join(',');
    addToCart(product_id, qtyItemAdd, attributes);
}

function chooseAttributes(params) {
    if (!choosen_attributes.includes(params.value)) {
        choosen_attributes.push(params.value);
    }
}
</script>
@endpush