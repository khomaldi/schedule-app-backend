<?php

namespace Database\Seeders\User;

use Database\Seeders\DatabaseSeeder;
use Domain\User\Models\UserDataField;

class UserDataFieldSeeder extends DatabaseSeeder
{
    public function run(): void
    {
        UserDataField::factory()->create([
            'name' => 'Имя',
            'slug' => 'first_name',
            'type' => 'string',
        ]);

        UserDataField::factory()->create([
            'name' => 'Фамилия',
            'slug' => 'last_name',
            'type' => 'string',
        ]);

        UserDataField::factory()->create([
            'name' => 'Отчество',
            'slug' => 'middle_name',
            'type' => 'string',
        ]);

        UserDataField::factory()->create([
            'name' => 'Описание',
            'slug' => 'description',
            'type' => 'string',
        ]);

        UserDataField::factory()->create([
            'name' => 'Почта',
            'slug' => 'email',
            'type' => 'string',
        ]);

        UserDataField::factory()->create([
            'name' => 'Почта',
            'slug' => 'email',
            'type' => 'string',
        ]);

        UserDataField::factory()->create([
            'name' => 'Дата подтверждения почты',
            'slug' => 'email_verified_at',
            'type' => 'timestamp',
        ]);

        UserDataField::factory()->create([
            'name' => 'Телефон',
            'slug' => 'phone_number',
            'type' => 'string',
        ]);

        UserDataField::factory()->create([
            'name' => 'Getcourse ID',
            'slug' => 'getcourse_id',
            'type' => 'string',
        ]);

        UserDataField::factory()->create([
            'name' => 'Telegram ID',
            'slug' => 'telegram_id',
            'type' => 'string',
        ]);

        UserDataField::factory()->create([
            'name' => 'Telegram Username',
            'slug' => 'telegram_username',
            'type' => 'string',
        ]);
    }
}
