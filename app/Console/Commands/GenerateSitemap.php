<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for the website';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        // Ana sayfa
        $sitemap->add(Url::create('/'));

        // Ürün sayfaları
        $products = \App\Models\Product::all();
        foreach ($products as $product) {
            $sitemap->add(Url::create("/product/{$product->slug}"));
        }

        // Diğer sayfalar
        $sitemap->add(Url::create('/about'))
            ->add(Url::create('/contact'));

        // Site haritasını kaydetme
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');

        return 0;
    }
}
