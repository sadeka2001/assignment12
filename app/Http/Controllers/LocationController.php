<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        return view('backend.location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        return view('backend.location.create',compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
  {
            $request->validate([
                'name' => 'required',
            ]);
    
            Location::create([
                'name' => $request->name,
                'price' => $request->price,
            ]);
    
            return redirect()->route('location.index');
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
        $location = Location::find($id);
        return view('backend.location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $location = Location::find($id);
        $location->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Location::destroy($id);
        return redirect()->route('location.index');
    }
}
