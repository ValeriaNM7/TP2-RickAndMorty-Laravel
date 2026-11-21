<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Episode extends Model
{
    protected $table = 'episodes';

    public $timestamps = false;

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(
            Character::class,
            'character_episode',
            'episode_id',
            'character_id'
        );
    }
}
