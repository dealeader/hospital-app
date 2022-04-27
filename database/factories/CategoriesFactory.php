<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => $this->faker->random(NULL, int::random()),
            'doctor_id' => $this->faker->int::random(),
            'name' => $this->faker->Str::random(15),
        ];
    }
}
