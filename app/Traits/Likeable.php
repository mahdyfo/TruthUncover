<?php

namespace App\Traits;

use App\Models\Like;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Likeable
{
    public function allLikes(): MorphMany
    {
        /** @var $this Model */
        return $this->morphMany(Like::class, 'likeable');
    }

    public function likes(): MorphMany
    {
        return $this->allLikes()->where('is_like', true);
    }

    public function dislikes(): MorphMany
    {
        return $this->allLikes()->where('is_like', false);
    }
}
