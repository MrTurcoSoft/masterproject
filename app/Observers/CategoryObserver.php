<?php

namespace App\Observers;

use App\Models\Category;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class CategoryObserver
{
    /**
     * Handle the Category "created" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function created(Category $category)
    {
        $this->updateSitemap();
    }

    /**
     * Handle the Category "updated" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        $this->updateSitemap();
    }

    /**
     * Handle the Category "deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function deleted(Category $category)
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
