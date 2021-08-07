<?php

namespace Database\Factories;

use App\Models\Jockey;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class JockeyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jockey::class;

    #[ArrayShape(
        [
            'name' => "string",
        ]
    )]
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
