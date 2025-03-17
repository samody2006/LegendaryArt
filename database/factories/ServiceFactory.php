<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'title'      => $title,
            'slug'       => Str::slug($title),
            'description'=> $this->faker->paragraph(4),
            'price'      => $this->faker->numberBetween(30, 200),
            'thumbnail'  => $this->faker->imageUrl(640, 480, 'business', true),
        ];
    }
}
