<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['provider_id', 'name', 'price', 'description', 'image', 'date'];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }
}