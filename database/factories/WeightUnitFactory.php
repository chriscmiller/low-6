<?php

namespace Database\Factories;

use App\Models\WeightUnit;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightUnitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WeightUnit::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}
