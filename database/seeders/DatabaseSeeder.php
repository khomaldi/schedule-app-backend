<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\User\UserDataFieldSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([UserDataFieldSeeder::class]);
    }
}
