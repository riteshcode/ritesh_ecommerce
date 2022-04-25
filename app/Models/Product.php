<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Fields;
use App\Models\Supplier;
use App\Models\Language;
use App\Models\Images;
use App\Models\SeoMeta;
use App\Models\ProductDescription;

use App\Models\Services\ProductService;

use  App\Models\Scopes\ProductStatus;


class Product extends Model
{
    use HasFactory;

    protected $table = 'ecm_products';

    protected $primaryKey = 'product_id';
    
    protected $fillable = [
        'product_model',
        'product_sku',
        'product_slug',
        'product_image',
        'product_video_url',
        'product_external_url',
        'product_file',
        'product_delivery_time',
        'product_price_type',
        'product_condition',
        'product_brand_id',
        'product_tags',
        'product_stock_qty',
        'product_stock_price',
        'product_profit_margin',
        'product_sale_price',
        'product_discount_type',
        'product_discount_amount',
        'product_type_id',
        'product_feature',
        'product_shipping',
        'product_attribute',
        'product_live_date',
        'product_status',
        'return_policy_id',
        'product_seo',
        'product_seo_id',
    ];

    protected static function booted()
    {
        static::addGlobalScope(new ProductStatus);
    }

    public function description(){
        return $this->hasMany(ProductDescription::class, 'products_id', 'product_id');
    }

    public function productAttribute(){
        return $this->hasMany(ProductAttribute::class, 'products_id', 'product_id');
    }

    public function products_to_categories(){
        return $this->belongsToMany(Category::class,config('dbtable.ecm_products_to_categories'),'products_id', 'categories_id');
    }

    public function products_to_supplier(){
        return $this->belongsToMany(Supplier::class,config('dbtable.ecm_products_to_supplier'),'product_id', 'supplier_id');
    }

    public function products_to_seo(){
        return $this->hasMany(SeoMeta::class, 'reference_id', 'product_id');
    }

    public function products_to_images(){
        return $this->belongsTo(Images::class,'product_image', 'images_id');
    }

    public function products_to_gallery(){
        return $this->belongsToMany(Images::class,config('dbtable.ecm_products_to_images'),'product_id', 'images_id');
    }

    public function products_to_gallery_ids(){
        return $this->hasMany(config('dbtable.ecm_products_to_images'));
    }

    public function products_type_field_value(){
        return $this->belongsToMany(Fields::class,config('dbtable.ecm_products_type_field_value'),'product_id', 'fields_id')->withPivot('field_value');
    }


    // service
    public static function NewArrival(){
        return ProductService::NewArrival();
    }
    
    public static function findProduct($slug){
        return ProductService::findProduct($slug);
    }
    

}