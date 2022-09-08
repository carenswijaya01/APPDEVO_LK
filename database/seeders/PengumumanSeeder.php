<?php

namespace Database\Seeders;

use App\Models\Pengumuman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anouncements = [];
        for ($i = 0; $i < 50; $i++)
            $anouncements[] = [
                'gambar' => fake()->unique()->name(),
                'judul' => fake()->text(100),
                'penyelenggara' => fake()->name(),
                'deskripsi' => fake()->paragraphs(6,true),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];
        // Pengumuman::factory(50)->make()->toArray()

        foreach (array_chunk($anouncements, 10) as $anouncement)
            Pengumuman::insert($anouncement);
    }
}
