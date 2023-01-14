<?php

namespace Database\Factories;

use App\Models\BibleBook;
use Illuminate\Database\Eloquent\Factories\Factory;

class BibleBookFactory extends Factory
{
    protected $model = BibleBook::class;

    public function definition(): array
    {
        return [
            'book' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'total_chapters' => $this->faker->numberBetween(32),
        ];
    }
}
