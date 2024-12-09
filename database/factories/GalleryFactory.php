<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Gallery;
use App\Models\Story;

class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'stories_id' => Story::factory(),
            'path' => $this->faker->text(),
        ];
    }
}
