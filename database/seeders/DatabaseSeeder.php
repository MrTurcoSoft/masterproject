<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(SlidersSeeder::class);
        $this->call(HomesectionsSeeder::class);
        $this->call(SectionTabsSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductDetailSeeder::class);
        $this->call(CategoryProductSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(CertificateSeeder::class);
        $this->call(UserSeeder::class);
    }
}
