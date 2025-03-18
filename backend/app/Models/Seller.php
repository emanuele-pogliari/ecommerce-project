<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [ 'store_name', 'logo_store', 'vat', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function approvals()
    {
        return $this->hasMany(ProductApproval::class);
    }

    public function sellerReviews()
    {
        return $this->hasMany(SellerReview::class);
    }

  
}
