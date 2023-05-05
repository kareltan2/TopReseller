<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('brands')->insert([
            'item_id' =>  fake()->numberBetween(1,5),
            'top5_flag' => 1,
            'brand_name' => "HoshHosh",
            'description' => fake()->text(90),
            'image_path' => "img/HoshHosh.png"
        ]);

        DB::table('brands')->insert([
            'item_id' =>  fake()->numberBetween(1,5),
            'top5_flag' => 2,
            'brand_name' => "Maximal",
            'description' => fake()->text(90),
            'image_path' => "img/Maximal.png"
        ]);

        DB::table('brands')->insert([
            'item_id' =>  fake()->numberBetween(1,5),
            'top5_flag' => 3,
            'brand_name' => "Pulu",
            'description' => fake()->text(90),
            'image_path' => "img/Pulu.png"
        ]);

        DB::table('brands')->insert([
            'item_id' =>  fake()->numberBetween(1,5),
            'top5_flag' => 4,
            'brand_name' => "Adadah",
            'description' => fake()->text(90),
            'image_path' => "img/Adadah.png"
        ]);

        DB::table('brands')->insert([
            'item_id' =>  fake()->numberBetween(1,5),
            'top5_flag' => 5,
            'brand_name' => "Hawe",
            'description' => fake()->text(90),
            'image_path' => "img/Hawe.png"
        ]);

        DB::table('brands')->insert([
            'item_id' =>  fake()->numberBetween(1,5),
            'top5_flag' => 6,
            'brand_name' => "Isime",
            'description' => fake()->text(90),
            'image_path' => "img/Isime.png"
        ]);
        
        DB::table('brands')->insert([
            'item_id' =>  fake()->numberBetween(1,5),
            'top5_flag' => 7,
            'brand_name' => "Alaha",
            'description' => fake()->text(90),
            'image_path' => "img/Alaha.png"
        ]);

        DB::table('brands')->insert([
            'item_id' =>  fake()->numberBetween(1,5),
            'top5_flag' => 8,
            'brand_name' => "Simihe",
            'description' => fake()->text(90),
            'image_path' => "img/Simihe.png"
        ]);
    }
}
