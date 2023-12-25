<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "cat_name" => "Skin Care",
            "slug" => "skin-care",
            "title" => "TRUEDERM",
            "description" => "TRUEDERM offers a transformative line of skincare products designed to enhance and revitalize your skin, leaving it radiant, firm, and refreshed. Meticulously crafted with a focus on quality ingredients, these skincare solutions cater to the diverse needs of your skin, promoting a healthy and vibrant complexion. Whether you seek the radiance of youthful skin, the firmness that comes with effective hydration, or the refreshing feeling of revitalized pores, TRUEDERM provides a comprehensive approach to skincare. Elevate your daily routine with TRUEDERM's products, where each application is a step towards achieving luminous, firm, and rejuvenated skin.",
            "cat_bg" => "/frontend/img/main/skin_care.jpg",
            "must" =>"1",
            "isActive"=>"1"
        ]);
        Category::create([
            "cat_name" => "Hair Care",
            "slug" => "hair-care",
            "title" => "Hair Care",
            "description" => "Del'la Soft Hair Care products go beyond mere hair care; they are an essential indulgence for those seeking nourished, shiny, and healthy locks. With a meticulously crafted formula, these products deliver a harmonious blend of revitalizing ingredients that breathe life into your hair. Whether it's the enriching conditioners, rejuvenating shampoos, or the restorative treatments, each product is designed to pamper your hair, leaving it not just looking vibrant but also feeling irresistibly silky. Discover the transformative power of Del'la Soft Hair Care, where every application is a step towards hair perfection.",
            "cat_bg" => "/frontend/img/main/hair_care.jpg",
            "must" =>"2",
            "isActive"=>"1"
        ]);
        Category::create([
            "cat_name" => "Body Fragrances",
            "slug" => "body-fragrances",
            "title" => "Body Fragrances",
            "description" => "Del'la Soft Body Fragrances redefine the essence of personal scent, offering an enchanting collection that transcends ordinary fragrances. Immerse yourself in a symphony of captivating notes that delicately linger on the skin, leaving a trail of sophistication and allure. Each fragrance in the Del'la Soft collection is meticulously curated to evoke a unique sensory experience, enhancing your individuality with a touch of elegance. From fresh and floral to warm and exotic, these body fragrances are more than a mere accessory—they are an expression of your style and grace. Elevate your daily routine with Del'la Soft Body Fragrances and let your presence be as unforgettable as your scent.",
            "cat_bg" => "/frontend/img/main/body_fragrances.jpg",
            "must" =>"3",
            "isActive"=>"1"
        ]);
        Category::create([
            "cat_name" => "Air Fresheners",
            "slug" => "air-fresheners",
            "title" => "Air Fresheners",
            "description" => "Del'la Soft Air Fresheners redefine the atmosphere, offering a sensorial journey that transforms any space into a haven of freshness and tranquility. Crafted with precision, these air fresheners emanate a symphony of delightful scents, from soothing lavender to invigorating citrus, ensuring a customized olfactory experience for every preference. The long-lasting fragrances seamlessly blend into the environment, creating a welcoming ambiance that lingers. Del'la Soft Air Fresheners are not just about masking odors; they are a breath of fresh air, designed to elevate your surroundings with a touch of aromatic luxury. Embrace the essence of serenity and sophistication with Del'la Soft, where every spray is an invitation to a fresher, more inviting space.",
            "cat_bg" => "/frontend/img/main/air_fresheners.jpg",
            "must" =>"4",
            "isActive"=>"1"
        ]);
        Category::create([
            "cat_name" => "Carixe",
            "slug" => "carixe",
            "title" => "Carixe",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional.",
            "cat_bg" => "/frontend/img/main/car_care.jpg",
            "must" =>"5",
            "isActive"=>"1"
        ]);
    }
}
