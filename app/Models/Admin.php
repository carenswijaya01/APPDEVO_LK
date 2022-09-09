<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps=false;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
         'nim', 'name', 'email', 'role_id', 'password',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
