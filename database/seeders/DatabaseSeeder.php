<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\OrderContribution;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleAndPermissionSeeder::class,
            UsersTableSeeder::class,
            StoresTableSeeder::class,
            ProductsTableSeeder::class,
            StatusTableSeeder::class,
            PriceTierTableSeeder::class,
            OrdersTableSeeder::class,
            OrderContributionTableSeeder::class,
        ]);
    }
}
