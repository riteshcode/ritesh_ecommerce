<table class="table carttbl">
    <thead>
        <tr>
            <th class="thCol1">&nbsp;</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Until Price</th>
            <th class="text-center">Qty</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>

        @forelse($cart_list as $cart )
        <tr>
            <td>
                <a href="javascript:void(0)" onclick="actionOnCart({{$cart->cart_id}},'del')">
                    <i class="fa fa-remove"></i>
                </a>
            </td>
            <td class="product-thumbnail">
                <a href="#">
                    <img src="" alt="" height="50" />
                </a>
            </td>
            <td><a href="#">
                    {{ $cart->product->products_name ?? ''}}

                </a></td>
            <td>
                <span class="amount">
                    {{ currencyFormat($cart->product->product_sale_price ?? 0)}}
                </span>
            </td>
            <td class="text-center">
                <div class="cart-plus-minus">
                    <span class="badge badge-danger">-</span>
                    <input class="cart-plus-minus-box" onchange="actionOnCart({{$cart->cart_id}},'add')"
                        id="{{$cart->cart_id}}_qty" type="number" name="qtybutton" value="{{ $cart->qty }}" min=0
                        step=1 />
                    <span class="badge badge-success">+</span>
                </div>
            </td>
            <td>
                @php
                $qty = (int) $cart->qty;
                $price = $cart->product->product_sale_price ?? 0;
                echo currencyFormat($qty*$price);
                @endphp
            </td>

        </tr>
        @empty
        <tr class="text-center">
            <td colspan="6">No Item In Cart</td>
        </tr>
        @endforelse
    </tbody>
</table>







































<!-- 
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <form action="#">
        <div class="table-content table-responsive cart-table-content">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Until Price</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($cart_list))
                    @foreach ($cart_list as $cart )
                    <tr>
                        <td class="product-thumbnail">
                            <a href="#"><img src="http://e-nnovation.net/support/public/no-image.png" alt=""
                                    height="50" /></a>
                        </td>
                        <td class="product-name"><a href="#">
                                {{ $cart->product->products_name ?? ''}}

                            </a></td>
                        <td class="product-price-cart"><span class="amount">
                                {{ currencyFormat($cart->product->product_sale_price ?? 0)}}
                            </span></td>
                        <td class="product-quantity">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" onchange="actionOnCart({{$cart->cart_id}},'add')"
                                    id="{{$cart->cart_id}}_qty" type="number" name="qtybutton" value="{{ $cart->qty }}"
                                    min=0 step=1 />
                            </div>
                        </td>
                        <td class="product-subtotal">
                            @php
                            $qty = (int) $cart->qty;
                            $price = $cart->product->product_sale_price ?? 0;
                            echo currencyFormat($qty*$price);
                            @endphp
                        </td>
                        <td class="product-remove">
                            <a href="javascript:void(0)" onclick="actionOnCart({{$cart->cart_id}},'del')"><i
                                    class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @else

                    @endif


                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-shiping-update-wrapper">
                    <div class="cart-shiping-update">
                        <a href="#">Continue Shopping</a>
                    </div>
                    <div class="cart-clear">
                        <button>Update Shopping Cart</button>
                        <a href="#">Clear Shopping Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="cart-tax">
                <div class="title-wrap">
                    <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                </div>
                <div class="tax-wrapper">
                    <p>Enter your destination to get a shipping estimate.</p>
                    <div class="tax-select-wrapper">
                        <div class="tax-select">
                            <label>
                                * Country
                            </label>
                            <select class="email s-email s-wid">
                                <option>Bangladesh</option>
                                <option>Albania</option>
                                <option>Åland Islands</option>
                                <option>Afghanistan</option>
                                <option>Belgium</option>
                            </select>
                        </div>
                        <div class="tax-select">
                            <label>
                                * Region / State
                            </label>
                            <select class="email s-email s-wid">
                                <option>Bangladesh</option>
                                <option>Albania</option>
                                <option>Åland Islands</option>
                                <option>Afghanistan</option>
                                <option>Belgium</option>
                            </select>
                        </div>
                        <div class="tax-select mb-25px">
                            <label>
                                * Zip/Postal Code
                            </label>
                            <input type="text" />
                        </div>
                        <button class="cart-btn-2" type="submit">Get A Quote</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="discount-code-wrapper">
                <div class="title-wrap">
                    <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                </div>
                <div class="discount-code">
                    <p>Enter your coupon code if you have one.</p>
                    <form>
                        <input type="text" required="" name="name" />
                        <button class="cart-btn-2" type="submit">Apply Coupon</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="grand-totall">
                <div class="title-wrap">
                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                </div>
                <h5>Total products <span>{{ currencyFormat($product_total) }}</span></h5>
                <div class="total-shipping">
                    <h5>Total shipping</h5>
                    <ul>
                        <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                        <li><input type="checkbox" /> Express <span>$30.00</span></li>
                    </ul>
                </div>
                <h4 class="grand-totall-title">Grand Total <span>{{ currencyFormat($grand_total) }}</span></h4>
                <a href="{{ url('checkout') }}">Proceed to Checkout</a>
            </div>
        </div>
    </div>
</div> -->