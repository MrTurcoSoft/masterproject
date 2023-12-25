<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $fillable = ['volume','boxsize','qtyBox','BoxNetW','BoxGrossW','BoxOnPallet','hsCode','barcode'];

    /**
     * @var bool
     */
    public $timestamps = false;

    public function urun()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
