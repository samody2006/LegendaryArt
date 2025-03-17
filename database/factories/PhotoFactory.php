<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;

        return [
            "title" => $title,
            "description" => $this->faker->paragraph(10),
            "image" => $this->faker->imageUrl(),
            "slug" => Str::slug($title),
            "user_id" => User::inRandomOrder()->first()->id,
            "album_id" => Album::inRandomOrder()->first()->id
        ];
    }
}
