<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'thumbnail' => $this->faker->imageUrl(400, 300),
            'name' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(10)
        ];
    }
}
