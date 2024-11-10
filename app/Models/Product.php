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



    public static function getAllProducts()
    {
        return self::all();
    }

    public static function createProduct(array $data)
    {
        return self::create($data);
    }

    public function updateProduct(array $data)
    {
        return $this->update($data);
    }

    public function deleteProduct()
    {
        return $this->delete();
    }

    public static function findProductById(int $id)
    {
        return self::find($id);
    }
}
