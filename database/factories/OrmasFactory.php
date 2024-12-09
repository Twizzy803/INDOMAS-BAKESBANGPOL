<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\KategoriOrma;
use App\Models\Ormas;

class OrmasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ormas::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'pemohon' => $this->faker->word(),
            'telp' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'password' => $this->faker->password(),
            'nama_ormas' => $this->faker->word(),
            'alamat' => $this->faker->text(),
            'struktur_pengurus' => $this->faker->text(),
            'kategori_ormas_id' => KategoriOrma::factory(),
            'status' => $this->faker->randomElement(["setuju","tolak","pending"]),
        ];
    }
}
