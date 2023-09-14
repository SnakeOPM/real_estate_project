<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Party
 *
 * @property int $id
 * @property string $name
 * @property string $invite_token
 * @property int $flat_prefer_id
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Flat> $flats
 * @property-read int|null $flats_count
 * @method static \Illuminate\Database\Eloquent\Builder|Party newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Party newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Party query()
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereFlatPreferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereInviteToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Party whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Party extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function flats()
    {
        return $this->belongsToMany(Flat::class, 'flat_parties', 'party_id', 'flat_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'id', 'id');
    }
}
