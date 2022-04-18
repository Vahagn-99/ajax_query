<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'category_id' => rand(1, Category::get()->count()),
            'price' => rand(200, 700),
            'description' => 'Some quick example text to build on the card title and make up the bulk of
                        the card',
            'category_id' => rand(1, Category::get()->count()),
        ];
    }
}
