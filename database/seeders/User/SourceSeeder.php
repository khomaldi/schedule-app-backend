<?php

namespace Database\Seeders\User;

use Domain\User\Models\Source;
use Database\Seeders\DatabaseSeeder;

class SourceSeeder extends DatabaseSeeder
{
    public function run(): void
    {
        Source::factory()->create([
            'name' => 'Сайт',
            'slug' => 'website',
        ]);

        Source::factory()->create([
            'name' => 'Getcourse',
            'slug' => 'getcourse',
        ]);

        Source::factory()->create([
            'name' => 'Telegram',
            'slug' => 'telegram',
        ]);
    }
}
