<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Location;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('backend.ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $users = User::all();
        $buses = Bus::all();
        $locations = Location::all();

        return view('backend.ticket.create',compact('users','buses','locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'user_id' => 'required',
        'bus_id' => 'required',
        'location_id' => 'required',
        'ticket_price' => 'required|numeric',
        'status' => 'required|string',
        'seat_number' => 'required|integer',
        'total_amount' => 'required|numeric',

    ]);
    Ticket::create([
        'user_id' => $request->user_id,
        'bus_id' => $request->bus_id,
        'location_id' => $request->location_id,
        'ticket_price' => $request->ticket_price,
        'status' => $request->status == 'active' ? 1 : 0,
        'seat_number' => $request->seat_number,
        'total_amount' => $request->total_amount,

    ]);

    return redirect()->route('ticket.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('backend.ticket.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('backend.ticket.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::findOrFail($id);
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'bus_id' => 'required|exists:buses,id',
            'location_id' => 'required|exists:locations,id',
            'ticket_price' => 'required|numeric',
            'status' => 'required|string',
            'seat_number' => 'required|integer',
            'total_amount' => 'required|numeric',

        ]);

       
        $ticket->update($request->all());

        return redirect()->route('ticket.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::findOrFail($id);
            $ticket->delete();
    
            return redirect()->route('ticket.index');
        
    }
}
