<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificate::create([
            "name" => "Certificate 1",
            "image" => "https://place-hold.it/600x800?text=600x800&bold=true",
            "isActive" => "1"
        ]);
        Certificate::create([
            "name" => "Certificate 2",
            "image" => "https://place-hold.it/600x800?text=600x800&bold=true",
            "isActive" => "1"
        ]);
        Certificate::create([
            "name" => "Certificate 3",
            "image" => "https://place-hold.it/600x800?text=600x800&bold=true",
            "isActive" => "1"
        ]);
        Certificate::create([
            "name" => "Certificate 4",
            "image" => "https://place-hold.it/600x800?text=600x800&bold=true",
            "isActive" => "1"
        ]);
        Certificate::create([
            "name" => "Certificate 5",
            "image" => "https://place-hold.it/600x800?text=600x800&bold=true",
            "isActive" => "1"
        ]);
        Certificate::create([
            "name" => "Certificate 6",
            "image" => "https://place-hold.it/600x800?text=600x800&bold=true",
            "isActive" => "1"
        ]);
        Certificate::create([
            "name" => "Certificate 7",
            "image" => "https://place-hold.it/600x800?text=600x800&bold=true",
            "isActive" => "1"
        ]);
        Certificate::create([
            "name" => "Certificate 8",
            "image" => "https://place-hold.it/600x800?text=600x800&bold=true",
            "isActive" => "1"
        ]);
        Certificate::create([
            "name" => "Certificate 9",
            "image" => "https://place-hold.it/600x800?text=600x800&bold=true",
            "isActive" => "1"
        ]);
        Certificate::create([
            "name" => "Certificate 10",
            "image" => "https://place-hold.it/600x800?text=600x800&bold=true",
            "isActive" => "1"
        ]);
    }
}
