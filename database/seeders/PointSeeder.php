<?php

namespace Database\Seeders;

use App\Models\Point;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $points = [];
        for ($i = 0; $i < 200; $i++) {
            $points[] = [
                'type_point_id' => fake()->numberBetween(1, 4),
                'user_id' => fake()->numberBetween(1, 50),
                'admin_id' => fake()->numberBetween(1, 50),
                'file' => 'point//rKqu0fNozGOB9sXHqQD60XS3QddpUZkp63oPDnNr.pdf', // TODO
                'point' => fake()->numberBetween(25, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach (array_chunk($points, 20) as $point) Point::insert($point);
    }
}
