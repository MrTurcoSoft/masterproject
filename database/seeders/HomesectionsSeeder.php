<?php

namespace Database\Seeders;

use App\Models\Homesection;
use Illuminate\Database\Seeder;

class HomesectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homesection::create([
            "section"=>"1",
            "title"=>"Del'la Soft's mission is to \"Embrace Sustainability!\"",
            "description"=>"The reason behind this choice is quite evident: we understand the growing demand for products that prioritize environmental sustainability and offer tangible benefits beyond just enhancing one's appearance.",
            "isActive"=>"1"
        ]);
        Homesection::create([
            "section"=>"2",
            "title"=>"Del'la Soft stands out because...",
            "description"=>"At Del'la Soft, our primary goal is to connect our products, which harmoniously blend the beauty and advantages of nature, with individuals who possess self-assurance and are not constrained by conventional beauty norms.<br><br> We understand the significance of offering the purest products to consumers and ensuring that they derive maximum benefit from them.",
            "btnText"=>"About Us",
            "image"=>"https://place-hold.it/1000x1000?text=1000x1000&bold=true",
            "url"=>"about",
            "isActive"=>"1"
        ]);
        Homesection::create([
            "section"=>"4",
            "title"=>"For more information you can contact us...",
            "btnText"=>"info@dellasoft.net",
            "image"=>"https://place-hold.it/2000x2000?text=2000x2000&bold=true",
            "url"=>"info@dellasoft.net",
            "isActive"=>"1"
        ]);
    }
}
