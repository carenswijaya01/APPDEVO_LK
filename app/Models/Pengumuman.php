<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'pengumumen';
    protected $primarykey = 'id';
    protected $fillable = [
        'gambar', 'judul', 'penyelenggara', 'deskripsi', 'diterbitkan',
    ];
}
