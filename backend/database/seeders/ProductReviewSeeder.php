<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productReviews = config('ecommerce_db_faker.product_reviews');
        foreach ($productReviews as $review){
            $newReview = new ProductReview();
            $newReview->product_id = $review['product_id'];
            $newReview->comment = $review['comment'];
            $newReview->rating = $review['rating'];
            $newReview->save();
        }
    }
}
