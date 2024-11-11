<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'name',
        'type',
        'description',
        'amount',
        'date',
        'is_delete',
        'status'
    ];
}
