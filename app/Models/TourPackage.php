<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourPackage extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'duration_days',
        'duration_hours',
        'location',
        'thumbnail',
        'slug',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tourPhotos(): HasMany
    {
        return $this->hasMany(TourPhoto::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
