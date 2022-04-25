<?php
namespace App\Models\Services;
use App\Models\Cart;
use App\Models\Product;
use Auth;


class CartService
{
    public static function addUpdateToCart($request){

        $insData = $request->only(['qty','attributes_id']);
        
        $wheredata = [
            'session_id' => $request->cookie('XSRF-TOKEN'), 
            'user_id' => Auth::check() ? Auth::id() : 0,
            'product_id' => $request->product_id,
        ];

        Cart::updateOrCreate($wheredata,$insData);
        return true;
    } 

    // get all cart item with langugae wise product name
    public static function allItem($request){
        $language = 1;

        $session_id = $request->cookie('XSRF-TOKEN');

        $query = Cart::with('product','product.description');

        if(Auth::check())
            $query = $query->where('user_id', Auth::id());
        else
            $query = $query->where('session_id', $session_id);

        $cartlist = $query->get();          // getting all cart item

        if(!empty($cartlist)){
            $cartlist = $cartlist->map(function($cart) use($language){

                if(!empty($cart->product)){
                    $desc = $cart->product->description()->where('languages_id', $language)->first(); 
                    $cart->product->products_name = !empty($desc) ? $desc->products_name : ''; 
                    $cart->product->products_description = !empty($desc) ? $desc->products_description : ''; 
                }

                return $cart;
            });
        }

        return $cartlist;
    }

    // get only use for cart page all type calculation

    public static function allItemWithTotal($request){
        $cartlist = Self::allItem($request);

        $grand_total = $product_total = $shipping = $total_count =  0;

        if(!empty($cartlist)){
            foreach ($cartlist as $key => $cart) {
                $total_count += (int) $cart->qty;
                $product_total += (float) $cart->product->product_sale_price * (int)$cart->qty;
            }
        }

        $grand_total = $product_total + $shipping;

        $response = [
            'product_total' => $product_total,
            'grand_total' => $grand_total,
            'shipping' => $shipping,
            'total_count' => $total_count,
            'cart_list' => $cartlist,
        ];
        return $response;

    }

    /*
        On Item Add/Update update CartList with count 
    */
    public static function getCartListWithCount($request){
        
        $cartlist = Self::allItem($request);

        $total_count = $total_amount = 0;

        if(!empty($cartlist)){
            foreach ($cartlist as $key => $cart) {
                $total_count += (int) $cart->qty;
                $total_amount += (float) $cart->product->product_sale_price * (int)$cart->qty;
            }
        }
        
        $response = [
            'total_count' => $total_count,
            'total_amount' => $total_amount,
            'cartlist'=>$cartlist,
            'total_count_html' => '<span class="cartItem">'.$total_count.'</span><sup>$</sup>'.currencyFormat($total_amount),
        ];

        return $response;
    } 


    public static function updateCart($request){
        $id = $request->cart_id;
        $cart = Cart::find($id);
        if($request->type == 'add'){
            $cart->qty = $request->qty;
            $cart->save();

        }else{
            $cart->delete();
        }
        return true;
    }
    

}