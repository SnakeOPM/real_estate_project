<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    public function flats()
    {
        return $this->belongsToMany(Flat::class, 'flat_parties', 'party_id', 'flat_id');
    }
}
