<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'deadline',
        'store_id',
        'initiator_retailer_id',

    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function retailer()
    {
        return $this->belongsTo(User::class, 'initiator_retailer_id');
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }


    public static function getAllOrders()
    {
        return self::all();
    }

    public static function createOrder(array $data)
    {
        return self::create($data);
    }

    public function updateOrder(array $data)
    {
        return $this->update($data);
    }

    public function deleteOrder()
    {
        return $this->delete();
    }

    public static function findOrderById(int $id)
    {
        return self::find($id);
    }
}
