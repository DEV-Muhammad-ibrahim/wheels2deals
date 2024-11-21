<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'name' => 'SUV/Crossover',
            'image' => 'assets/images/type/Suv.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Hyper cars',
            'image' => 'assets/images/type/hypercar.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Vintage cars',
            'image' => 'assets/images/type/wintage.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Off-roaders',
            'image' => 'assets/images/type/offroader.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Convertible',
            'image' => 'assets/images/type/convertible.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Coupe',
            'image' => 'assets/images/type/coupe.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Pickup truck',
            'image' => 'assets/images/type/pickuptruck.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Sedan',
            'image' => 'assets/images/type/sedan.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Hatchback',
            'image' => 'assets/images/type/hatchback.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Van',
            'image' => 'assets/images/type/van.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Jeep',
            'image' => 'assets/images/type/jeep.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Sports car',
            'image' => 'assets/images/type/sportscar.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('types')->insert([
            'name' => 'Desert Car',
            'image' => 'assets/images/type/desertcar.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('types')->insert([
            'name' => 'Wagon',
            'image' => 'assets/images/type/desertcar.jpg', // Adjust as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
