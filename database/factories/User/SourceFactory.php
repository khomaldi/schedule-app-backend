<?php

namespace Database\Factories\User;

use Domain\User\Models\Source;
use Illuminate\Database\Eloquent\Factories\Factory;

class SourceFactory extends Factory
{
    protected $model = Source::class;

    public function definition(): array
    {
        return [
            'name' => 'Сайт',
            'slug' => 'main_website',
        ];
    }
}
