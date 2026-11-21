<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $table = 'locations';

    public $timestamps = false;

    public function charactersFromHere(): HasMany
    {
        return $this->hasMany(Character::class, 'origin_id');
    }

    public function residents(): HasMany
    {
        return $this->hasMany(Character::class, 'location_id');
    }
}
