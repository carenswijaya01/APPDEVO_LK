<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengumuman>
 */
class PengumumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'gambar'=> fake()->image(storage_path('pengumuman')),
            'judul'=> fake()->text(100),
            'penyelenggara'=> fake()->name(),
            'deskripsi'=> fake()->paragraphs(6),
        ];
    }
}
