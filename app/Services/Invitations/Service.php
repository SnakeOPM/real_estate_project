<?php

namespace App\Services\Invitations;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class Service
{
    public function addUserToParty($data)
    {
        DB::table('users')->where('id', $data['user_id'])->update(['party_id' => $data['party_id']]);
    }
}
