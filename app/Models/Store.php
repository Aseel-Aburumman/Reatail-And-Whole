<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }


    public static function getAllStores()
    {
        return self::all();
    }

    public static function createStore(array $data)
    {
        return self::create($data);
    }

    public function updateStore(array $data)
    {
        return $this->update($data);
    }

    public function deleteStore()
    {
        return $this->delete();
    }

    public static function findStoreById(int $id)
    {
        return self::find($id);
    }
}
