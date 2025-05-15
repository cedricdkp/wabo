<?php

  namespace App\Models;

  use Illuminate\Database\Eloquent\Model;

  class CancellationPolicy extends Model
  {
      protected $fillable = ['days_before', 'refund_percentage'];
  }