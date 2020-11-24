<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        
        return [
            'user_id' => \App\Models\User::factory(),
            'list_id' => TaskList::factory(),
            'title' => $this->faker->name,
            'status' => 0,
        ];
        
        
    }
}
