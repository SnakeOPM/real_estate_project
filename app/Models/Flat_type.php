<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Flat_type
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Flat_type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flat_type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flat_type query()
 * @method static \Illuminate\Database\Eloquent\Builder|Flat_type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat_type whereName($value)
 * @mixin \Eloquent
 */
class Flat_type extends Model
{
    use HasFactory;

    public function flats()
    {
        $this->hasMany(Flat::class, 'type_id', 'id');
    }
}
