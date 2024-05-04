<?php

namespace App\Services\User;

use App\Models\User;
use App\Models\UserAvatar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class Service
{
    public function attachCurrentUserToParty($id, $party_id): void
    {
        DB::table('users')->where('id', $id)->update(['party_id' => $party_id]);
    }
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
