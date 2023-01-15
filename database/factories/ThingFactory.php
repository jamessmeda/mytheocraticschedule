<?php

namespace Database\Factories;

use App\Models\Thing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thing>
 */
class ThingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Thing::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
