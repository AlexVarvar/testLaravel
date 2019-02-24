<?php

namespace App\Models;

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

    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
