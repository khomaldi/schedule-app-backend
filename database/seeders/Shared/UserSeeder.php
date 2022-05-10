<?php

namespace Database\Seeders\Shared;

use Domain\Shared\Models\User;
use Database\Seeders\DatabaseSeeder;

class UserSeeder extends DatabaseSeeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Р',
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
    }
}
