<?php

namespace App\Models;

use App\Models\seat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function trip()
    {
        return $this->hasMany(Trip::class);
    }
}
