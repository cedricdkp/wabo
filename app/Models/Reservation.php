<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'circuit_event_id',
        'status',
        'date',
        'participants',
    ];

    protected $dates = ['date'];

    public function circuitEvent()
    {
        return $this->belongsTo(CircuitEvent::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}