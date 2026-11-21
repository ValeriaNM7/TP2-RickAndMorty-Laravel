<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Character extends Model
{
    protected $table = 'characters';

    public $timestamps = false;

    public function origin(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'origin_id');
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function episodes(): BelongsToMany
    {
        return $this->belongsToMany(
            Episode::class,
            'character_episode',
            'character_id',
            'episode_id'
        );
    }
}