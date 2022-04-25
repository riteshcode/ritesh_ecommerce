<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services\CartService;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'web_carts';
    protected $primaryKey = 'cart_id';
    protected $fillable = [
        'session_id',
        'user_id',
        'product_id',
        'qty',
        'attributes_id'
    ];

    
    public function product(){
        return $this->belongsTo(Product::class, 'product_id','product_id');
    }

    // service

    public static function addUpdateToCart($request){
        return CartService::addUpdateToCart($request);
    }
    
    public static function allItemWithTotal($request){
        return CartService::allItemWithTotal($request);
    }
    
    public static function updateCart($request){
        return CartService::updateCart($request);
    }

    public static function getCartListWithCount($request){
        return CartService::getCartListWithCount($request);
    }
    

}
