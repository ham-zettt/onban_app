<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pekerja>
 */
class PekerjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName(),
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(),
            'alamat' => $this->faker->address(),
            'no_hp' => $this->faker->phoneNumber(),
            // 'foto_formal' => $this->faker->imageUrl(),
            // 'foto_ktp' => $this->faker->imageUrl(),
            'status_menerima_order' => $this->faker->randomElement([0, 1]),
            'status_verifikasi' => $this->faker->randomElement([0, 1]),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
        ];
    }
}
