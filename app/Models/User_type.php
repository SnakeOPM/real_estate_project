<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User_type
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|User_type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User_type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User_type query()
 * @method static \Illuminate\Database\Eloquent\Builder|User_type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User_type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User_type whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User_type whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User_type extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class, 'user_type_id', 'id');
    }
}
