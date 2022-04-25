<div class="row">
    <div class="col-md-5 col-sm-12 col-xs-12">
        <div class="tab-content quickview-big-img">
            <div id="pro-1" class="tab-pane fade show active">
                <img
                   src="{{getFullImageUrl($response['product_image'])}}"
                    alt=""
                />
            </div>
            <div id="pro-2" class="tab-pane fade">
                <img
                   src="{{getFullImageUrl($response['product_image'])}}"
                    alt=""
                />
            </div>
            <div id="pro-3" class="tab-pane fade">
                <img
                src="{{getFullImageUrl($response['product_image'])}}"
                    alt=""
                />
            </div>
            <div id="pro-4" class="tab-pane fade">
                <img
                src="{{getFullImageUrl($response['product_image'])}}"
                    alt=""
                />
            </div>
        </div>
        <!-- Thumbnail Large Image End -->
        <!-- Thumbnail Image End -->
        <div class="quickview-wrap mt-15">
            <div
                class="quickview-slide-active owl-carousel nav owl-nav-style owl-nav-style-2"
                role="tablist">

                <a class="active" data-bs-toggle="tab" href="#pro-1"
                    ><img
                       src="{{getFullImageUrl($response['product_image'])}}"
                        alt=""
                /></a>
                <a data-bs-toggle="tab" href="#pro-2"
                    ><img
                    src="{{getFullImageUrl($response['product_image'])}}"
                        alt=""
                /></a>
                <a data-bs-toggle="tab" href="#pro-3"
                    ><img
                    src="{{getFullImageUrl($response['product_image'])}}"
                        alt=""
                /></a>
                <a data-bs-toggle="tab" href="#pro-4"
                    ><img
                    src="{{getFullImageUrl($response['product_image'])}}"
                        alt=""
                /></a>
            </div>
        </div>
    </div>

    <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-details-content quickview-content">
            <h2>{{$response['products_name']}}</h2>
            <p class="reference">Reference:<span> demo_17</span></p>
            <div class="pro-details-rating-wrap">
                <div class="rating-product">
                    <i class="ion-android-star"></i>
                    <i class="ion-android-star"></i>
                    <i class="ion-android-star"></i>
                    <i class="ion-android-star"></i>
                    <i class="ion-android-star"></i>
                </div>
                <span class="read-review"
                    ><a class="reviews" href="#">Read reviews (1)</a></span
                >
            </div>
            <div class="pricing-meta">
                <ul>
                    <li class="old-price not-cut">{{ currencyFormat($response['product_sale_price']) }}</li>
                </ul>
            </div>
            <p>
               {{$response['products_description']}}
            </p>
            <div class="pro-details-size-color d-flex">
            <!--<div class="pro-details-size-color">
                <div class="pro-details-color-wrap">
                    <span>Color</span>
                    <div class="pro-details-color-content">
                        <ul>
                            <li class="blue"></li>
                            <li class="maroon active"></li>
                        </ul>
                    </div>
                </div>
            </div>-->

            @if(!empty($response->productAttribute))
            @foreach($response->productAttribute as $attribute)
            <div class="product-size">
                <span>{{ ucfirst($attribute['option_name'] ?? '')}}</span>
                @if( isset($attribute['option_value_list']) && !empty($attribute['option_value_list']))
                <select onchange="chooseModalAttributes(this)">
                    @foreach($attribute->option_value_list as $option_value)
                    <option value="{{ $option_value['options_values_id']}}">
                        {{ $option_value->productOptionsValue->products_options_values_name}} </option>
                    @endforeach
                </select>
                @endif
            </div>
            @endforeach
            @endif
            </div>

            <div class="pro-details-quality">
                <div class="cart-plus-minus">
                    <input
                        class="cart-plus-minus-box"
                        type="text"
                        name="modalqtybutton"
                        value="1"
                        id="modalqtyItemAdd"
                    />
                </div>
                <div class="pro-details-cart btn-hover">
                    <a href="javascript:void(0);" onclick="addToCartFromModalDetail({{$response['product_id']}})"> +
                        Add To Cart
                    </a>
                </div>
            </div>
            <div class="pro-details-wish-com">
                <div class="pro-details-wishlist">
                    <a href="#"
                        ><i class="ion-android-favorite-outline"></i>Add to
                        wishlist</a
                    >
                </div>
                <div class="pro-details-compare">
                    <a href="#"
                        ><i class="ion-ios-shuffle-strong"></i>Add to compare</a
                    >
                </div>
            </div>
            <div class="pro-details-social-info">
                <span>Share</span>
                <div class="social-info">
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

