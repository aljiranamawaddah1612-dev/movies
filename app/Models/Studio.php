<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'type', 'capacity'])]
class Studio extends Model
{
    use HasFactory;

    public function seats(): HasMany
    {
        return $this->hasMany(Seat::class);
    }
    
    protected $fillable = [ 'name', 'type', 'capacity', ];
}
