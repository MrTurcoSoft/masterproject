<?php

namespace App\Observers;

use App\Models\Product;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        $this->updateSitemap();
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        $this->updateSitemap();
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        $this->updateSitemap();
    }

    protected function updateSitemap()
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
            ->add(Url::create('/contact'))
            ->add(Url::create('/catalogue'));

        // Site haritasını kaydetme
        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
