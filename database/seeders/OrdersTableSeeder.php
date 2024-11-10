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
        ]);

        Order::create([
            'deadline' => Carbon::now()->addDays(10),
            'store_id' => 1,
            'initiator_retailer_id' => 4,
        ]);
    }
}
