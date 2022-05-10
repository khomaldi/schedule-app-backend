<?php

namespace Database\Factories\User;

use Domain\User\Models\UserDataField;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDataFieldFactory extends Factory
{
    protected $model = UserDataField::class;

    public function definition(): array
    {
        return [
            'name' => 'Имя',
            'slug' => 'first_name',
            'type' => 'string',
        ];
    }
}
