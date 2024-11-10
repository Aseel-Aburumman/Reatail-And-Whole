<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'wholesaler']);
        Role::create(['name' => 'retailer']);
        Role::create(['name' => 'admin']);


        Permission::create(['name' => 'create order']);
        Permission::create(['name' => 'add to order']);
        Permission::create(['name' => 'view orders']);
        Permission::create(['name' => 'CRUD product']);


        $retailerRole = Role::findByName('retailer');
        $retailerRole->givePermissionTo(['create order', 'add to order', 'view orders']);

        $wholesalerRole = Role::findByName('wholesaler');
        $wholesalerRole->givePermissionTo(['view orders', 'CRUD product']);
    }
}
