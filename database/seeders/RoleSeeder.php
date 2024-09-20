<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'user', 'description' => 'Regular User']);
        Role::create(['name' => 'admin', 'description' => 'Adminstrator']);
        Role::create(['name' => 'moderator', 'description' => 'Moderator']);
    }
}
