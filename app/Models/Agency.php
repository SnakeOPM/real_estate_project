<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use HasFactory;
    use SoftDeletes;

    function user()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }
}
