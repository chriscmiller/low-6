<?php

namespace Database\Factories;

use App\Models\Horse;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class HorseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Horse::class;

    #[ArrayShape(
        [
            'name' => "string",
            'bred_country_id' => "int",
        ]
    )]
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'bred_country_id' => 1,
        ];
    }
}
