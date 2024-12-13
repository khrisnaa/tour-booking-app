<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'bank_name',
        'bank_account_name',
        'bank_account_number',
        'logo',
    ];
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
