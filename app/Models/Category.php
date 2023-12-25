<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;


    protected $guarded = array('_token');

    public function urunler()
    {
        return $this->belongsToMany('App\Models\Product', 'category_products');
    }

    public function altkategoriler()
    {
        return $this->hasMany('App\Models\Category', 'ust_id', 'id');

    }
}
