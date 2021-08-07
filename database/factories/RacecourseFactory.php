<?php

namespace Database\Factories;

use App\Models\Racecourse;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class RacecourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Racecourse::class;

    #[ArrayShape(
        [
            'country_id' => "int",
            'name' => "string",
        ]
    )]
    public function definition(): array
    {
        return [
            'country_id' => 1,
            'name' => $this->faker->word,
        ];
    }
}
