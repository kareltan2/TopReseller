<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'category_name' => "Shirt"
        ]);

        DB::table('categories')->insert([
            'category_name' => "Bag"
        ]);

        DB::table('categories')->insert([
            'category_name' => "Shoes"
        ]);

        DB::table('categories')->insert([
            'category_name' => "Dress"
        ]);
    }
}
