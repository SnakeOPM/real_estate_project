<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserImage
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserImage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserImage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserImage whereUserId($value)
 * @mixin \Eloquent
 */
class UserImage extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
