<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;

class UserFactory extends Factory
{
    //this translates to password
    private const ENCODED_PASSWORD = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    #[ArrayShape(
        [
            'name' => "string",
            'email' => "mixed",
            'email_verified_at' => "\Illuminate\Support\Carbon",
            'password' => "string",
            'remember_token' => "string",
        ]
    )]
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => self::ENCODED_PASSWORD,
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): Factory
    {
        return $this->state(
            function (array $attributes): array {
                return [
                    'email_verified_at' => null,
                ];
            }
        );
    }
}
