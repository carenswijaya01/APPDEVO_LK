<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'      => 'sadmin',
            'email'     => 'sadmin@uksw.edu',
            'nim'       => '11111111',
            'role_id'      => Role::getId(Role::SUPERADMIN),
            'password'  => bcrypt('sadmin'),
        ]);

        // Admin::create([
        //     'name'      => 'admin',
        //     'email'     => 'admin@uksw.edu',
        //     'nim'       => '672021888',
        //     'role_id'      => Role::getId(Role::ADMIN),
        //     'password'  => bcrypt('admin'),
        // ]);
    }
}
