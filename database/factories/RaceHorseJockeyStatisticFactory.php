<?php

namespace Database\Factories;

use App\Models\RaceHorseJockeyStatistic;
use Illuminate\Database\Eloquent\Factories\Factory;

class RaceHorseJockeyStatisticFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RaceHorseJockeyStatistic::class;

    public function definition(): array
    {
        return [
            'race_id' => 1,
            'horse_id' => 1,
            'jockey_id' => 1,
            'allowance_weight' => $this->faker->numberBetween(int1: 1, int2: 7),
            'weight_unit_id' => 1,
        ];
    }
}
