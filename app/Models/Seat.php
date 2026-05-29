<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['studio_id','seat_number','row', 'type', 'status'])]
class Seat extends Model
{
    /** @use HasFactory<\Database\Factories\SeatFactory> */
    use HasFactory;

        public function studio(): BelongsTo
    {
        return $this->belongsTo(Studio::class);
    }
    protected $fillable = [ 'seat_number', 'row', 'type', 'status', 'price', 'studio_id', ];
}
