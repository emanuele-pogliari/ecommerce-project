<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productVariants = config('ecommerce_db_faker.product_variants');
        foreach ($productVariants as $variant){
            $newVariant = new ProductVariant();
            $newVariant->product_id = $variant['product_id'];
            $newVariant->type = $variant['type'];
            $newVariant->type_value = $variant['type_value'];
            $newVariant->save();
        }
    }
}
