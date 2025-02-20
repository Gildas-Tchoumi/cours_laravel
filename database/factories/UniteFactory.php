<?php

namespace Database\Factories;

use App\Models\Unite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unite>
 */
class UniteFactory extends Factory
{
    protected $model = Unite::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(3),
            'abreviation' => $this->faker->word(1),
            'status' => 1,
            'description' => $this->faker->sentences(3, true),
        ];
    }
}
