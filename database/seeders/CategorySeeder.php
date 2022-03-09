<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            "id" => "1",
            "category_name" => "Art"
        ]);

        Category::create([
            "id" => "2",
            "category_name" => "Collectibles"
        ]);

        Category::create([
            "id" => "3",
            "category_name" => "Domain Names"
        ]);

        Category::create([
            "id" => "4",
            "category_name" => "Music"
        ]);

        Category::create([
            "id" => "5",
            "category_name" => "Photography"
        ]);

        Category::create([
            "id" => "6",
            "category_name" => "Sports"
        ]);

        Category::create([
            "id" => "7",
            "category_name" => "Trading Cards"
        ]);
    }
}
