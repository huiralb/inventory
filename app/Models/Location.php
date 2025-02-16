<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    use HasUlids;

    protected $fillable = ['ulid', 'parent_id', 'name'];

    public function uniqueIds()
    {
        return ['ulid'];
    }

    /**
     * Get the parent that owns the Location
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }

}
