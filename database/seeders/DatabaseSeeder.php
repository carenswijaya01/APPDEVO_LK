<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password'),
            'nim' => '672020180',
        ]);

        DB::table('users')->insert([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('password'),
            'nim' => '672020181',
        ]);


        DB::table('programs')->insert([
            'title' => 'LDKM',
        ]);

        DB::table('programs')->insert([
            'title' => 'OMB',
        ]);

        DB::table('programs')->insert([
            'title' => 'FTI Days',
        ]);
    }
}
