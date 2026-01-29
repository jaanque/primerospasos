<?php


namespace Database\Factories;

use App\Models\TaskModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskModelFactory extends Factory
{
    // model associat
    protected $model = TaskModel::class;

    // array de dades
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true), 
            
            'description' => fake()->sentences(3, true), 
            
            'completed' => fake()->boolean(), 
            
            'user_id' => User::all()->random()->id ?? User::factory(),
        ];
    }
}