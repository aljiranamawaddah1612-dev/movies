<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('movies', function () {
    return view('movies.index', ['title' => 'Movies']);
});

Route::get('movies/create', function () {
    return view('movies.create', ['title' => 'Create Movies']);
});
