<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cart_list = Cart::allItemWithTotal($request);
        
        $data = [
            'meta_name'=>"Shop Page",
            'list'=>$cart_list
        ];

        $activeTheme = config('app.theme').'.Pages.Cart';
    
        return view('RenderPage', compact('data','activeTheme'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cart::addUpdateToCart($request);        // addUpdateCart

        $response = Cart::getCartListWithCount($request);       // get response count of html

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Cart::updateCart($request);

        $response = Cart::allItemWithTotal($request); 

        $pageName = 'components.'.config('app.theme').'.pages.cart-table';

        // update header cart total
        $header_html = '<span class="cartItem">'.$response['total_count'].'</span><sup>$</sup>'.currencyFormat($response['product_total']);
       
        $table_html = view($pageName,$response)->render();
        $response = [
            'header_html'=>$header_html,
            'table_html'=>$table_html,
        ];
        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}