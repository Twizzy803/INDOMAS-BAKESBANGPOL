<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Login;

class LoginFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Login::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'email' => $this->faker->safeEmail(),
            'password' => $this->faker->password(),
            'role' => $this->faker->randomElement(["admin","ormas"]),
            'remember_token' => $this->faker->uuid(),
        ];
    }
}
