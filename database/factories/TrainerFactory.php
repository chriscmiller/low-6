<?php

namespace Database\Factories;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class TrainerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trainer::class;

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
