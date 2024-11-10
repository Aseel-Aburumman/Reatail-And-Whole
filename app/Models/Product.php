<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'minimumquantities',
        'store_id',
        'image'

    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
}
