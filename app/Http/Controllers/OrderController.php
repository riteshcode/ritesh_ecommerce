<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Http\Requests\OrderAddress;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
    {
        $cart_list = Cart::allItemWithTotal($request);
        
        $data = [
            'meta_name'=>"Shop Page",
            'list'=>$cart_list
        ];

        $activeTheme = config('app.theme').'.Pages.Checkout';
    
        return view('RenderPage', compact('data','activeTheme'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function placeOrder(OrderAddress $request)
    {
        $order = Order::placeOrder($request);
        return redirect('thankyou/'.$order->order_number)->with('success','Your Order Successfull Placed !');
        // dd($order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function thankyou($orderId)
    {
        $order = Order::where('order_number',$orderId)->first();
        $data = [
            'meta_name'=>"Shop Page",
            'list'=>$order
        ];

        $activeTheme = config('app.theme').'.Pages.Thankyou';

        return view('RenderPage', compact('data','activeTheme'));
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
    public function update(Request $request, $id)
    {
        //
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
