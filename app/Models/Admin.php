<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'admins';
    protected $primarykey = 'id';
    protected $fillable = [
         'nim', 'name', 'email', 'role', 'password',
    ];
}
