<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePoint extends Model
{
    use HasFactory;
    protected $fillable = ['max_point'];
}
