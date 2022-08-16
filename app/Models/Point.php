<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Point extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the admin that owns the Point
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    /**
     * Get the user that owns the Point
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the type_point that owns the Point
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type_point(): BelongsTo
    {
        return $this->belongsTo(TypePoint::class);
    }
}
