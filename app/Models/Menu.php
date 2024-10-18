<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
   
    protected $fillable = [
        'menu_name',
        'is_delete',
        'url',
        'icon',
        'status',
    ];
}
