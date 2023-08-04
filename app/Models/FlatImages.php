<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FlatImages
 *
 * @property int $id
 * @property string $name
 * @property int $flat_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Flat|null $flat
 * @method static \Illuminate\Database\Eloquent\Builder|FlatImages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlatImages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlatImages query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlatImages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlatImages whereFlatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlatImages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlatImages whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlatImages whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FlatImages extends Model
{
    use HasFactory;

    public function flat()
    {
        return $this->belongsTo(Flat::class, 'flat_id', 'id');
    }
}
