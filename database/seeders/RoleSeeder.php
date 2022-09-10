<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'role' => Role::SUPERADMIN,
                'sub_admin' => false
            ],
            [
                'role' => Role::MAHASISWA,
                'sub_admin' => false
            ],
            [
                'role' => Role::KEGIATAN,
                'sub_admin' => false
            ],
            // [
            //     'role' => Role::ADMIN,
            //     'sub_admin' => true
            // ],
            [
                'role' => Role::BIDANG,
                'sub_admin' => true
            ],
            [
                'role' => Role::SEKRETARIS_SMF,
                'sub_admin' => true
            ],
            [
                'role' => Role::SEKRETARIS_BPMF,
                'sub_admin' => true
            ],
            [
                'role' => Role::BENDAHARA_SMF,
                'sub_admin' => true
            ],
            [
                'role' => Role::KOMISI_A,
                'sub_admin' => true
            ],
            // [
            //     'role' => Role::KOMISI_B,
            //     'sub_admin' => true
            // ],
            [
                'role' => Role::KOMISI_C,
                'sub_admin' => true
            ],
            [
                'role' => Role::INPOS,
                'sub_admin' => true
            ],
        ];

        Role::insert($datas);
    }
}
