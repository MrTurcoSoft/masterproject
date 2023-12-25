<?php

namespace Database\Seeders;

use App\Models\about;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            "name" => "About Us",
            "description" => "<h4> What is Del'la Soft's Mission?</h4> <br><br>To showcase the products we craft, inspired by nature, on a global scale. Our aim is to forge robust, steadfast, and gratifying partnerships across numerous countries.<br><br> We – at Del'la Soft – have been diligently exporting our meticulously crafted products to 65 countries since 2015. Our satisfied customer base spans the globe, and we consistently expand our reach through new collaborations each year. <br><br> Dream it, Achieve it - Private Labeling <br><br> The Del'la Soft team is dedicated to transforming your dreams into reality! <br><br> Whether you envision a completely novel concept from A to Z or wish to revitalize existing ideas, our expertise, quality, flexibility, and service guarantee the realization of your specific desires and the success of your product.",
            "slug" => "about-us",
            "image" => "https://place-hold.it/3000x3000?text=3000x3000&bold=true",
            "bg" => "/frontend/img/main/about_bg.jpg",
            "isActive" => "1",
        ]);
    }
}
