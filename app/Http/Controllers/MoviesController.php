<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('movies.index', [
            'title' => 'Movies',
            'movies' => Movies::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('movies.create', ['title' => 'Create Movies']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'judul' => 'required|max:255',
        'genre' => 'required|max:255',
        'release_year' => 'required|integer|digits:4',
        'duration' => 'required|min:1',
        'rating' => 'required|numeric|min:0|max:10',
    ], [
        'judul.required' =>'Judul tidak boleh kosong',
        'judul.max' =>'Judul tidak boleh lebih dari :max karakter',

        'genre.required' =>'Genre tidak boleh kosong',
        'genre.max' =>'Genre tidak boleh lebih dari :max karakter',

        'release_year.required' =>'Tahun rilis tidak boleh kosong',
        'release_year.integer' =>'Tahun rilis harus berupa angka',
        'release_year.digits' =>'Tahun rilis harus 4 digit',

        'duration.required' =>'Durasi tidak boleh kosong',
        'duration.min' => 'Durasi minimal 1 menit',

        'rating.required' =>'Rating tidak boleh kosong',
        'rating.numeric' =>'Rating harus berupa angka',
        'rating.min' =>'Rating minimal 0',
        'rating.max' =>'Rating maksimal 10',
    ]);

     movies::create($validated);
    return to_route('movies.index')->withSuccess('Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(movies $movies)
    {
       return view('movies.edit', [
            'title' => 'Edit Movies',
            'movies' => $movies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, movies $movies)
    {
         $validated = $request->validate([
        'judul' => 'required|max:255',
        'genre' => 'required|max:255',
        'release_year' => 'required|integer|digits:4',
        'duration' => 'required|min:1',
        'rating' => 'required|numeric|min:0|max:10',
    ], [
        'judul.required' =>'Judul tidak boleh kosong',
        'judul.max' =>'Judul tidak boleh lebih dari :max karakter',

        'genre.required' =>'Genre tidak boleh kosong',
        'genre.max' =>'Genre tidak boleh lebih dari :max karakter',

        'release_year.required' =>'Tahun rilis tidak boleh kosong',
        'release_year.integer' =>'Tahun rilis harus berupa angka',
        'release_year.digits' =>'Tahun rilis harus 4 digit',

        'duration.required' =>'Durasi tidak boleh kosong',
        'duration.min' => 'Durasi minimal 1 menit',

        'rating.required' =>'Rating tidak boleh kosong',
        'rating.numeric' =>'Rating harus berupa angka',
        'rating.min' =>'Rating minimal 0',
        'rating.max' =>'Rating maksimal 10',
    ]);

    $movies->update($validated);
    return to_route('movies.index')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movies $movies)
    {
        //
    }
}
