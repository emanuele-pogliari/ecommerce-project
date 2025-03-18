<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carts = config('ecommerce_db_faker.carts');
        foreach ($carts as $cart){
            $newCart = new Cart();
            $newCart->user_id = $cart['user_id'];
            $newCart->save();
        }
    }
}
