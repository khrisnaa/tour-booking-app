<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'id',
        'tour_package_id',
        'bank_id',
        'start_date',
        'end_date',
        'quantity',
        'subtotal',
        'insurance',
        'tax',
        'total',
        'first_name',
        'last_name',
        'email',
        'phone',
        'status',
        'proof',
    ];
    public function tourPackage(): BelongsTo
    {
        return $this->belongsTo(TourPackage::class);
    }

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }

}
