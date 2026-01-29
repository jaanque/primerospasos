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
        // Utilitzo UserFactory i a cada user creo 1-5 tasks
        User::factory(10)->create()->each(function ($user) {
            \App\Models\TaskModel::factory(rand(1, 5))->create([
                'user_id' => $user->id, // Cada tasca un usuari
            ]);
        });
    }
}
