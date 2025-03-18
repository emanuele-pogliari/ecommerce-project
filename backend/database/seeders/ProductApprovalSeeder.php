<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductApprovalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productApproval = config('ecommerce_db_faker.product_approvals');
        foreach ($productApproval as $approval){
            $newApproval = new ProductApproval();
            $newApproval->product_id = $approval['product_id'];
            $newApproval->new_name = $approval['new_name'];
            $newApproval->new_price = $approval['new_price'];
            $newApproval->new_stock = $approval['stock'];
            $newApproval->new_brand = $approval['new_brand'];
            $newApproval->new_description = $approval['new_description'];
            $newApproval->type = $approval['type'];
            $newApproval->seller_id = $approval['seller_id'];
            $newApproval->admin_id = $approval['admin_id'];
            $newApproval->reason = $approval['reason'];
            $newApproval->status = $approval['status'];
            $newApproval->save();
        }
    }
}
