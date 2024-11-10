<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderContribution;

class OrderContributionTableSeeder extends Seeder
{
    public function run()
    {

        OrderContribution::create([
            'order_item_id' => '1',
            'retailer_id' => 3,
            'quantity' => 100,
        ]);

        OrderContribution::create([
            'order_item_id' => '1',
            'retailer_id' => 4,
            'quantity' => 100,
        ]);


        OrderContribution::create([
            'order_item_id' => '2',
            'retailer_id' => 3,
            'quantity' => 100,
        ]);

        OrderContribution::create([
            'order_item_id' => '2',
            'retailer_id' => 4,
            'quantity' => 50,
        ]);
    }
}
