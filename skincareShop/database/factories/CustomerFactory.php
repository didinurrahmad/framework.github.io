<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'noHp' => $this->faker->phoneNumber(),
            'face_id' => $this->faker->numberBetween(1, 2),
            // 1-3 karena prodi nya cuman 3
        ];

    }
}
