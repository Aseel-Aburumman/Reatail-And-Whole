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


    public static function getAllOrderItems()
    {
        return self::all();
    }

    public static function createOrderItem(array $data)
    {
        return self::create($data);
    }

    public function updateOrderItem(array $data)
    {
        return $this->update($data);
    }

    public function deleteOrderItem()
    {
        return $this->delete();
    }

    public static function findOrderItemById(int $id)
    {
        return self::find($id);
    }
}
