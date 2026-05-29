<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $studios = Studio::latest();
        $keyword = request('keyword');
        if ($keyword) {
           $studios->where('type', 'like', '%'. $keyword . '%'); 
        }

         return view('studio.index', [
            'title' => 'Studio',
            'studios' =>  $studios->paginate(5)->withQueryString(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('studio.create', ['title' => 'Create Studio']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
        'name' => 'required|max:255',
        'type' => 'required|max:255',
        'capacity' => 'required|integer',
    ], [
        'name.required' =>'Name tidak boleh kosong',
        'name.max' =>'Name tidak boleh lebih dari :max karakter',
        'type.required' =>'Type tidak boleh kosong',
        'type.max' =>'Type tidak boleh lebih dari :max karakter',
        'capacity.required' =>'Type tidak boleh kosong',
    ]);

    Studio::create($validated);
    return to_route('studio.index')->withSuccess('Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Studio $studio)
    {
        return view('studio.show', [
            'title' => 'Detail Studio'. $studio->name,
            'studio' =>   $studio,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Studio $studio)
    {
         return view('studio.edit', [
            'title' => ' Edit Studio',
            'studio' => $studio,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Studio $studio)
    {
          $validated = $request->validate([
        'name' => 'required|max:255',
        'type' => 'required|max:255',
        'capacity' => 'required|integer',
    ], [
        'name.required' =>'Name tidak boleh kosong',
        'name.max' =>'Name tidak boleh lebih dari :max karakter',
        'type.required' =>'Type tidak boleh kosong',
        'type.max' =>'Type tidak boleh lebih dari :max karakter',
        'capacity.required' =>'Type tidak boleh kosong',
    ]);
    $studio->update($validated);
    return to_route('studio.index')->withSuccess('Data berhasil diubah');
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy(Studio $studio)
    {
        $studio->delete($studio);
        return to_route('studio.index')->withSuccess('Data berhasil di hapus');
    }
}
