<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat_type extends Model
{
    use HasFactory;

    public function flats()
    {
        $this->hasMany(Flat::class, 'type_id', 'id');
    }
}
