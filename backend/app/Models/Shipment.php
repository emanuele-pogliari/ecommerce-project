<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shipment extends Model
{
    use HasFactory;
    protected $fillable = ['traking_number', 'carrier','status','order_id'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
