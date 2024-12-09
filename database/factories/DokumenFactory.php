<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Dokumen;
use App\Models\Orma;

class DokumenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dokumen::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ormas_id' => Orma::factory(),
            'nama' => $this->faker->word(),
            'path' => $this->faker->text(),
        ];
    }
}
