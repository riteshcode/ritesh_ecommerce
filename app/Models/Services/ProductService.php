<?php
namespace App\Models\Services;
use App\Models\Product;
use App\Models\ProductAttribute;


class ProductService
{
    protected $language = 1;

    public static function NewArrival()
    {
        $language = 1;

        $product = Product::with('description')->get();
        $product = $product->map(function($data) use ($language)  {
            $cate = $data->description()->where('languages_id', $language)->first();
            $data->products_name = ($cate == null) ? '' : $cate->products_name;
            $data->products_description = ($cate == null) ? '' : $cate->products_description;
            return $data;
        });

        return $product;
    }

    public static function findProduct($slug){
        $language = 1;
        
        $product =  Product::with('description','productAttribute')->where('product_slug', $slug)->first();
        
        if(!empty($product)){
            $pr = $product->description()->where('languages_id', $language)->first();
            $product->products_name = ($pr == null) ? '' : $pr->products_name;
            $product->products_description = ($pr == null) ? '' : $pr->products_description;
            
            // relate with attach attributes
            $attributes = $product->productAttribute()->with('productOptions')->groupBy('options_id')->get();
            if(!empty($attributes)){
                $attributes->map(function($option) use ($product){
                    $option->option_name = $option->productOptions->products_options_name;
                    $option->option_value_list = $product->productAttribute()->with('productOptionsValue')->where('options_id',$option->options_id )->get();
                    return $option;
                });
            }

            $product->productAttribute = $attributes; 
            // dd($product);

        }
        return $product;

    }
}