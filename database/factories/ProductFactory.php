<?php

// database/factories/ProductFactory.php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(),
            'image_mime' => $this->faker->mimeType,
            'image_size' => $this->faker->numberBetween(1000, 5000),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'created_by' => User::factory(),
            'updated_by' => User::factory(),
        ];
    }
}
