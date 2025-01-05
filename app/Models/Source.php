<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    /** @use HasFactory<\Database\Factories\SourceFactory> */
    use HasFactory;

    protected $primaryKey = 'id';

    public function events()
    {
        return $this->hasMany(Event::class, 'source_id', 'id');
    }

    public function incidents()
    {
        return $this->hasMany(Incident::class, 'source_id', 'id');
    }
}
