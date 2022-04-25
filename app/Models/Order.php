<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services\OrderService;

class Order extends Model
{
    use HasFactory;

    protected $table = 'web_orders';
    protected $primaryKey = 'order_id';
    protected $guarded = ['order_id'];

    public function address(){
        return $this->hasMany(OrderAddress::class, 'order_id','order_id');
    }

    public function item(){
        return $this->hasMany(OrderItems::class, 'order_id','order_id');
    }

    //service
    public static function placeOrder($request){
        return OrderService::placeOrder($request);
    }
    

}
