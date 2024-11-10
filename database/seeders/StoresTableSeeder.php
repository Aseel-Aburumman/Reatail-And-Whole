<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoresTableSeeder extends Seeder
{
    public function run()
    {
        // Store 1 - Handyman Tools

        Store::create([
            'user_id' => 2,
            'name' => 'Garden Tools Store',
        ]);
    }
}
