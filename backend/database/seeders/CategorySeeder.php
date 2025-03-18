<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = config('ecommerce_db_faker.categories');
        foreach ($category as $category){
            $newCategory = new Category();
            $newCategory->name = $category['name'];
            $newCategory->parent_id = $category['parent_id'];
            $newCategory->save();
        }
    }
}
