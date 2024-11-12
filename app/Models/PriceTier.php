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
    public static function createPriceTier($data)
    {
        return self::create($data);
    }

    public function updatePriceTier($data)
    {
        return $this->update($data);
    }

    public function deletePriceTier()
    {
        return $this->delete();
    }
}
