<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProposalKegiatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kegiatan(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
