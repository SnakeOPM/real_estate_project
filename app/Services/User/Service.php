<?php

namespace App\Services\User;

use App\Models\User;
use App\Models\UserAvatar;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data, $file = null)
    {
        if ($file != null){
            Storage::disk('s3')->put('/avatars', $file);
            UserAvatar::firstOrCreate($file->getClientOriginalName());
            $data['avatar_id'] = UserAvatar::where('name', 'like', $file->getClientOriginalName())->first();
        }
        unset($data['avatar']);
        User::create($data);
    }

    public function update(User $user ,$data, $file = null)
    {
        if ($file != null){
            Storage::disk('s3')->put('/avatars', $file);
            UserAvatar::firstOrCreate($file->getClientOriginalName());
            $data['avatar_id'] = UserAvatar::where('name', 'like', $file->getClientOriginalName())->first();
        }
        unset($data['avatar']);
        $user->update($data);
    }
}
