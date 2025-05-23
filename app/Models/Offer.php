<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['provider_id', 'name', 'price', 'description', 'image', 'valid_until'];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }
}