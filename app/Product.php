<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'amount_stock',
        'category_id',
        'amount_ratings'
    ];
}
