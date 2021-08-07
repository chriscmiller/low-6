<?php

namespace Database\Factories;

use App\Models\RaceMeeting;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class RaceMeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RaceMeeting::class;

    #[ArrayShape(
        [
            'racecourse_id' => "int",
            'meeting_date' => "\DateTime",
        ]
    )]
    public function definition(): array
    {
        return [
            'racecourse_id' => 1,
            'meeting_date' => $this->faker->dateTime,
        ];
    }
}
