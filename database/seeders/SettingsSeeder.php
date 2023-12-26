<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                "settings_description" => "Sayfa Başlığı",
                "settings_key" => "site_name",
                "settings_value" => "Del'la Soft",
                "settings_type" => "text",
                "settings_must" => "22"
            ],
            [
                "settings_description" => "Açıklama (Footerda Kullanılacak)",
                "settings_key" => "footer_message",
                "settings_value" => "#",
                "settings_type" => "text",
                "settings_must" => "24"
            ],
            [
                "settings_description" => "Site ile ilgili bilgi (Arama Motorlarında görünecek)",
                "settings_key" => "site_description",
                "settings_value" => "Detaylı bilgi yazın.......",
                "settings_type" => "textarea",
                "settings_must" => "23"
            ],
            [
                "settings_description" => "Logo (standart)",
                "settings_key" => "logo",
                "settings_value" => "/frontend/img/della_soft_logo.png",
                "settings_type" => "logo",
                "settings_must" => "11"
            ],
            [
                "settings_description" => "Logo (küçük)",
                "settings_key" => "logo_small",
                "settings_value" => "/frontend/img/della_soft_logo_2.png",
                "settings_type" => "slogo",
                "settings_must" => "12"
            ],
            [
                "settings_description" => "Footer Logo",
                "settings_key" => "logo_footer",
                "settings_value" => "#",
                "settings_type" => "slogo",
                "settings_must" => "13",
                "see_is_user" => "0"
            ],
            [
                "settings_description" => "Favicon",
                "settings_key" => "favicon",
                "settings_value" => "/frontend/img/favicon.png",
                "settings_type" => "favicn",
                "settings_must" => "14"
            ],
            [
                "settings_description" => "Telefon (Sabit)",
                "settings_key" => "phone",
                "settings_value" => "+90 212 909 52 05",
                "settings_type" => "text",
                "settings_must" => "07"
            ],
            [
                "settings_description" => "Telefon (GSM)",
                "settings_key" => "phoneGsm",
                "settings_value" => "+90 542 408 62 26",
                "settings_type" => "text",
                "settings_must" => "08"
            ],
            [
                "settings_description" => "E-Posta",
                "settings_key" => "email",
                "settings_value" => "info@dellasoft.net",
                "settings_type" => "text",
                "settings_must" => "10"
            ],
            [
                "settings_description" => "Firma Şehir",
                "settings_key" => "firmCity",
                "settings_value" => "Istanbul",
                "settings_type" => "text",
                "settings_must" => "03"
            ],
            [
                "settings_description" => "Firma İlçe",
                "settings_key" => "firmCounty",
                "settings_value" => "Bakırkoy",
                "settings_type" => "text",
                "settings_must" => "04"
            ],
            [
                "settings_description" => "Adres",
                "settings_key" => "address",
                "settings_value" => "Atakoy Towers,A Blok No:20",
                "settings_type" => "text",
                "settings_must" => "05"
            ],
            [
                "settings_description" => "Posta kodu",
                "settings_key" => "postcode",
                "settings_value" => "34158",
                "settings_type" => "text",
                "settings_must" => "06"
            ],
            [
                "settings_description" => "Facebook (facebook.com/ dan sonra yazan kullanıcı adınızı yazınız.",
                "settings_key" => "facebook",
                "settings_value" => "",
                "settings_type" => "text",
                "settings_must" => "15"
            ],
            [
                "settings_description" => "Instagram (instagram.com/ dan sonra yazan kullanıcı adınızı yazınız.",
                "settings_key" => "instagram",
                "settings_value" => "del_la_soft",
                "settings_type" => "text",
                "settings_must" => "16"
            ],
            [
                "settings_description" => "Linkedin (linkedin.com/showcase/ dan sonra yazan kullanıcı adınızı yazınız.",
                "settings_key" => "linkedin",
                "settings_value" => "del-la-soft",
                "settings_type" => "text",
                "settings_must" => "17"
            ],
            [
                "settings_description" => "X-Twitter (twitter.com/ dan sonra yazan kullanıcı adınızı yazınız.",
                "settings_key" => "twitter",
                "settings_value" => "",
                "settings_type" => "text",
                "settings_must" => "18"
            ],
            [
                "settings_description" => "Harita",
                "settings_key" => "gmaps",
                "settings_value" => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.534423738603!2d28.82925218432834!3d40.99167459748824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa35b36507c11%3A0xba9b4ff567d66e0b!2sAUREUS%20Limited!5e0!3m2!1str!2str!4v1702832099784!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                "settings_type" => "textarea",
                "settings_must" => "19"
            ],
            [
                "settings_description" => "Çalışma Saatleri -Hafta İçi",
                "settings_key" => "workHour_week",
                "settings_value" => "09:00 - 19:00",
                "settings_type" => "text",
                "settings_must" => "20"
            ],
            [
                "settings_description" => "Çalışma Saatleri -Hafta Sonu",
                "settings_key" => "workHour_weekend",
                "settings_value" => "10:00 - 16:00",
                "settings_type" => "text",
                "settings_must" => "21"
            ],
            [
                "settings_description" => "İşletme Adı",
                "settings_key" => "firm",
                "settings_value" => "AUREUS DIS TIC.LTD.STI",
                "settings_type" => "text",
                "settings_must" => "01"
            ],
            [
                "settings_description" => "Marka",
                "settings_key" => "mark",
                "settings_value" => "Del'la Soft",
                "settings_type" => "text",
                "settings_must" => "02"
            ],
            [
                "settings_description" => "Whatsapp No",
                "settings_key" => "whatsapp",
                "settings_value" => "905424086226",
                "settings_type" => "text",
                "settings_must" => "09"
            ],
            [
                "settings_description" => "Site URL (Sadece domain.com şeklinde",
                "settings_key" => "site_url",
                "settings_value" => "dellasoft.net",
                "settings_type" => "text",
                "settings_must" => "24"
            ],
            [
                "settings_description" => "Site Bakım Modu",
                "settings_key" => "maintenance",
                "settings_value" => "0",
                "settings_type" => "switch",
                "settings_must" => "26"
            ],

            [
                "settings_description" => " Yönetim Paneli Başlığı",
                "settings_key" => "adminTitle",
                "settings_value" => "Del'la Soft.net Site Yönetim Paneli ",
                "settings_type" => "text",
                "settings_must" => "100",
                "see_is_user" => "0"
            ],
            [
                "settings_description" => "Web Master",
                "settings_key" => "author",
                "settings_value" => "MrTurco",
                "settings_type" => "text",
                "settings_must" => "101",
                "see_is_user" => "0"
            ],
            [
                "settings_description" => "Web Master Site Url",
                "settings_key" => "webmaster_url",
                "settings_value" => "https://by-turco.com",
                "settings_type" => "text",
                "settings_must" => "102",
                "see_is_user" => "0"
            ],
            [
                "settings_description" => "Web Master Mail",
                "settings_key" => "webmaster_email",
                "settings_value" => "ismail@nielsenchase.com",
                "settings_type" => "text",
                "settings_must" => "103",
                "see_is_user" => "0"
            ]
        ];

        foreach ($settings as $setting) {
            Setting::create([
                "settings_description" => $setting["settings_description"],
                "settings_key" => $setting["settings_key"],
                "settings_value" => $setting["settings_value"],
                "settings_type" => $setting["settings_type"],
                "settings_must" => $setting["settings_must"]
            ]);
        }
    }
}
