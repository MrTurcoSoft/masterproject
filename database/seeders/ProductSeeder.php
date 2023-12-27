<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Product::create([
            "name" => "BODY LOTION",
            "title" => "Aloe Vera",
            "description" => "Truederm - Indulge in premium skincare with our vegan Aloe Vera Body Lotion. Certified by GHP and GMP, it blends nature's goodness with top-notch quality. Nourish your skin confidently. Discover it today.",
            "image" => "/frontend/img/skincare/Truederm-Body-Lotion-Aloe-vera.jpg",
            "must" => "1",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "BODY LOTION",
            "title" => "Papaya",
            "description" => "Truederm - Indulge in premium skincare with our vegan Papaya Body Lotion. Certified by GHP and GMP, it blends nature's goodness with top-notch quality. Nourish your skin confidently. Discover it today.",
            "image" => "/frontend/img/skincare/Truederm-Body-Lotion-Aloe-vera.jpg",
            "must" => "2",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "BODY LOTION",
            "title" => "Goji Berry",
            "description" => "Truederm - Indulge in premium skincare with our vegan Goji BerryBerryBody Lotion. Certified by GHP and GMP, it blends nature's goodness with top-notch quality. Nourish your skin confidently. Discover it today.",
            "image" => "/frontend/img/skincare/Truederm-Body-Lotion-Coconut.jpg",
            "must" => "3",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "BODY LOTION",
            "title" => "Shea Butter",
            "description" => "Truederm - Indulge in premium skincare with our vegan Goji BerryBerryBody Lotion. Certified by GHP and GMP, it blends nature's goodness with top-notch quality. Nourish your skin confidently. Discover it today.",
            "image" => "/frontend/img/skincare/Truederm-Body-Lotion-Sheabutter.jpg",
            "must" => "4",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "BODY LOTION",
            "title" => "Shea Butter",
            "description" => "Truederm - Indulge in premium skincare with our vegan Goji BerryBerryBody Lotion. Certified by GHP and GMP, it blends nature's goodness with top-notch quality. Nourish your skin confidently. Discover it today.",
            "image" => "/frontend/img/skincare/Truederm-Body-Lotion-Sheabutter.jpg",
            "must" => "5",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Hand Cream",
            "title" => "Aloe Vera",
            "description" => "Truederm - Indulge in premium skincare with our vegan Aloe Vera Hand CreamCream. Certified by GHP and GMP, it blends nature's goodness with top-notch quality. Nourish your skin confidently. Discover it today.",
            "image" => "/frontend/img/skincare/Truederm-HandSkin-Care-Cream-Aloe-Vera.jpg",
            "must" => "6",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Hand Cream",
            "title" => "Papaya",
            "description" => "Truederm - Indulge in premium skincare with our vegan Papaya Hand CreamCream. Certified by GHP and GMP, it blends nature's goodness with top-notch quality. Nourish your skin confidently. Discover it today.",
            "image" => "/frontend/img/skincare/Truederm-HandSkin-Care-Cream-Rose.jpg",
            "must" => "7",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Hand Cream",
            "title" => "Goji Berry",
            "description" => "Truederm - Indulge in premium skincare with our vegan Goji Berry Hand CreamCream. Certified by GHP and GMP, it blends nature's goodness with top-notch quality. Nourish your skin confidently. Discover it today.",
            "image" => "/frontend/img/skincare/Truederm-HandSkin-Care-Cream-Coconut.jpg",
            "must" => "8",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Hand Cream",
            "title" => "Sheabutter",
            "description" => "Truederm - Indulge in premium skincare with our vegan Shea Butter Hand CreamCream. Certified by GHP and GMP, it blends nature's goodness with top-notch quality. Nourish your skin confidently. Discover it today.",
            "image" => "/frontend/img/skincare/Truederm-HandSkin-Care-Cream-Sheabutter.jpg",
            "must" => "9",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Body Scrub",
            "title" => "Rose",
            "description" => "Experience skin transformation with DEL'LA SOFT's 350ml Vegan Rose Face & Body Scrub your ultimate solution for a radiant complexion. Effectively removing blackheads, its natural exfoliants gently cleanse and rejuvenate. Unveil the true potential of your skin with the power of Plant based Rose ExtractsExtracts. <br> Certified withwithGHP and GMP",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "10",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Body Scrub",
            "title" => "Aloe Vera",
            "description" => "Experience skin transformation with DEL'LA SOFT's 350ml Vegan Aoe Vera Face & Body Scrub your ultimate solution for a radiant complexion. Effectively removing blackheads, its natural exfoliants gently cleanse and rejuvenate. Unveil the true potential of your skin with the power of Aloe Vera . <br> Certified withwithGHP and GMP",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "11",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Body Scrub",
            "title" => "Strawberry",
            "description" => "Experience skin transformation with DEL'LA SOFT's 350ml Vegan Strawberry Face & Body Scrub your ultimate solution for a radiant complexion. Effectively removing blackheads, its natural exfoliants gently cleanse and rejuvenate. Unveil the true potential of your skin with the power of StrawberryStrawberry. <br> Certified withwithGHP and GMP",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "12",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Body Scrub",
            "title" => "Argan",
            "description" => "Experience skin transformation with DEL'LA SOFT's 350ml Vegan Argan Face & Body Scrub your ultimate solution for a radiant complexion. Effectively removing blackheads, its natural exfoliants gently cleanse and rejuvenate. Unveil the true potential of your skin with the power of Argan oil. <br> Certified withwithGHP and GMP ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "13",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Micellar Water",
            "title" => "",
            "description" => "Discover the ultimate in makeup removal and skincare with our Aloe Vera Micellar Water by DEL'LA SOFT. Infused with Aloe Vera, Glycerin, and Vitamin E, this vegan formula offers a gentle yet effective cleanse for all skin types, even sensitive ones. Effortlessly remove makeup, cleanse, and refresh your face without the need for rinsing or harsh rubbing. Elevate your skincare routine with the soothing power of Aloe Vera. Say hello to a radiant, makeup-free complexion – the easy and eco-friendly way. ",
            "image" => "/frontend/img/skincare/micellar-water.jpeg",
            "must" => "14",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Rose Water",
            "title" => "",
            "description" => "Experience the refreshing benefits of DEL'LA SOFT's Hydrating Rose Water Facial Toner. Enriched with pure Rose Water, this rejuvenating tonic revitalizes your skin's natural glow. Our vegan formula gently tones and hydrates, catering to all skin types. Elevate your skincare routine today for a radiant, refreshed complexion.For ALL SKIN Type ",
            "image" => "/frontend/img/skincare/rose_water.png",
            "must" => "15",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Skin Serum",
            "title" => "",
            "description" => "Elevate your skincare regimen with the exceptional benefits of DEL'LA SOFT's 30ml Skin Serum. Crafted to perfection, this serum is a potent elixir designed to transform your skin. Packed with a harmonious blend of powerful ingredients, it works tirelessly to revitalize, nourish, and unveil your skin's true radiance. <br> No matter your skin type, our Skin Serum caters to all, providing a personalized experience that addresses specific concerns. Whether it's targeting fine lines, uneven texture, or dullness, our serum delivers a rejuvenating touch that leaves your skin visibly smoother and more vibrant. <br> Embark on a journey to healthier-looking skin with the assurance of DEL'LA SOFT's quality and efficacy. Incorporate our 30ml Skin Serum into your routine and embrace the beauty of a revitalized complexion. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "16",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Face Mask",
            "title" => "Sheet",
            "description" => "Experience the luxurious rejuvenation of our Aloe Vera, Hyaluronic Acid, and Vitamin E Face Mask. Unveil the beauty of nature's finest ingredients as they synergistically transform your skincare routine. <br> Infused with the soothing essence of Aloe Vera, this mask offers a burst of hydration, calming even the most sensitive skin. Hyaluronic Acid, a skincare hero, deeply moisturizes, plumping up your skin for a youthful glow. Vitamin E, a potent antioxidant, works to protect and nourish, combating the effects of daily stressors. <br> Indulge in a spa-like ritual at home with this exquisite blend. Let the natural goodness of these ingredients replenish, revitalize, and leave your skin with a radiant, healthy allure. Elevate your self-care routine today with our Aloe Vera, Hyaluronic Acid, and Vitamin E Face Mask. Your skin deserves the best. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "17",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Shampoo",
            "title" => "Repair",
            "description" => "Experience the pinnacle of hair care excellence with DEL'LA SOFT's Professional Vegan Shampoo. Infused with reparative keratin, this remarkable formula revitalizes and strengthens your hair, restoring it to its former glory. Embrace the power of vegan ingredients as they gently cleanse and nourish, leaving your hair irresistibly silky and vibrant. Elevate your hair care routine with the trusted expertise of DEL'LA SOFT for locks that radiate health and beauty. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "18",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Shampoo",
            "title" => "Volume",
            "description" => "Elevate your hair care routine with DEL'LA SOFT's Professional Vegan Shampoo. Our expertly crafted formula, enriched with rejuvenating Argan oil, delivers exceptional repair and nourishment to your hair. Embrace the power of vegan ingredients as they gently cleanse, strengthen, and restore your locks to their full splendor. Experience the trusted expertise of DEL'LA SOFT for hair that's not only revitalized but also ethically cared for. Unlock the secret to radiant, healthy hair with our vegan, Argan-infused professional shampoo. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "19",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Shampoo",
            "title" => "Lux",
            "description" => "Experience the epitome of luxury hair care with DEL'LA SOFT's Vegan Lux Shampoo. Elevate your hair game as our premium formula pampers your locks with opulent care. Infused with the richness of vegan ingredients, this shampoo offers a lavish cleanse that leaves your hair feeling indulgently soft and revitalized. Treat yourself to the ultimate luxury of DEL'LA SOFT's Lux Shampoo and embrace the beauty of vegan hair care. Unveil the secret to luxurious tresses with a brand that values both your hair and our planet. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "20",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Conditioner",
            "title" => "1",
            "description" => "Discover the magic of DEL'LA SOFT's Argan Oil Hair Conditioner. Infused with the nourishing goodness of Argan oil, this conditioner is your ticket to luxuriously silky and healthy hair. Our formula is carefully crafted to provide deep hydration and repair, leaving your locks irresistibly smooth and vibrant. Elevate your hair care routine with the trusted excellence of DEL'LA SOFT. Embrace the natural power of Argan oil and experience a transformation in the way you care for your hair. Unlock the secret to radiant and luscious locks with DEL'LA SOFT's Argan Oil Hair Conditioner. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "21",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Conditioner",
            "title" => "2",
            "description" => "Discover the magic of DEL'LA SOFT's Argan Oil Hair Conditioner. Infused with the nourishing goodness of Argan oil, this conditioner is your ticket to luxuriously silky and healthy hair. Our formula is carefully crafted to provide deep hydration and repair, leaving your locks irresistibly smooth and vibrant. Elevate your hair care routine with the trusted excellence of DEL'LA SOFT. Embrace the natural power of Argan oil and experience a transformation in the way you care for your hair. Unlock the secret to radiant and luscious locks with DEL'LA SOFT's Argan Oil Hair Conditioner. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "22",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Conditioner",
            "title" => "Olive",
            "description" => "Introducing DEL'LA SOFT's Olive Oil Hair Conditioner – your hair's new best friend. Enriched with the rejuvenating properties of olive oil, this conditioner brings a touch of nature's nourishment to your locks. Experience the magic as it deeply hydrates and revitalizes, leaving your hair irresistibly smooth and vibrant. Elevate your hair care routine with the trusted excellence of DEL'LA SOFT. Embrace the natural power of olive oil and unveil a transformation in the way you care for your hair. Discover the secret to lush, radiant locks with DEL'LA SOFT's Olive Oil Hair Conditioner. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "23",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Hair Serum",
            "title" => "Argan",
            "description" => "Elevate your hair care to new heights with DEL'LA SOFT's Argan Oil Hair Serum. Experience the radiance and transformation that only pure Argan oil can bring. Our serum, free of parabens, sulfates, and gluten, is meticulously crafted to infuse your hair with the nourishing power of Argan oil, leaving it luxuriously silky and beautifully revitalized. Whether you're aiming for sleekness or shine, this serum has you covered. Embrace the excellence of DEL'LA SOFT as we unlock the secret to luscious, healthy hair. Indulge in the magic of Argan oil with our exceptional hair serum, and let your hair shine like never before. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "24",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Hair Serum",
            "title" => "Keratin",
            "description" => "Elevate your hair care to new heights with DEL'LA SOFT's Keratin Oil Hair Serum. Experience the radiance and transformation that only pure Keratin oil can bring. Our serum, free of parabens, sulfates, and gluten, is meticulously crafted to infuse your hair with the nourishing power of Keratin oil, leaving it luxuriously silky and beautifully revitalized. Whether you're aiming for sleekness or shine, this serum has you covered. Embrace the excellence of DEL'LA SOFT as we unlock the secret to luscious, healthy hair. Indulge in the magic of Keratin oil with our exceptional hair serum, and let your hair shine like never before. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "25",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Hair Mask",
            "title" => "Argan",
            "description" => "Experience the ultimate hair rejuvenation with DEL'LA SOFT's Argan Oil Hair Mask. Enriched with the natural goodness of Argan oil, this mask is your hair's perfect companion. Our vegan formula is meticulously crafted, free of parabens, sulfates, and gluten, ensuring a pure and enriching experience. Indulge in the power of Argan oil as it deeply nourishes, revitalizes, and restores your locks to their true brilliance. Elevate your hair care routine with DEL'LA SOFT, and let our Argan Oil Hair Mask unveil the secret to beautifully healthy and luscious hair. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "26",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Hair Mask",
            "title" => "Keratin & Protein",
            "description" => "Experience the ultimate hair rejuvenation with DEL'LA SOFT’s Keratin & Protein Hair Mask. Enriched with the natural goodness of Argan oil, this mask is your hair's perfect companion. Our vegan formula is meticulously crafted, free of parabens, sulfates, and gluten, ensuring a pure and enriching experience. Indulge in the power of Argan oil as it deeply nourishes, revitalizes, and restores your locks to their true brilliance. Elevate your hair care routine with DEL'LA SOFT, and let our Keratin& Protein Hair Mask unveil the secret to beautifully healthy and luscious hair. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "27",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Bodymist",
            "title" => "Amberlove",
            "description" => "Introducing DEL'LA SOFT's Vegan 250ml Body Mist – your enchanting fragrance companion infused with the essence of amber. Our meticulously crafted formula brings you a delightful burst of freshness, all while aligning with your values. Embrace the power of vegan ingredients as they create a harmonious symphony of scents, with the warm embrace of amber, that awaken the senses. Elevate your daily routine with the trusted excellence of DEL'LA SOFT. Experience the invigorating allure of our Amber-infused Body Mist, and let your essence shine through, naturally. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "28",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Bodymist",
            "title" => "Vanilla",
            "description" => "Introducing DEL'LA SOFT's Vegan 250ml Body Mist – your enchanting fragrance companion infused with the essence of sweet vanilia. Our meticulously crafted formula brings you a delightful burst of freshness, all while aligning with your values. Embrace the power of vegan ingredients as they create a harmonious symphony of scents, with the sweetness of vanilia, that awaken the senses. Elevate your daily routine with the trusted excellence of DEL'LA SOFT. Experience the invigorating allure of our Vanilia-infused Body Mist, and let your essence shine through, naturally. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "29",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Bodymist",
            "title" => "La Fantaisie",
            "description" => "Introducing DEL'LA SOFT's Vegan 250ml Body Mist – your enchanting fragrance companion infused with the essence of desire. Our meticulously crafted formula brings you a delightful burst of freshness, all while aligning with your values. Embrace the power of vegan ingredients as they create a harmonious symphony of scents, that awaken the senses. Elevate your daily routine with the trusted excellence of DEL'LA SOFT. Experience the invigorating allure of our Fantaisie-infused Body Mist, and let your essence shine through, naturally. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "30",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Cologne",
            "title" => "Lemon",
            "description" => "Elevate your senses with DEL'LA SOFT's Vegan Lemon Cologne – a burst of invigorating freshness in every spritz. Crafted with care, our cologne boasts cruelty-free ingredients and a high alcohol content that doubles as a disinfectant, offering a refreshing sensation and a touch of cleanliness. Embrace the zesty allure of lemon as it revitalizes your spirit. Experience the trusted excellence of DEL'LA SOFT, where nature-inspired scents meet cruelty-free ethics. Let our Lemon Cologne be your fragrant companion, blending refreshment and conscience seamlessly. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "31",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Cologne",
            "title" => "Fig",
            "description" => "Elevate your senses with DEL'LA SOFT's Vegan Fig Essence Cologne – a burst of invigorating freshness in every spritz. Crafted with care, our cologne boasts cruelty-free ingredients and a high alcohol content that doubles as a disinfectant, offering a refreshing sensation and a touch of cleanliness. Immerse yourself in the captivating essence of fig, as it enlivens your spirit. Experience the trusted excellence of DEL'LA SOFT, where nature-inspired scents meet cruelty-free ethics. Let our Fig Essence Cologne be your fragrant companion, blending refreshment and conscience seamlessly. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "32",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Cologne",
            "title" => "IceAqua",
            "description" => "Elevate your senses with DEL'LA SOFT's Ice & Aqua Cologne – a refreshing burst of invigoration in every spritz. Crafted with care, our cologne features cruelty-free ingredients and a high alcohol content that doubles as a disinfectant, offering a revitalizing sensation and a touch of cleanliness. Immerse yourself in the cool essence of ice and the purity of aqua, as they awaken your spirit. Experience the trusted excellence of DEL'LA SOFT, where nature-inspired scents meet ethical standards. Let our Ice & Aqua Cologne be your fragrant companion, merging refreshment and responsibility seamlessly. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "33",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Cologne",
            "title" => "Japanese Cherry Blossom",
            "description" => "Elevate your senses with DEL'LA SOFT's Japanese Cherry Blossom Cologne – a blossoming burst of enchantment in every spritz. Crafted with care, our cologne boasts cruelty-free ingredients and a high alcohol content that doubles as a disinfectant, offering a revitalizing sensation and a touch of cleanliness. Immerse yourself in the captivating essence of Japanese cherry blossom, as its delicate aroma uplifts your spirit. Experience the trusted excellence of DEL'LA SOFT, where nature-inspired scents meet ethical standards. Let our Japanese Cherry Blossom Cologne be your fragrant companion, harmonizing refreshment and responsibility seamlessly. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "34",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Cologne",
            "title" => "Vanilla Lily",
            "description" => "Elevate your senses with DEL'LA SOFT's Vanilla Lily Cologne – a harmonious burst of enchantment in every spritz. Crafted with care, our cologne features cruelty-free ingredients and a high alcohol content that doubles as a disinfectant, offering a revitalizing sensation and a touch of cleanliness. Immerse yourself in the captivating essence of vanilla and lily, as their gentle aromas uplift your spirit. Experience the trusted excellence of DEL'LA SOFT, where nature-inspired scents meet ethical standards. Let our Vanilla Lily Cologne be your fragrant companion, merging refreshment and responsibility seamlessly. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "35",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Cologne",
            "title" => "Lily",
            "description" => "Elevate your senses with DEL'LA SOFT's Lily Cologne – a delicate burst of enchantment in every spritz. Crafted with care, our cologne boasts cruelty-free ingredients and a high alcohol content that doubles as a disinfectant, offering a revitalizing sensation and a touch of cleanliness. Immerse yourself in the captivating essence of lily, as its gentle aroma uplifts your spirit. Experience the trusted excellence of DEL'LA SOFT, where nature-inspired scents meet ethical standards. Let our Lily Cologne be your fragrant companion, harmonizing refreshment and responsibility seamlessly. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "36",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Room Spray",
            "title" => "Blackwood",
            "description" => "Transform your space with DEL'LA SOFT's Vegan Blackwood Room Spray. Elevate your surroundings with this cruelty-free, 400ml spray, as it delivers a burst of invigorating freshness. Crafted to perfection, our room spray seamlessly combines a commitment to ethical practices with the captivating essence of blackwood. Experience the trusted excellence of DEL'LA SOFT, where nature-inspired scents meet responsible choices. Let our Blackwood Room Spray be your aromatic companion, infusing your space with a harmonious blend of refreshment and conscience. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "37",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Room Spray",
            "title" => "Lavender",
            "description" => "Elevate your ambiance with DEL'LA SOFT's Vegan Lavender Room Spray. Unveil tranquility in a cruelty-free, 400ml mist, as it envelops your space with soothing freshness. Meticulously crafted, our room spray seamlessly marries ethical values with the calming essence of lavender. Immerse yourself in DEL'LA SOFT's trusted excellence, where nature-inspired scents harmonize with responsible choices. Let our Lavender Room Spray be your aromatic companion, infusing your surroundings with a serene blend of refreshment and consciousness. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "38",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Room Spray",
            "title" => "Patchouli",
            "description" => "Elevate your surroundings with DEL'LA SOFT's Vegan Patchouli Room Spray. Embrace an atmosphere of earthy allure with this cruelty-free, 400ml mist, infusing your space with captivating freshness. Carefully curated, our room spray unites ethical principles with the distinctive essence of patchouli. Immerse yourself in the trusted excellence of DEL'LA SOFT, where nature-inspired scents align with conscious choices. Let our Patchouli Room Spray be your aromatic companion, enveloping your environment with a harmonious blend of refreshment and mindful intent. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "39",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Room Spray",
            "title" => "Vanille",
            "description" => "Elevate your space with DEL'LA SOFT's Vegan Vanilla Room Spray. Envelop your surroundings in a warm and inviting ambiance with this cruelty-free, 400ml mist. Thoughtfully created, our room spray seamlessly merges ethical values with the comforting essence of vanilla. Immerse yourself in DEL'LA SOFT's distinguished excellence, where nature-inspired scents harmonize with conscious choices. Allow our Vanilla Room Spray to be your aromatic companion, infusing your environment with a cozy blend of refreshment and mindful intent. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "40",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Room Spray",
            "title" => "Rosy",
            "description" => "Elevate your space with DEL'LA SOFT's Vegan Rose Room Spray. Experience the timeless elegance of rose in a cruelty-free, 400ml mist, embracing your surroundings with its delicate allure. Meticulously designed, our room spray harmonizes ethical values with the enchanting essence of rose. Immerse yourself in DEL'LA SOFT's trusted excellence, where nature-inspired scents seamlessly blend with responsible choices. Let our Rose Room Spray be your aromatic companion, infusing your environment with a sophisticated blend of refreshment and mindful intent. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "41",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Room Spray",
            "title" => "Talcum",
            "description" => "Elevate your surroundings with DEL'LA SOFT's Vegan Baby Powder Room Spray. Capture the soothing essence of baby powder in a cruelty-free, 400ml mist, enveloping your space in gentle comfort. Carefully curated, our room spray seamlessly marries ethical values with the nostalgic aroma of baby powder. Immerse yourself in DEL'LA SOFT's trusted excellence, where nature-inspired scents harmonize with responsible choices. Allow our Baby Powder Room Spray to be your aromatic companion, infusing your environment with a serene blend of refreshment and mindful intent. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "42",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Reed Diffuser",
            "title" => "Vanilla",
            "description" => "Introducing DEL'LA SOFT's Long Lasting Vanilla Reed Diffuser – an exquisite addition to your space. Crafted with care, our cruelty-free and vegan formula infuses your surroundings with the soothing allure of vanilla, providing a constant aromatic experience that lingers. Immerse yourself in the captivating essence, knowing it aligns with your ethical values. Embrace DEL'LA SOFT's commitment to excellence, where nature-inspired scents blend harmoniously with responsible choices. Let our Vanilla Reed Diffuser become your aromatic companion, filling your space with a comforting blend of fragrance and compassion. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "43",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Reed Diffuser",
            "title" => "Talcum",
            "description" => "Introducing DEL'LA SOFT's Long Lasting Baby Powder Reed Diffuser – a charming addition to your space. Carefully formulated, our cruelty-free and vegan reed diffuser infuses your surroundings with the gentle and nostalgic aroma of baby powder, creating an enduring aromatic experience. Immerse yourself in the comforting essence, knowing it resonates with your ethical values. Embrace DEL'LA SOFT's unwavering commitment to excellence, where nature-inspired scents seamlessly intertwine with responsible choices. Let our Baby Powder Reed Diffuser be your aromatic companion, filling your environment with a soothing blend of fragrance and compassion. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "44",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Reed Diffuser",
            "title" => "Rosy",
            "description" => "Introducing DEL'LA SOFT's Long Lasting Rose Reed Diffuser – a luxurious touch to your ambiance. Created with care, our cruelty-free and vegan reed diffuser fills your surroundings with the timeless and elegant scent of roses, offering a lasting aromatic journey. Immerse yourself in the enchanting essence, confident that it aligns with your ethical values. Embrace DEL'LA SOFT's dedicated pursuit of excellence, where nature-inspired fragrances seamlessly integrate with responsible choices. Allow our Rose Reed Diffuser to be your aromatic companion, infusing your space with a delicate blend of fragrance and compassion. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "45",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Reed Diffuser",
            "title" => "Patchouli",
            "description" => "Introducing DEL'LA SOFT's Long Lasting Patchouli Reed Diffuser – a captivating addition to your space. Expertly formulated, our cruelty-free and vegan reed diffuser envelops your surroundings with the rich and earthy aroma of patchouli, creating a lasting aromatic experience. Immerse yourself in the grounding essence, knowing it resonates with your ethical values. Embrace DEL'LA SOFT's unwavering commitment to excellence, where nature-inspired scents harmonize seamlessly with responsible choices. Let our Patchouli Reed Diffuser become your aromatic companion, filling your environment with a serene blend of fragrance and compassion. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "46",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Reed Diffuser",
            "title" => "Lavander",
            "description" => "Introducing DEL'LA SOFT's Long Lasting Lavender Reed Diffuser – an exquisite enhancement for your space. Meticulously crafted, our cruelty-free and vegan reed diffuser infuses your surroundings with the calming and timeless scent of lavender, offering a prolonged aromatic journey. Immerse yourself in the soothing essence, knowing it aligns with your ethical values. Embrace DEL'LA SOFT's unwavering commitment to excellence, where nature-inspired scents seamlessly blend with responsible choices. Allow our Lavender Reed Diffuser to be your aromatic companion, filling your environment with a tranquil blend of fragrance and compassion. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "47",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Reed Diffuser",
            "title" => "Blackwood",
            "description" => "Introducing DEL'LA SOFT's Long Lasting Blackwood Reed Diffuser – an elegant addition to your space. Carefully curated, our cruelty-free and vegan reed diffuser fills your surroundings with the captivating and woody aroma of blackwood, creating an enduring aromatic experience. Immerse yourself in the enchanting essence, confident that it resonates with your ethical values. Embrace DEL'LA SOFT's dedicated pursuit of excellence, where nature-inspired fragrances seamlessly integrate with responsible choices. Allow our Blackwood Reed Diffuser to be your aromatic companion, infusing your environment with a sophisticated blend of fragrance and compassion. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "48",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Air Freshener",
            "title" => "New Car",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "49",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Air Freshener",
            "title" => "Melon",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "50",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Air Freshener",
            "title" => "Lavender",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "51",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Air Freshener",
            "title" => "Vanilla",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "52",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Air Freshener",
            "title" => "Odor Eliminator",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "53",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Air Freshener",
            "title" => "Ocean",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "54",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Universal Cleaner",
            "title" => "",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "55",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Glass Shield",
            "title" => "",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "56",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Anti Fog",
            "title" => "",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "57",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Tire Shine",
            "title" => "",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "58",
            "isActive" => "1",
        ]);


        Product::create([
            "name" => "Car Perfume",
            "title" => "",
            "description" => "Della Soft's Car fixed car care products redefine the standard for automotive care, offering a comprehensive range of solutions under the Carixe brand. Meticulously formulated to address the diverse needs of car enthusiasts, Care products provide an unparalleled level of care for both the interior and exterior of vehicles. From powerful yet gentle car wash solutions to innovative interior cleaners, Car fixed ensures a meticulous and effective approach to maintaining the pristine condition of your vehicle. With a commitment to quality and performance, Carixe by Del'la Soft stands as a testament to the brand's dedication to excellence in automotive care, promising a driving experience that not only looks but feels exceptional. ",
            "image" => "https://place-hold.it/800x600?text=800x600&bold=true",
            "must" => "59",
            "isActive" => "1",
        ]);

    }
}
