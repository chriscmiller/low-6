<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->country,
            'code' => $this->faker->countryCode,
            'abbreviation' => $this->faker->word,
        ];
    }
}
