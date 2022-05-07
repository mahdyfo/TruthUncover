<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reason extends Model
{
    use HasFactory;

    public function reasons(): BelongsToMany
    {
        return $this->belongsToMany(Reason::class, 'connections', 'parent_id', 'child_id');
    }

    public function claims(): BelongsToMany
    {
        return $this->belongsToMany(Reason::class, 'connections', 'child_id', 'parent_id');
    }
}
