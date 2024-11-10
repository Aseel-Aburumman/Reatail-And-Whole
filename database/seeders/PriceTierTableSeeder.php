<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PriceTier;

class PriceTierTableSeeder extends Seeder
{
    public function run()
    {

        PriceTier::create([
            'name' => '10% off for quantity over 150',
            'percentage' => '10',
            'quantity' => '150',
        ]);
        PriceTier::create([
            'name' => '20% off for quantity over 200',
            'percentage' => '20',
            'quantity' => '200',
        ]);
        PriceTier::create([
            'name' => '30% off for quantity over 250',
            'percentage' => '30',
            'quantity' => '250',
        ]);
    }
}
