<?php

namespace Database\Factories;

use App\Models\RaceMeeting;
use Illuminate\Database\Eloquent\Factories\Factory;

class RaceMeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RaceMeeting::class;

    public function definition(): array
    {
        return [
            'racecourse_id' => 1,
            'meeting_date' => $this->faker->dateTime,
        ];
    }
}
