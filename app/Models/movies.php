<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['judul','genre','release_year', 'duration', 'rating'])]
class movies extends Model
{
    /** @use HasFactory<\Database\Factories\MoviesFactory> */
    use HasFactory;

    //protected $fillable = ['judul','genre','release_year', 'duration', 'rating'];

    //protected $guarded = ['id'];
}
