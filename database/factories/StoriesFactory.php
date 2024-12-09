<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Orma;
use App\Models\Stories;

class StoriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stories::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ormas_id' => Orma::factory(),
            'cerita' => $this->faker->text(),
        ];
    }
}
