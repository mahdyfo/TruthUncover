<?php

namespace App\Models;

use App\Traits\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;
    use Likeable;

    /**
     * Which vote was this comment originally posted for
     * @return BelongsTo
     */
    public function vote(): BelongsTo
    {
        return $this->belongsTo(Vote::class);
    }

    /**
     * Which votes refer to this comment
     * @return BelongsToMany
     */
    public function votes(): BelongsToMany
    {
        return $this->belongsToMany(Vote::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }
}
