<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    /**
     * Allow mass assignment
     */
    protected $guarded = [];

    public function constructor()
    {
        return $this->belongsTo(Constructor::class);
    }

}
