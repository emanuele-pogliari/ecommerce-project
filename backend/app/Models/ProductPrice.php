<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'seller_id', 'product_id', 'admin_id'];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
    public function seller()
    {
        return $this->belongsToMany(Seller::class);
    }
    public function admin()
    {
        return $this->belongsToMany(Admin::class);
    }
}
