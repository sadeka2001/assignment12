<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Location;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buses = Bus::all();
        return view('backend.bus.index', compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        return view('backend.bus.create', ['location_id' => $locations]);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'bus_name' => 'required|string|max:255',
            'location_id' => 'required',
            'total_seats' => 'required|integer|min:1',
            'bus_image' => 'nullable|image|max:2048',

        ]);

          Bus::create([
            'bus_name' => $request->bus_name,
            'location_id' => $request->location_id,
            'total_seats' => $request->total_seats,
            'bus_image' => $request->file('bus_image')->store('buses'),
        ]);
        return redirect()->route('bus.index');
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

        $bus = Bus::findOrFail($id);
        $locations = Location::all();
        return view('backend.bus.edit', compact('bus', 'locations'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
           $request->validate([
            'bus_name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'total_seats' => 'required|integer|min:1',
            'bus_image' => 'nullable|image|max:2048',
        ]);
        $bus = Bus::findOrFail($id);
        $bus->update([
            'bus_name' => $request->bus_name,
            'location_id' => $request->location_id,
            'total_seats' => $request->total_seats,
            $bus = Bus::find(1),
            $bus->status = 0,
            $bus->save(),
        ]);
        return redirect()->route('bus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bus = Bus::findOrFail($id);
        $bus->delete();
        return redirect()->route('bus.index');
    }
}
