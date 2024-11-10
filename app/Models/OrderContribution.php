<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderContribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_item_id',
        'retailer_id',
        'quantity',
        'contribution_date',



    ];

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function retailer()
    {
        return $this->belongsTo(User::class);
    }
}
