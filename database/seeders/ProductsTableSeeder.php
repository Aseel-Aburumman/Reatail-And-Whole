<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // 1
        Product::create([
            'name' => 'product 1',
            'price' => 100,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, incidunt temporibus cupiditate a praesentium perspiciatis.',
            'minimumquantities' => 50,
            'store_id' => 1,
            'image' => 'pending',
        ]);


        Product::create([
            'name' => 'product 2',
            'price' => 50,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, incidunt temporibus cupiditate a praesentium perspiciatis.',
            'minimumquantities' => 50,
            'store_id' => 1,
            'image' => 'pending',
        ]);
    }
}
