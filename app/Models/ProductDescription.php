<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{
    use HasFactory;
    protected $table = 'ecm_products_description';
    protected $primaryKey = 'products_description_id';

    protected $fillable = [
        'products_id',
        'languages_id',
        'products_name',
        'products_description',
    ];

    public $timestamps = false;



}
