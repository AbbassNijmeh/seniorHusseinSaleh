<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\reviews>
 */
class reviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $i=1;
        $j=1;
        return [
            'user_id'=>$i++,
            'product_id'=>$j++,
            'rating'=>fake()->numberBetween(1,5),
            'review'=>fake()->sentence()
        ];
    }
}
