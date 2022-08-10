<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'jurusan_id' => fake()->randomElement([1,2,3,4,5,6,7]),
            'kelas' => fake()->randomElement(['X','XI','X11']),
            'image' => 'siswa/anonime.jpeg',
            'gender' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
        ];
    }
}