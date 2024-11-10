<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'phone' => "079265565",
            'location' => "amman",
        ]);

        User::create([
            'name' => 'wholesaler User',
            'email' => 'wholesaler@example.com',
            'password' => bcrypt('password'),
            'phone' => "079265565",
            'location' => "amman",
        ]);


        User::create([
            'name' => 'retailer User',
            'email' => 'retailer@example.com',
            'password' => bcrypt('password'),
            'phone' => "079265565",
            'location' => "amman",
        ]);

        User::create([
            'name' => 'reg User',
            'email' => 'User@example.com',
            'password' => bcrypt('password'),
            'phone' => "079265565",
            'location' => "amman",
        ]);
    }
}
