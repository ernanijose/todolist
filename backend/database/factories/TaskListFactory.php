<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\TaskList;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class TaskListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TaskList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'title' => $this->faker->name,
            'status' => 0,
          ];
    }
}
