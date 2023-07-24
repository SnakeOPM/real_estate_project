<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlatImages extends Model
{
    use HasFactory;

    public function flat()
    {
        return $this->belongsTo(Flat::class, 'flat_id', 'id');
    }
}