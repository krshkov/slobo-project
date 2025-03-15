<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'preferred_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'location' => $this->faker->address,
            'status' => $this->faker->randomElement(['pending', 'assigned', 'completed', 'cancelled']),
            'is_urgent' => $this->faker->boolean(30),
            'category_id' => Category::query()->inRandomOrder()->first()->id,
            'subcategory_id' => Category::query()->inRandomOrder()->first()?->subcategories()->inRandomOrder()->first()->id,
            'client_id' => Category::query()->inRandomOrder()->first()->id,
        ];
    }
}
