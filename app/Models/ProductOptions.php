<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOptions extends Model
{
    use HasFactory;
    protected $table = 'ecm_products_options';
    protected $primaryKey = 'products_options_id';

    protected $fillable = [
        'products_options_name',
        
    ];

    public $timestamps = false;


    public function products_options_values(){

        return $this->hasMany(ProductsOptionsValues::class,'products_options_id','products_options_id');
    }

    public static function product_options_with_value($products_options_id=""){
        if(empty($products_options_id)){

            $product_options = Self::all()->map(function($options){
                $options->products_options_values = $options->products_options_values;
                return $options;
            });
            return $product_options;

        }else{
            
            $product_options = Self::find($products_options_id);
            if($product_options !== null)
                $product_options->products_options_values = $product_options->products_options_values;
            
            return $product_options;

        }
    }


}