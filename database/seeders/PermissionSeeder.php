<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'UserCanCreate', 'description' => 'This permission is required to create any product']);
        Permission::create(['name' => 'UserCanEdit', 'description' => 'This permission is required to edit any product']);
        Permission::create(['name' => 'UserCanUpdate', 'description' => 'This permission is required to update any product']);
        Permission::create(['name' => 'UserCanDelete', 'description' => 'This permission is required to delete any product']);
    }
}
