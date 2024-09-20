<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'ibrahim',
            'email' => 'ibrahim97416@gmail.com',
            'password' => 'ibr@himTHA123',
        ]);
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@wheels2deals.com',
            'password' => '@Wheels2deals',
            'role' => 'admin',
            'verified' => true,
            'user_can_add_products' => true,
        ]);
    }
}
