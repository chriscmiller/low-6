<?php

namespace Database\Factories;

use App\Models\Jockey;
use Illuminate\Database\Eloquent\Factories\Factory;

class JockeyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jockey::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
