<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderContribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'retailer_id',
        'quantity',



    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function retailer()
    {
        return $this->belongsTo(User::class);
    }



    public static function getAllContribution()
    {
        return self::all();
    }

    public static function createContribution(array $data)
    {
        return self::create($data);
    }

    public function updateContribution(array $data)
    {
        return $this->update($data);
    }

    public function deleteContribution()
    {
        return $this->delete();
    }

    public static function findContributionById(int $id)
    {
        return self::find($id);
    }
}
