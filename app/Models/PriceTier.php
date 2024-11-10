<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceTier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'percentage',
        'quantity'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
