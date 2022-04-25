@if($viewtype == 'grid')
<div class="productBox">
    <div class="productBoxInner">
        <span class="flavour">{{ $product->product_model ?? '' }}</span>
        <a href="{{ url('product/'.$product->product_slug) }}"
            class="productName">{{ sortStringName($product->products_name ?? '') }}</a>
        <a href="{{ url('product/'.$product->product_slug) }}" class="productImg"><img
                src="{{getFullImageUrl($product->product_image)}}"></a>
        <p class="priceList">
            <span class="mainPrice">{{ currencyFormat($product->product_sale_price) }}</span>
            <strike class="offerPrice">
                @if($product->product_discount_type == 'flat')
                {{ currencyFormat($product->product_discount_amount) }}
                @else
                {{ currencyFormat( $product->product_discount_amount )
                        }}% @endif
            </strike>
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

@endif @if($viewtype == 'list')

<div class="shop-list-wrap mb-30px scroll-zoom">
    <div class="row list-product m-0px">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="left-img">
                        <div class="img-block">
                            <a href="{{ url('product/'.$product->product_slug) }}" class="thumbnail">
                                <img class="first-img" src="{{getFullImageUrl($product->product_image)}}" alt="" />
                                <img class="second-img" src="{{getFullImageUrl($product->product_image)}}" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" onclick="showfunction('{{ $product->product_slug }}')">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">
                                {{ $product->product_condition == 1 ? 'New' : 'Refurbished' }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="product-desc-wrap">
                        <div class="product-decs">
                            <a class="inner-link"
                                href="{{ url('product/'.$product->product_slug) }}"><span>{{ $product->product_model ?? '' }}</span></a>
                            <h2>
                                <a href="{{ url('product/'.$product->product_slug) }}" class="product-link">
                                    {{ $product->products_name ?? '' }}
                                </a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">
                                        {{ currencyFormat($product->product_sale_price) }}
                                    </li>
                                </ul>
                            </div>
                            <div class="product-intro-info">
                                <p>
                                    Create a cool and sporty look with the FILA®
                                    Locker Room Varsity Jacket.
                                </p>
                                <p>Comfortable cotton-blend fabrication.</p>
                                <p>
                                    Classic varsity jacket features brand
                                    details throughout.
                                </p>
                                <p>Flat knit collar.</p>
                            </div>
                            <div class="in-stock">
                                Availability: <span>299 In Stock</span>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart">
                                    <a class="cart-btn" href="#">ADD TO CART
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif