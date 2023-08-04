<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserAvatar
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserAvatar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAvatar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAvatar query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAvatar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAvatar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAvatar whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAvatar whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UserAvatar extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function user()
    {
       return $this->belongsTo(User::class, 'avatar_id', 'id');
    }
}
