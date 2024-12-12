<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'description',
        'icon',
        'slug',
    ];

    public function tourPackages(): HasMany
    {
        return $this->hasMany(TourPackage::class);
    }
}
