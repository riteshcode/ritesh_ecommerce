@push('styles')
<style>
    .your-order-area .Place-order>button {
        background-color: #4fb68b;
        color: #fff;
        display: block;
        font-weight: 700;
        letter-spacing: 1px;
        line-height: 1;
        padding: 18px 20px;
        text-align: center;
        text-transform: uppercase;
        border-radius: 50px;
        z-index: 9;
    }
</style>
@endpush
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Checkout Page</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="index.html">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
<!-- checkout area start -->
<div class="checkout-area mt-60px mb-40px">
    <form action="{{ route('placeOrder') }}" method="POST" id="placeOrderForm">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>First Name</label>
                                    <input type="text" name="customer_name" />
                                    @if ($errors->has('customer_name'))
                                    <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Last Name</label>
                                    <input type="text" name="customer_last_name" />
                                    @if ($errors->has('customer_last_name'))
                                    <span class="text-danger">{{ $errors->first('customer_last_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Company Name</label>
                                    <input type="text" name="customer_company" />
                                    @if ($errors->has('customer_company'))
                                    <span class="text-danger">{{ $errors->first('customer_company') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select mb-20px">
                                    <label>Country</label>
                                    <select name="customer_country">
                                        <option selected value="" disabled>Select a country</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                                @if ($errors->has('customer_country'))
                                <span class="text-danger">{{ $errors->first('customer_country') }}</span>
                                @endif
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Street Address</label>
                                    <input class="billing-address" placeholder="House number and street name" type="text" name="customer_address" />
                                    @if ($errors->has('customer_address'))
                                    <span class="text-danger">{{ $errors->first('customer_address') }}</span>
                                    @endif
                                    <input placeholder="Apartment, suite, unit etc." type="text" name="customer_address" />
                                    @if ($errors->has('customer_address'))
                                    <span class="text-danger">{{ $errors->first('customer_address') }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Town / City</label>
                                    <input type="text" name="customer_city" />
                                    @if ($errors->has('customer_city'))
                                    <span class="text-danger">{{ $errors->first('customer_city') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>State / County</label>
                                    <input type="text" name="customer_state" />
                                    @if ($errors->has('customer_state'))
                                    <span class="text-danger">{{ $errors->first('customer_state') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Postcode / ZIP</label>
                                    <input type="text" name="customer_postcode" />
                                    @if ($errors->has('customer_postcode'))
                                    <span class="text-danger">{{ $errors->first('customer_postcode') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Phone</label>
                                    <input type="text" name="customer_phone" />
                                    @if ($errors->has('customer_phone'))
                                    <span class="text-danger">{{ $errors->first('customer_phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Email Address</label>
                                    <input type="text" name="customer_email" />
                                    @if ($errors->has('customer_email'))
                                    <span class="text-danger">{{ $errors->first('customer_email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="checkout-account mt-25">
                            <input class="checkout-toggle" type="checkbox" name="is_shipping_diff" />
                            <label>Ship to a different address?</label>
                        </div>
                        <div class="different-address open-toggle mt-30">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>First Name</label>
                                        <input type="text" name="shipping_customer_name" />
                                        @if ($errors->has('shipping_customer_name'))
                                        <span class="text-danger">{{ $errors->first('shipping_customer_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Last Name</label>
                                        <input type="text" name="shipping_customer_last_name" />
                                        @if ($errors->has('shipping_customer_last_name'))
                                        <span class="text-danger">{{ $errors->first('shipping_customer_last_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Company Name</label>
                                        <input type="text" name="shipping_customer_company" />
                                        @if ($errors->has('shipping_customer_company'))
                                        <span class="text-danger">{{ $errors->first('shipping_customer_company') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-20px">
                                        <label>Country</label>
                                        <select name="shipping_customer_country" required>
                                            <option value="" disabled>Select a country</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('shipping_customer_country'))
                                    <span class="text-danger">{{ $errors->first('shipping_customer_country') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Street Address</label>
                                        <input class="billing-address" placeholder="House number and street name" type="text" name="shipping_customer_address" />
                                        @if ($errors->has('shipping_customer_address'))
                                        <span class="text-danger">{{ $errors->first('shipping_customer_address') }}</span>
                                        @endif
                                        <input placeholder="Apartment, suite, unit etc." type="text" name="shipping_customer_address" />
                                        @if ($errors->has('shipping_customer_address'))
                                        <span class="text-danger">{{ $errors->first('shipping_customer_address') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Town / City</label>
                                        <input type="text" name="shipping_customer_city" />
                                        @if ($errors->has('shipping_customer_city'))
                                        <span class="text-danger">{{ $errors->first('shipping_customer_city') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>State / County</label>
                                        <input type="text" name="shipping_customer_state" />
                                        @if ($errors->has('shipping_customer_state'))
                                        <span class="text-danger">{{ $errors->first('shipping_customer_state') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Postcode / ZIP</label>
                                        <input type="text" name="shipping_customer_postcode" />
                                        @if ($errors->has('shipping_customer_postcode'))
                                        <span class="text-danger">{{ $errors->first('shipping_customer_postcode') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Phone</label>
                                        <input type="text" name="shipping_customer_phone" />
                                        @if ($errors->has('shipping_customer_phone'))
                                        <span class="text-danger">{{ $errors->first('shipping_customer_phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Email Address</label>
                                        <input type="text" name="shipping_customer_email" />
                                        @if ($errors->has('shipping_customer_email'))
                                        <span class="text-danger">{{ $errors->first('shipping_customer_email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-account mb-50px">
                            <input class="checkout-toggle2" type="checkbox" />
                            <label>Create an account?</label>
                        </div>
                        <div class="checkout-account-toggle open-toggle2 mb-30">
                            <input placeholder="Email address" type="email" />
                            <input placeholder="Password" type="password" />
                            <button class="btn-hover checkout-btn" type="submit">register</button>
                        </div>
                        <div class="additional-info-wrap">
                            <h4>Additional information</h4>
                            <div class="additional-info">
                                <label>Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="note"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        @if (!empty($list['cart_list']))
                                        @foreach ($list['cart_list'] as $cart )
                                        <li>
                                            <span class="order-middle-left">
                                                {{ $cart->product->products_name ?? ''}} X {{ $cart->qty }}
                                            </span>
                                            <span class="order-price">
                                                @php
                                                $qty = (int) $cart->qty;
                                                $price = $cart->product->product_sale_price ?? 0;
                                                echo currencyFormat($qty*$price);
                                                @endphp
                                            </span>
                                        </li>
                                        @endforeach
                                        @else

                                        @endif
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Free shipping</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>{{ currencyFormat($list['grand_total']) }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-one">
                                                <h4 class="panel-title">
                                                    <a data-bs-toggle="collapse" data-parent="#accordion" href="#method1">
                                                        Direct bank transfer
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method1" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store
                                                        State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-two">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#method2">
                                                        Check payments
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store
                                                        State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-three">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#method3">
                                                        Cash on delivery
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store
                                                        State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <button type="submit" class="btn-hover form-control">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



<!-- modal of login check -->

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Open modal
</button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <button type="button" class="btn btn-info">Continue as guest</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {

        $('#placeOrderForm').validate({
            rules: {
                customer_name: {
                    required: true
                },
                customer_last_name: {
                    required: true
                },
                customer_company: {
                    required: true
                },
                customer_country: {
                    required: true
                },
                customer_address: {
                    required: true
                },
                customer_city: {
                    required: true
                },
                customer_state: {
                    required: true
                },
                customer_postcode: {
                    required: true
                },
                customer_phone: {
                    required: true,
                    max: 10,
                    min: 10
                },
                customer_email: {
                    required: true
                },
                shipping_customer_name: {
                    required: true
                },
                shipping_customer_last_name: {
                    required: true
                },
                shipping_customer_company: {
                    required: true
                },
                shipping_customer_country: {
                    required: true
                },
                shipping_customer_address: {
                    required: true
                },
                shipping_customer_city: {
                    required: true
                },
                shipping_customer_state: {
                    required: true
                },
                shipping_customer_postcode: {
                    required: true
                },
                shipping_customer_phone: {
                    required: true,
                    max: 10,
                    min: 10
                },
                shipping_customer_email: {
                    required: true
                },
            },
            highlight: function(element) {
                $(element).closest('.cls').removeClass('success').addClass('error');
                $(".error").css("color", "red");
                $(element).css("border", " 1px solid red")
            }
        });
    });
</script>
@endpush

