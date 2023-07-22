<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flat extends Model
{
    use HasFactory, SoftDeletes;

    public function flat_type()
    {
        return $this->belongsTo(Flat_type::class, 'type_id', 'id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function parties()
    {
        return $this->belongsToMany(Party::class, 'flat_parties', 'flat_id', 'party_id');
    }

    public function images()
    {
        return $this->hasMany(FlatImages::class, 'flat_id', 'id');
    }
}
