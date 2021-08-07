<?php

namespace Database\Factories;

use App\Models\RaceHorseStatistic;
use Illuminate\Database\Eloquent\Factories\Factory;

class RaceHorseStatisticFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RaceHorseStatistic::class;

    public function definition(): array
    {
        return [
            'race_id' => 1,
            'horse_id' => 1,
            'weight' => $this->faker->numberBetween(int1: 100, int2: 200),
            'weight_unit_id' => 1,
            'cloth_id' => $this->faker->numberBetween(int1: 1, int2: 10),
        ];
    }
}
