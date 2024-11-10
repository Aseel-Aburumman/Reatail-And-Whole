<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemTableSeeder extends Seeder
{
    public function run()
    {

        OrderItem::create([
            'total_quantity' => '200',
            'order_id' => 1,
            'product_id' => 1,
            'price_tier_id' => 2,
            'status_id' => 1,
        ]);


        OrderItem::create([
            'total_quantity' => '150',
            'order_id' => 2,
            'product_id' => 2,
            'price_tier_id' => 1,
            'status_id' => 2,
        ]);
    }
}
