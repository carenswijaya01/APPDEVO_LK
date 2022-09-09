<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const SUPERADMIN = 'Superadmin';
    const ADMIN = 'Admin';
    const KEGIATAN = 'kegiatan';
    const MAHASISWA = 'Mahasiswa';
    const SEKRETARIS_SMF = 'Sekretaris SMF';
    const SEKRETARIS_BPMF = 'Sekretaris BPMF';
    const BENDAHARA_SMF = 'Bendahara SMF';
    const BIDANG = 'Bidang';
    const KOMISI_A = 'Komisi A';
    const KOMISI_B = 'Komisi B';
    const KOMISI_C = 'Komisi C';
    const INPOS = 'Inpos';

    public static function getId($role)
    {
        return self::where('role',$role)->firstOrFail('id')->id;
    }
}
