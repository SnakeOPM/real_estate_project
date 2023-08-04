<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Flat
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $address
 * @property int $rooms_count
 * @property int $square
 * @property bool|null $pets
 * @property int $type_id
 * @property int|null $agency_id
 * @property int|null $owner_id
 * @property bool $is_occupied
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Flat_type $flat_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FlatImages> $images
 * @property-read int|null $images_count
 * @property-read \App\Models\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Party> $parties
 * @property-read int|null $parties_count
 * @method static \Illuminate\Database\Eloquent\Builder|Flat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flat onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Flat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereAgencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereIsOccupied($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat wherePets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereRoomsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereSquare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flat withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Flat withoutTrashed()
 * @mixin \Eloquent
 */
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
