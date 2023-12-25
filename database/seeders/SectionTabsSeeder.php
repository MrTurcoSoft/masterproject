<?php

namespace Database\Seeders;

use App\Models\SectionTab;
use Illuminate\Database\Seeder;

class SectionTabsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionTab::create([
            "title"=>"Skin Care Products",
            "description"=>"Del'la Soft's Skin Care Products for a Glowing, Toned, and Rejuvenated Complexion. <br> <br> Our skin care products are meticulously crafted using natural oils and extracts to revolutionize your skincare routine. Our mission is to transform natural oils into skin-friendly formulations that nourish your skin without leaving it greasy, while enriching them with unique active ingredients for enhanced benefits. We've conducted dedicated research and development efforts with the latest, award-winning active components to create purpose-driven products that we proudly present to you.",
            "btnText"=>"View Products",
            "image"=>"https://place-hold.it/600x600?text=600x600&bold=true",
            "url"=>"category/skin-care",
            "isActive"=>"1"
        ]);
        SectionTab::create([
            "title"=>"Hair Care Products",
            "description"=>"Del'la Soft's Hair Care Products offer everything you require for lustrous, vibrant, and healthy hair.<br> <br> Our hair care products are meticulously developed to cater to the specific needs of various hair types, enriched with carefully selected natural oils and extracts. Whether you're looking to prevent hair loss, restore damaged locks, hydrate, or boost volume, we have designed specialized products for you, spanning from shampoo to hair care serums. ",
            "btnText"=>"View Products",
            "image"=>"https://place-hold.it/600x600?text=600x600&bold=true",
            "url"=>"category/hair-care",
            "isActive"=>"1"
        ]);
        SectionTab::create([
            "title"=>"Body Fragrances Products",
            "description"=>"\"Del'la Soft's Body Fragrances: Embrace the Art of Scenting Yourself\" <br> <br> Elevate your everyday with Del'la Soft's BODY FRAGRANCES collection, where scent becomes an art form. Our fragrances are carefully curated to offer a captivating and enduring essence that will envelop your body in a delightful aura. Each fragrance is a masterpiece, designed to leave a unique and unforgettable impression. ",
            "btnText"=>"View Products",
            "image"=>"https://place-hold.it/600x600?text=600x600&bold=true",
            "url"=>"category/body-fragrances",
            "isActive"=>"1"
        ]);
        SectionTab::create([
            "title"=>"AIR FRESHENERS Products",
            "description"=>"Del'la Soft's AIR FRESHENERS: Elevate Every Breath You Take <br> <br> At Del'la Soft, we invite you to explore the realm of AIR FRESHENERS, where every breath you take is an opportunity to elevate your surroundings. Our meticulously curated selection of delightful scents is designed to do more than just mask odors; they are crafted to infuse your living spaces with natural, long-lasting freshness. <br> Our air fresheners are more than just fragrances; they are a breath of fresh air for your home or workspace. With a commitment to enhancing air quality and transforming your environment, our special products are here to create a lasting impact. Breathe in, and let Del'la Soft AIR FRESHENERS redefine the way you experience your space. ",
            "btnText"=>"View Products",
            "image"=>"https://place-hold.it/600x600?text=600x600&bold=true",
            "url"=>"category/air-fresheners",
            "isActive"=>"1"
        ]);
    }
}
