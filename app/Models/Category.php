<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
    ];

    protected $primaryKey = 'id';

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
