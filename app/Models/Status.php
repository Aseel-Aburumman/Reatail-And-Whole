<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];


    public function OrderItem()
    {
        return $this->hasMany(OrderItem::class);
    }

    public static function createStatus($data)
    {
        return self::create($data);
    }

    public function updateStatus($data)
    {
        return $this->update($data);
    }

    public function deleteStatus()
    {
        return $this->delete();
    }
}
