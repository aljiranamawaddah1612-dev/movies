<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\Studio;
use Illuminate\Http\Request;

class SeatController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $seats = Seat::latest();
        $keyword = request('keyword');
        if ($keyword) {
            $seats->where('seat_number', 'like', '%'. $keyword . '%')
            ->orWhere('row', 'like', '%' . $keyword . '%')
            ->orWhere('type', 'like', '%' . $keyword . '%')
            ->orWhere('status', 'like', '%' . $keyword . '%')
            ->orWhere('price', 'like', '%' . $keyword . '%'); 
        }
            
        $studio_id = request('studio_id');
        if ($studio_id) {
           $seats->where('studio_id', $studio_id); 
        }

        return view('seat.index', [
            'title' => 'Seat',
            'studios' => Studio::latest()->get(),
            'seats' =>  $seats->paginate(5)->withQueryString(),
            ]);
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Seat $seat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seat $seat)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seat $seat)
    {
         //
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy(Seat $seat)
    {
       //
    }
}
