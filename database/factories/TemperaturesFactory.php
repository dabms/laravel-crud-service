<?php

namespace Database\Factories;

use App\Models\Temperatures;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Temperatures>
 */
class TemperaturesFactory extends Factory
{
    protected $model = Temperatures::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location' => $this->faker->city(),
            'temperature' => $this->faker->randomFloat(1,-60, 60),
            'recorded_at' => $this->faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now'),
        ];
    }
}



