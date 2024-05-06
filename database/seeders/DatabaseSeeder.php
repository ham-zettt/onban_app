<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Pekerja;
use App\Models\Pengguna;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Admin::factory(10)->create();
        Pekerja::factory(10)->create();
        Pengguna::factory(10)->create();
    }
}
