<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'ecm_brand';

    protected $primaryKey = 'brand_id';
    
    protected $fillable = [
        'brand_name',
        'brand_icon',
        'status',
    ];
   
    public function user(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
