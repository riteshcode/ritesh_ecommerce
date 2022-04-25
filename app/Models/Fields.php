<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fields extends Model
{
    use HasFactory;
    
    protected $table = 'ecm_fields';

    protected $primaryKey = 'fields_id';

    protected $fillable = [
        'fieldsgroup_id',
        'field_name',
        'field_label',
        'field_type',
        'field_placeholder',
        'field_options',
        'field_value',
        'field_required',
        'sort_order',
    ];
    

}
