<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Slider::create([
          "title"=>"Cosmetic Products Reflecting the Beauty of Nature…",
           "btnText"=>"View Products",
           "url"=>"category/skin-care",
           "image"=>"https://place-hold.it/1920x1280?text=1920x1280&bold=true",
           "isActive"=>"1"
       ]);
    }
}
