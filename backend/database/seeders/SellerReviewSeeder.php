<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seller_reviews = config('ecommerce_db_faker.seller_reviews');
        foreach ($seller_reviews as $review){
            $newReview = new SellerReview();
            $newReview->seller_id = $review['seller_id'];
            $newReview->comment = $review['comment'];
            $newReview->rating = $review['rating'];
            $newReview->save();
        }
    }
}
