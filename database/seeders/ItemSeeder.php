<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Random;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['1','2','3','4',];

        $brands = ["HoshHosh", "Maximal", "Pulu", "Adadah", "Hawe", "Isime", "Alaha", "Simihe"];


        foreach ($categories as $category) {
            for ($i = 0; $i <= 3; $i++) {
                DB::table('items')->insert([
                    'brand_id' =>  fake()->numberBetween(1,8),
                    'category_id' => $category,
                    'item_name' => $this->getRandomItemName($category),
                    'price' => fake()->numberBetween(100000, 500000),
                    'description' => fake()->text(90),
                    'image_path' => $this->getRandomImagePath($category)
                ]);
            }
        }

    }

    private function getRandomItemName($category)
    {
        $itemNames = [
            '1' => ['T-shirt', 'Polo shirt', 'Button-up shirt', 'Tank top', 'Henley shirt'],
            '2' => ['Backpack', 'Messenger bag', 'Tote bag', 'Duffel bag', 'Clutch'],
            '3' => ['Sneakers', 'Loafers', 'Boots', 'Sandals', 'Oxfords'],
            '4' => ['Summer dress', 'Maxi dress', 'Bodycon dress', 'Midi dress', 'Shift dress'],
        ];

        return Arr::random($itemNames[$category]);
    }

    private function getRandomImagePath($category)
    {
        $imagePathTemplates = [
            '1' => 'img/shirt.jpeg',
            '2' => 'img/bag.jpeg',
            '3' => 'img/shoes.jpeg',
            '4' => 'img/dress.jpeg',
        ];

        $imagePath = $imagePathTemplates[$category];

        return str_replace(' ', '%20', $imagePath);
    }
}
