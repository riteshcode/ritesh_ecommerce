<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'usr_roles';
    protected $primaryKey = 'roles_id';
    protected $guarded = [
        'roles_id'
    ];

}
