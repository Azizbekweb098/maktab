<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $zavuchRole = Role::create(['name' => 'zavuch']);

        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'view grades']);

        $adminRole->givePermissionTo(Permission::all());
        //
        $zavuchRole->givePermissionTo(['create posts', 'view grades']);
    }
}
