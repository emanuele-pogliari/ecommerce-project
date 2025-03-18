<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductApproval extends Model
{
    use HasFactory;
    protected $fillable = ['new_name', 'new_price', 'new_stock', 'new_brand', 'new_description', 'type', 'approved_by', 'status', 'product_id', 'seller_id', 'admin_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
