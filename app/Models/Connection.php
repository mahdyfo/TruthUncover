<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Connection extends Model
{
    use HasFactory;

    public function claim(): BelongsTo
    {
        return $this->belongsTo(Reason::class, 'parent_id');
    }

    public function reason(): BelongsTo
    {
        return $this->belongsTo(Reason::class, 'child_id');
    }
}
