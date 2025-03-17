<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AlbumFactory extends Factory
{
    protected $model = Album::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $name = $this->faker->word;

        return [
            "name"   => $name,
            "slug"   => Str::slug($name),
            "banner" => $this->faker->imageUrl(640, 480, 'nature', true),
        ];
    }
}
