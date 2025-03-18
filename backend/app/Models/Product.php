<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    protected $fillable = ['stock', 'description', 'is_approved',  'name', 'brand', 'is_private', 'category_id'];
    

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function approvals()
    {
        return $this->hasMany(ProductApproval::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }
}
