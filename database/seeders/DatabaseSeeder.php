<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\MemberProgram;
use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::transaction(function () {
            $this->call([AdminSeeder::class]);
            $this->call(TypePointSeeder::class);

            // FAKE
            $this->call(ProgramSeeder::class);
            $this->call(PengumumanSeeder::class);
            $this->call(PointSeeder::class);

            $admins = [];
            for ($i = 0; $i < 50; $i++)
                $admins[] = [
                    'nim' => fake()->randomNumber(9),
                    'name' => fake()->name(),
                    'email' => fake()->safeEmail(),
                    'role' => 'admin',
                    'password' =>  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',  //password
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString(),
                ];
            foreach (array_chunk($admins, 10) as $admin)
                Admin::insert($admin);

            $members = [];
            for ($i = 0; $i < 50; $i++)
                $members[] = [
                    'program_id' => rand(1, 50),
                    'user_id' => rand(1, 50),
                    'file' => fake()->unique()->file(public_path('pdf-test'), storage_path('app/member')),
                    'reason' => fake()->text(),
                    'status' => fake()->randomElement(['mendaftar', 'ditolak', 'diterima']),
                ];

            foreach (array_chunk($members, 10) as $member)
                MemberProgram::insert($member);

            $users = [];
            for ($i = 0; $i < 50; $i++) {
                $nim = fake()->unique()->regexify('\d{9}');
                $users[] = [
                    'name' => fake()->name(),
                    'email' => $nim . '@student.uksw.edu',
                    'nim' => $nim,
                    'email_verified_at' => now(),
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'remember_token' => Str::random(10),
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString(),
                ];
            }
            foreach (array_chunk($users, 10) as $user)
                User::insert($user);

            // MemberProgram::factory(50)->create();
            // Pengumuman::factory(50)->create();
            // User::factory(50)->create();
        });
    }
}
