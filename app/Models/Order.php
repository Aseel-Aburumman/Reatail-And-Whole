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
        return $this->belongsTo(User::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
