<?php

namespace Database\Factories;

use App\Models\Action;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActionFactory extends Factory
{
    protected $model = Action::class;

    public function definition(): array
    {
        return [
            'action_date' => $this->faker->dateTime,
            'thing-id' => $this->faker->numberBetween(1, 10),
            'user_id' => 11,
            'action-type' => $this->faker->name,
        ];
    }
}
