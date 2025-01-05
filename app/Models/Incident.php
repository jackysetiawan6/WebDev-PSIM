<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    /** @use HasFactory<\Database\Factories\IncidentFactory> */
    use HasFactory;

    protected $primaryKey = 'id';

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function source()
    {
        return $this->belongsTo(Source::class, 'source_id', 'id');
    }

    public function event()
    {
        return $this->hasOne(Event::class, 'incident_id', 'id');
    }
}
