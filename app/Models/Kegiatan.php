<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = "kegiatan";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nama_kegiatan', 'jenis_kegiatan', 'deskripsi_kegiatan', 'nama_ketua_panitia', 'tgl_kegiatan'
    ];
}
