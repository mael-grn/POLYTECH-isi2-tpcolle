<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seed a few example users
        User::factory()->create([
            'name' => 'Test User',
            'surname' => 'Tester',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Alice',
            'surname' => 'Dupont',
            'email' => 'alice@example.com',
        ]);

        User::factory()->create([
            'name' => 'Bob',
            'surname' => 'Martin',
            'email' => 'bob@example.com',
        ]);

        // additional random users
        User::factory(3)->create();
    }
}

