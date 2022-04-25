<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsOptionsValues extends Model
{
    use HasFactory;
    protected $table = 'ecm_products_options_values';    
    protected $primaryKey = 'products_options_values_id';
    

    protected $fillable = [
       'products_options_id',
       'products_options_values_name',
    ];
    public $timestamps=false;


}