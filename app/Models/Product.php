<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = array('_token');

    public function kategoriler()
    {
        return $this->belongsToMany('App\Models\Category','category_products');
    }


    public function detay()
    {
        return $this->hasOne('App\Models\ProductDetail')->withDefault();
    }
}
