<?php

namespace Database\Seeders;

use App\Models\TypePoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypePointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typePoints = [
            'Wawasan Almameter (WA)' => 100,
            'Professional Skil (PS)' => 100,
            'Humanistik Skil (HS)' => 100,
            'Penunjang Umum (PU)' => 100
        ];

        foreach ($typePoints as $key => $value) {
            TypePoint::insert([
                'name' => $key,
                'limit' => $value,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
