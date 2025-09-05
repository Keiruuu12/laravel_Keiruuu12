<?php

namespace Database\Factories;

use App\Models\Rumahsakit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'telepon' => $this->faker->phoneNumber(),
            'rumahsakit_id' => $this->faker->numberBetween(1, Rumahsakit::count()),
        ];
    }
}
