<?php

namespace App\Models\Services;

use App\Models\Category;

class CategoryService
{
    public static function getProductByCatSlug($slug = '')
    {
        // dd($slug);
        $language = 1;

        $products = [];
        $res = Category::with('products', 'products.description')->where('categories_slug', $slug)->firstOrFail();
        $products = $res->products()->paginate(10);

        $products = $products->map(function ($product) use ($language) {
            $desc = $product->description()->where('languages_id', $language)->first();
            $product->products_name = ($desc == null) ? '' : $desc->products_name;
            $product->products_description = ($desc == null) ? '' : $desc->products_description;
            return $product;
        });

        return $products;
    }

    public static function sideFilter($slug)
    {
        $filter = [];

        $cat_details = Category::with('description', 'options', 'options.products_options_values')->where('categories_slug', $slug)->first();
        if (!empty($cat_details)) {
            $filter['cat_details'] = $cat_details;

            // cat list if current is parent
            $cat_list = Category::with('description')->where('parent_id', $cat_details->categories_id)->get();
            getNameAndDesc('category',$cat_list);
            $filter['cat_list'] = $cat_list;

            // side filter list with category to list

        }
        // dd($filter);
        return $filter;
    }

    public static function CategoryTree()
    {
        $language = '1';

        $cat = Category::with('description')->where('parent_id', 0)->get();

        $cat = $cat->map(function ($data) use ($language) {

            $cate = $data->description()->where('languages_id', $language)->first();
            $data->category_name = ($cate == null) ? '' : $cate->categories_name;

            // getting two layer category
            $two_layer_category = Category::with('description')->where('parent_id', $data->categories_id)->get();
            if (sizeof($two_layer_category) >  0) {

                $two_layer_category = $two_layer_category->map(function ($sub) use ($language) {

                    $subcat = $sub->description()->where('languages_id', $language)->first();
                    $sub->category_name = ($subcat == null) ? '' : $subcat->categories_name;

                    // getting two layer category
                    $three_layer_category = Category::with('description')->where('parent_id', $sub->categories_id)->get();
                    if (sizeof($three_layer_category) >  0) {

                        $three_layer_category = $three_layer_category->map(function ($three) use ($language) {

                            $three_cat = $three->description()->where('languages_id', $language)->first();
                            $three->category_name = ($three_cat == null) ? '' : $three_cat->categories_name;

                            return $three;
                        });
                    }
                    $sub->three_layer_category = $three_layer_category;

                    return $sub;
                });
            }
            $data->two_layer_category = $two_layer_category;

            return $data;
        });
        return $cat;
    }

    public static function popularCategory()
    {
        $data = Category::with('description')->get();
        $category_data=getNameAndDesc('category',$data);
        return $category_data;
    }
}
