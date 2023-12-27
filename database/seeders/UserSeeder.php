<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Ismail TÜRK",
            "email" => "ismail@nielsenchase.com",
            "password" => Hash::make('17050099Asli*'),
            "image" => "admin/image/MrTurco.jpeg",
            "isAdmin" => "0", //0: SuperAdmin 1:Admin 2:Editor
            "isActive" => "1",
        ]);

        User::create([
            "name" => "Can Küçükşabanoğlu",
            "email" => "office@aureus.ltd",
            "password" => Hash::make('CanAureus2024*Della'),
            "image" => "admin/image/user_image.png",
            "isAdmin" => "1", //0: SuperAdmin 1:Admin 2:Editor
            "isActive" => "1",
        ]);
    }
}
