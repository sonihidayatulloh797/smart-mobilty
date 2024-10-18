<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrafficFlowVisualization>
 */
class TrafficFlowVisualizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'timeframe' => $this->faker->numberBetween(1, 24),  // Contoh rentang jam
            'car' => $this->faker->numberBetween(1, 100),
            'bus' => $this->faker->numberBetween(1, 20),
            'motocycle' => $this->faker->numberBetween(1, 200),
            'truck' => $this->faker->numberBetween(1, 50),
            'train' => $this->faker->numberBetween(0, 5),
            'bycycle' => $this->faker->numberBetween(1, 30),
        ];
    }
}
