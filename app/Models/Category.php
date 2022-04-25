<?php

namespace App\Models;

use  App\Models\Scopes\StatusScope;
use  App\Models\Scopes\SortOrderScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use App\Models\Services\CategoryService;

class Category extends Model
{
    use HasFactory;

    protected $table = 'ecm_categories';

    protected $primaryKey = "categories_id";

    protected $fillable = [
        'categories_slug',
        'categories_image',
        'categories_icon',
        'parent_id',
        'sort_order',
        'status'
    ];

    protected static function booted()
    {
        static::addGlobalScope(new StatusScope);
        static::addGlobalScope(new SortOrderScope);
    }

    public function description(){
        return $this->hasMany(CategoryDescription::class, 'categories_id', 'categories_id');
    }

    public function products(){
        return $this->belongsToMany(Product::class,'ecm_products_to_categories','categories_id','products_id');
    }

    public function options(){
        return $this->belongsToMany(ProductOptions::class,'ecm_categories_to_options','categories_id','products_options_id');
    }

    /*  service */
    public static function CategoryTree(){
        return CategoryService::CategoryTree();
    }

    public static function getProductByCatSlug($slug){
        return CategoryService::getProductByCatSlug($slug);
    }

    public static function sideFilter($slug){
        return CategoryService::sideFilter($slug);
    }

    public static function popularCategory()
    {
        return CategoryService::popularCategory();
    }
       

}
