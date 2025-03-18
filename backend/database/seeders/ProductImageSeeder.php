<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productImages = config('ecommerce_db_faker.product_images');
        foreach ($productImages as $image){
            $newImage = new ProductImage();
            $newImage->product_id = $image['product_id'];
            $newImage->image_url = $image['image_url'];
            $newImage->is_primary = $image['is_primary'];
            $newImage->save();
        }
    }
}
