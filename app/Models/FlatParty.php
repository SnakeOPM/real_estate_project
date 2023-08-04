<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FlatParty
 *
 * @property int $id
 * @property int $party_id
 * @property int $flat_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FlatParty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlatParty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlatParty query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlatParty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlatParty whereFlatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlatParty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlatParty wherePartyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlatParty whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FlatParty extends Model
{
    use HasFactory;
}
