<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('ecommerce_db_faker.products');

        foreach ($products as $product){
            $newProduct = new Product();
            $newProduct->name = $product['name'];
            $newProduct->brand = $product['brand'];
            $newProduct->description = $product['description'];
            $newProduct->category_id = $product['category_id'];
            $newProduct->stock = $product['stock'];
            $newProduct->is_approved = $product['is_approved'];
            $newProduct->is_private = $product['is_private'];
            $newProduct->save();
        }
    }
}
