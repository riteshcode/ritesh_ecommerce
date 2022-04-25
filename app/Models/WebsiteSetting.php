<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasFactory;

    protected $table = 'web_settings';

    protected $primaryKey = 'setting_id';
    
    protected $fillable = [
        'setting_key',
        'setting_value',
    ];

}
