<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['judul','genre','release_year', 'duration', 'rating', 'synopsis'])]
class movies extends Model
{
    /** @use HasFactory<\Database\Factories\MoviesFactory> */
    use HasFactory, SoftDeletes;

    //protected $fillable = ['judul','genre','release_year', 'duration', 'rating'];

    //protected $guarded = ['id'];
}
