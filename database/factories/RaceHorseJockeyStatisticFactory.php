<?php

namespace Database\Factories;

use App\Models\RaceHorseJockeyStatistic;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class RaceHorseJockeyStatisticFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RaceHorseJockeyStatistic::class;

    #[ArrayShape(
        [
            'race_id' => "int",
            'horse_id' => "int",
            'jockey_id' => "int",
            'allowance_weight' => "int",
            'weight_unit_id' => "int"
        ]
    )]
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
