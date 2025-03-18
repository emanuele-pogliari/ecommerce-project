<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInfo;
use App\Models\Admin;
use App\Models\Seller;
use App\Models\SellerReview;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\ProductReview;
use App\Models\ProductApproval;
use App\Models\ProductVariant;
use App\Models\ProductImage;
use App\Models\CartSeeder;
use App\Models\CartItemsSeeder;
use App\Models\OrderSeeder;
use App\Models\OrderItemSeeder;
use App\Models\PayementSeeder;
use App\Models\ShipmentSeeder;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            UserInfo::class,
            AdminSeeder::class,
            SellerSeeder::class,
            SellerReviewSeeder::class,
            
            CategorySeeder::class,

            ProductSeeder::class,
            ProductPrice::class,
            ProductReviewSeeder::class,
            ProductApprovalSeeder::class,
            ProductVariantSeeder::class,
            ProductImageSeeder::class,
            
            
            CartSeeder::class,
            CartItemsSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            PayementSeeder::class,
            ShipmentSeeder::class,

        ]);
    }
}
