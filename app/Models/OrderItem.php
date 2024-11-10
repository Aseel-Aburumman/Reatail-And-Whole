<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_quantity',
        'order_id',
        'product_id',
        'price_tier_id',
        'status_id',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function priceTier()
    {
        return $this->belongsTo(Pricetier::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function contributions()
    {
        return $this->hasMany(OrderContribution::class);
    }
}
