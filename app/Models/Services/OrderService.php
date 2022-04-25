<?php
namespace App\Models\Services;

use Auth;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\OrderAddress;

class OrderService
{
    public static function placeOrder($request){

      
        $cart_item = Cart::allItemWithTotal($request);    // get cart item
        
        if(empty($cart_item))
            return redirect()->back()->with('error', 'You Cart is empty');

        $discount_total = $shipping_total = $tax_amount = 0;
        $grand_total = (
                (float)$cart_item['product_total'] + (float)$shipping_total + (float)$tax_amount 
            )  - $discount_total  ;

        // order create
        $order = Order::create([
            'user_id'=> Auth::check() ? Auth::id() : 0,
            'order_number'=>generate_random_token('alpha_numeric', 10),
            'payment_type'=>0,
            'sub_total'=>$cart_item['product_total'],
            'discount_total'=>$discount_total,
            'shipping_total'=>$shipping_total,
            'total_qty'=>$cart_item['total_count'],
            'tax_amount'=>$tax_amount,
            'grand_total'=> $grand_total,
            'note'=>$request->note,
            'payment_status'=>1,
            'order_status'=>1
        ]);


        // order item add
        // dd($cart_item);
        foreach ($cart_item['cart_list'] as $key => $item) {

            OrderItems::create([
                'order_id'=>$order->order_id,
                'product_id'=>(int)$item->product_id,
                'qty'=>$item->qty,
                'attribute'=>$item->attributes_id,
                'price'=>$item->product->product_sale_price,
                'total_price'=> (int)$item->qty * (float)$item->product->product_sale_price

            ]);
        
        }

        // order Address Create
        $address = $request->only([
            'customer_name', 'customer_company','customer_country',
            'customer_address','customer_city','customer_state','customer_postcode',
            'customer_phone','customer_email'
        ]);
        $address['order_id'] = $order->order_id;
        $address['address_type'] = 1;

        $bill_address = OrderAddress::create($address);
        
        if($request->has('is_shipping_diff')){  // if bill shipp diff
            OrderAddress::create([
                'customer_name'=>$request->shipping_customer_name, 
                'customer_company'=>$request->shipping_customer_company,
                'customer_country'=>$request->shipping_customer_country,
                'customer_address'=>$request->shipping_customer_address,
                'customer_city'=>$request->shipping_customer_city,
                'customer_state'=>$request->shipping_customer_state,
                'customer_postcode'=>$request->shipping_customer_postcode,
                'customer_phone'=>$request->shipping_customer_phone,
                'customer_email'=>$request->shipping_customer_email,
                'order_id' => $order->order_id,
                'address_type' => 2
            ]);

        }else{          // create replica of billing if same 
            
            $shipping = $bill_address->replicate()->fill(['address_type' => 2]);
            $shipping->save();
        }
        
        $orderInfo = Order::with('address','item')->find($order->order_id);
        return $orderInfo;
    } 

}


