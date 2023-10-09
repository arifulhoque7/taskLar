<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SearchHistory>
 */
class SearchHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $products = [];
        for ($i = 0; $i < 5; $i++) {
            $products[] = [
                'name' => $this->faker->name,
                'price' => $this->faker->randomFloat(2, 10, 100),
                'description' => $this->faker->sentence,
            ];
        }

        return [
            'keyword' => $this->faker->word,
            'user' => $this->faker->name,
            'search_time' => $this->faker->dateTime,
            'results' => json_encode($products),
        ];
    }

}
