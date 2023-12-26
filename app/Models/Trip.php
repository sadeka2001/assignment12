<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

}
