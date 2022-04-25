<section class="full-container chainGrid margin_bottom_10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="chainGridBox">
                    <li><a href="#"><i class="fa fa-home"></i></a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#" class="active">page</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#">Shopping Cart</a></li>
                </ul>
            </div>
        </div><!-- row -->
    </div>
</section><!-- container -->


<section class="full-container shopping">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headding2">
                    <h2>Shopping Cart Summary</h2>
                </div>
                <!--headding2-->
            </div>
            <div class="col-md-12">
                <div class="table-responsive" id="cartUpdate">
                    <table class="table carttbl">
                        <thead>
                            <tr>
                                <th class="thCol1">&nbsp;</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Until Price</th>
                                <th class="text-center"> Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($list['cart_list'] as $cart )
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
                                        <input class="cart-plus-minus-box"
                                            onchange="actionOnCart({{$cart->cart_id}},'add')"
                                            id="{{$cart->cart_id}}_qty" type="number" name="qtybutton"
                                            value="{{ $cart->qty }}" min=0 step=1 />
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
                </div><!-- table-responsive -->
            </div>

            <div class="col-md-12 margin_bottom_10 margin_top_10">
                <div class="totalRs">
                    <span>Sub Total : <strong>{{ currencyFormat($list['product_total']) }}</strong></span>
                    <span>Shipping: <strong> Free </strong> </span>
                    <span>Total : <strong> {{ currencyFormat($list['grand_total']) }}</strong></span>
                </div><!-- totalRs-->
            </div>
            <div class="col-md-12">
                <div class="cartbtnBox">
                    <div class="newsltrBox">
                        <div class="newsltrForm">
                            <input type="text" class="sBox" placeholder="Enter your email address">
                            <button class="sButton">Apply Coupon</button>
                        </div>
                    </div>
                    <a href="{{ url('/checkout') }}" class="btn btn-primary yellowbtn float-right">Proceed to
                        Checkout</a>
                </div><!-- cartbtnBox -->
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section>
<!--full container -->


@push('scripts')
<script>
function actionOnCart(cart_id, type) {
    var qty = $(`#${cart_id}_qty`).val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '{{ route("incDecDelCart") }}',
        method: 'POST',
        data: {
            cart_id: cart_id,
            qty: qty,
            type: type,
        },
        success: function(response) {
            $('.lblCart').html(response.header_html);
            $('#cartUpdate').html(response.table_html);
            var msg = type === 'del' ? 'Item Removed From Cart !' : 'Item Qty Updated To Cart !';
            Notify(msg, true);
        },
        error: function(error) {
            Notify(error.message, false);
        }
    });

}
</script>
@endpush