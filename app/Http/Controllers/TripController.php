<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::all();
        return view('backend.trip.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        $buses = Bus::all();
        return view('backend.trip.create', compact('locations', 'buses'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'departure_date' => 'required',
            'location_id' => 'required',
            'bus_id' => 'required|exists:buses,id',
        ]);

        Trip::create([
            'from_location' => $request->from_location,
            'to_location' => $request->to_location,
            'location_id' => $request->location_id,
            'bus_id' => $request->bus_id,
            'departure_date' => $request->departure_date,
        ]);
        return redirect()->route('trip.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trip = Trip::find($id);
        return view('backend.trip.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'departure_date' => 'required|date',
            'bus_id' => 'required|exists:buses,id',
            'from_location' => 'required|exists:locations,id',
            'to_location' => 'required|exists:locations,id',
        ]);

        $trip = Trip::where('id', $id)->update([
            'departure_date' => $request->departure_date,
            'bus_id' => $request->bus_id,
            'from_location' => $request->from_location,
            'to_location' => $request->to_location,
        ]);

        if ($trip) {
            return redirect()->route('trip.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Trip::destroy($id);
        return redirect()->route('trip.index');
    }
}
