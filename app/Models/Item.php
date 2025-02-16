<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    use HasUlids;

    protected $fillable = [
        'name',
        'ulid',
        'description',
        'quantity',
        'price',
        'meta',
        'location_id',
        'category_id',
    ];

    public function uniqueIds()
    {
        return ['ulid'];
    }

    /**
     * The categories that belong to the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'item_category', 'item_id', 'category_id');
    }

    /**
     * Get the location that owns the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
