<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payements = config('ecommerce_db_faker.payements');

        foreach ($payements as $payment){
            $newPayment = new Payment();
            $newPayment->order_id = $payment['order_id'];
            $newPayment->pay_method = $payment['pay_method'];
            $newPayment->amount = $payment['amount'];
            $newPayment->status = $payment['status'];
            $newPayment->save();
        }
    } 
}
