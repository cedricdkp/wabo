<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircuitEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'location',
        'price',
        'rating',
        'type',
        'date',
    ];

    protected $dates = ['date'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}