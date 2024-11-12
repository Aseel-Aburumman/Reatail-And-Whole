<?php

namespace Database\Seeders;

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
        // Check and create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $retailerRole = Role::firstOrCreate(['name' => 'retailer']);
        $wholesalerRole = Role::firstOrCreate(['name' => 'wholesaler']);

        // Check and create permissions for orders
        Permission::firstOrCreate(['name' => 'create order']);
        Permission::firstOrCreate(['name' => 'add to order']);
        Permission::firstOrCreate(['name' => 'view orders']);
        Permission::firstOrCreate(['name' => 'CRUD product']);

        // Assign order permissions to roles
        $retailerRole->givePermissionTo(['create order', 'add to order', 'view orders']);
        $wholesalerRole->givePermissionTo(['view orders', 'CRUD product']);

        // Check and create permissions for user management
        Permission::firstOrCreate(['name' => 'create user']);
        Permission::firstOrCreate(['name' => 'edit user']);
        Permission::firstOrCreate(['name' => 'delete user']);
        Permission::firstOrCreate(['name' => 'view users']);

        // Assign user management permissions to roles
        $adminRole->givePermissionTo(['create user', 'edit user', 'delete user', 'view users']);
        $retailerRole->givePermissionTo(['view users']);
        $wholesalerRole->givePermissionTo(['view users']);
    }
}
