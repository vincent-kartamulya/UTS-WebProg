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
            "category" => "Long Reads"
        ]);
        Category::create([
            "category" => "Medium Reads"
        ]);
        Category::create([
            "category" => "Quick Reads"
        ]);
    }
}
