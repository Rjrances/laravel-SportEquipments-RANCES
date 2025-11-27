<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        
        // Create Admin/Staff Users
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@equipx.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        // Create additional staff member for testing
        User::factory()->create([
            'name' => 'Staff Member',
            'email' => 'staff@equipx.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
