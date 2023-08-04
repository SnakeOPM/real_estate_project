<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Agency
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string|null $description
 * @property int $admin_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Agency|null $flats
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Agency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agency onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Agency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Agency withoutTrashed()
 * @mixin \Eloquent
 */
class Agency extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }

    public function flats()
    {
        return $this->belongsTo(Agency::class, 'agency_id', 'id');
    }
}
