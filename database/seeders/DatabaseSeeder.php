<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\User\SourceSeeder;
use Database\Seeders\User\UserDataFieldSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SourceSeeder::class,
            UserDataFieldSeeder::class,
        ]);
    }
}
