<?php

namespace Database\Factories;

use App\Models\TaskList;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskListFactory extends Factory
{
    protected $model = TaskList::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'user_id' => User::factory(),
        ];
    }
}
