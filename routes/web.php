<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MoviesController::class, 'index']);

Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [MoviesController::class, 'create'])->name('movies.create');
Route::post('/movies/store', [MoviesController::class, 'store'])->name('movies.store');
Route::get('/movies/{movies}/edit', [MoviesController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{movies}', [MoviesController::class, 'update'])->name('movies.update');




