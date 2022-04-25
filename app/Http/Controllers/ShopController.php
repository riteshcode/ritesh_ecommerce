<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $products = Category::getProductByCatSlug($slug);
        $sideFilter = Category::sideFilter($slug);

        $data = [
            'meta_name' => "Shop Page",
            'products' => $products,
            'sideFilter' => $sideFilter
        ];

        // dd($data);

        $activeTheme = config('app.theme') . '.Pages.Shop';
        // dd($activeTheme);

        return view('RenderPage', compact('data', 'activeTheme'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        $products = Product::findProduct($slug);

        $data = [
            'meta_name' => "Shop Page",
            'products' => $products
        ];


        $activeTheme = config('app.theme') . '.Pages.Detail';

        return view('RenderPage', compact('data', 'activeTheme'));
    }

    /**
     * filterItem Product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filterItem(Request $request)
    {
        // category
        return 'In Developement';
        dd($request->all());

        // $products = Category::getProductByCatSlug($slug);

        // $pageName = 'components.'.config('app.theme').'.pages.cart-table';

        // $header_html = '<span class="amount-tag">'.currencyFormat($response['product_total']).'</span><span class="item-quantity-tag">'.$response['total_count'].'</span>';



        // $table_html = view($pageName,$response)->render();
        // $response = [
        //     'header_html'=>$header_html,
        //     'table_html'=>$table_html,
        // ];
        // return response()->json($response);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        $response = Product::findProduct($request->slug);
       

        // return response()->json($response);
        // $activeTheme = 'components.'.config('app.theme').'.pages.ProductModal';
     
        // $data = [
        //     'meta_name' => "Product Modal Page",
        //     'products' => $response,
        // ];

        // return view('RenderPage', compact('data', 'activeTheme'));


        //dd($response->productAttribute);
        $pageName = 'components.'.config('app.theme').'.pages.product-modal';       

        $table_html = view($pageName,compact('response'))->render();
        // $response = [
        //     'table_html'=>$table_html,
        // ];
        return response()->json($table_html);


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
