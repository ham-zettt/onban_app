<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengguna>
 */
class PenggunaFactory extends Factory
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
            'no_hp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),
            // 'foto_profil' => $this->faker->imageUrl(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
        ];
    }
}
