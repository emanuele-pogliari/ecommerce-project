<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sellers = config('ecommerce_db_faker.sellers');
        foreach ($sellers as $seller){
            $newSeller = new Seller();
            $newSeller->user_id = $seller['user_id'];
            $newSeller->store_name = $seller['store_name'];
            $newSeller->logo_store = $seller['logo_store'];
            $newSeller->vat = $seller['vat'];
            $newSeller->save();
        }
    }
}
