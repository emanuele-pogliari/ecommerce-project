<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = config('ecommerce_db_faker.orders');
        foreach ($orders as $order){
            $newOrder = new Order();
            $newOrder->user_id = $order['user_id'];
            $newOrder->status = $order['status'];
            $newOrder->total = $order['total_price'];
            $newOrder->cart_id = $order['cart_id'];
            $newOrder->save();
        }
    }
}
