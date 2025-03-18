<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerReview extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'rating', 'seller_id'];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
