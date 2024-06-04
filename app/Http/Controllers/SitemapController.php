<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = Sitemap::create();

        // Ana sayfa
        $sitemap->add(Url::create('/'));

        // Ürün sayfaları
        $products = \App\Models\Product::all();
        foreach ($products as $product) {
            $sitemap->add(Url::create("/product/{$product->slug}"));
        }

        // Kategori sayfaları
        $categories = \App\Models\Category::all();
        foreach ($categories as $category) {
            $sitemap->add(Url::create("/category/{$category->slug}"));
        }

        // Diğer sayfalar
        $sitemap->add(Url::create('/about'))
            ->add(Url::create('/contact'));

        // Site haritasını kaydetme
        $sitemap->writeToFile(public_path('sitemap.xml'));

        return response()->file(public_path('sitemap.xml'));
    }
}

