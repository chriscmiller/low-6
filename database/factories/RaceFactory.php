<?php

namespace Database\Factories;

use App\Models\Race;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class RaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Race::class;

    #[ArrayShape(
        [
            'race_meeting_id' => "int",
            'time' => "\DateTime",
            'is_handicap' => "bool",
            'is_trifeca' => "false",
            'is_showcase' => "false"
        ]
    )]
    public function definition(): array
    {
        return [
            'race_meeting_id' => 1,
            'time' => $this->faker->dateTime,
            'is_handicap' => true,
            'is_trifeca' => false,
            'is_showcase' => false,

        ];
    }
}
