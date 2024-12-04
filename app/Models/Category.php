<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;


    protected $guarded = array('_token');


    public function urunler($locale = 'en')
    {
        return $this->belongsToMany(Product::class, 'category_products')->get()->map(function ($urun) use ($locale) {
            if ($locale !== 'en') {
                $urun->name = $urun->{'name_' . $locale};
                $urun->description = $urun->{'description_' . $locale};
                $urun->title = $urun->{'title_' . $locale};
                $urun->slug = $urun->{'slug_' . $locale};
                $urun->page_title = $urun->{'page_title_' . $locale};
                $urun->page_description = $urun->{'page_description_' . $locale};
                $urun->page_keywords = $urun->{'page_keywords_' . $locale};
            }
            return $urun;
        });
    }
    public function altkategoriler()
    {
        return $this->hasMany('App\Models\Category', 'ust_id', 'id');

    }
}
