<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'photo_product' => $this->faker->imageUrl(640, 480, 'technics'),
            'name' => $this->faker->words(3, true),
            'product_code' => $this->faker->numberBetween(100, 999),
            'price_sale' => $this->faker->randomFloat(2, 20, 500),
            'price_product' => $this->faker->randomFloat(2, 10, 400),
            'supplier' => $this->faker->company(),
            'description' => $this->faker->paragraph,
            'product_status' => $this->faker->randomElement(['analyze', 'approved', 'rejected']),
            'product_video_link' => $this->faker->url,
            'store_link' => $this->faker->url,
        ];
    }
}
