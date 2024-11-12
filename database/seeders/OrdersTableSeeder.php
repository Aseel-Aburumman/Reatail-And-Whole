<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {

        Order::create([
            'deadline' => Carbon::now()->addDays(10),
            'store_id' => 1,
            'initiator_retailer_id' => 3,
            'total_quantity' => '200',
            'product_id' => 1,
            'price_tier_id' => 2,
            'status_id' => 1,
        ]);

        Order::create([
            'deadline' => Carbon::now()->addDays(10),
            'store_id' => 1,
            'initiator_retailer_id' => 4,
            'total_quantity' => '150',
            'product_id' => 2,
            'price_tier_id' => 1,
            'status_id' => 2,
        ]);
    }
}
