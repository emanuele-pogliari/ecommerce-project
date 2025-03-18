<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productPrices = config('ecommerce_db_faker.product_prices');

        foreach ($productPrices as $price){
            $newPrice = new ProductPrice();
            $newPrice->product_id = $price['product_id'];
            $newPrice->admin_id = $price['admin_id'];
            $newPrice->seller_id = $price['seller_id'];
            $newPrice->price = $price['price'];
            $newPrice->save();
        }
    }
}
