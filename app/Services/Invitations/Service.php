<?php

namespace App\Services\Invitations;

use App\Models\Party;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Service
{
    public function getPartyData($token)
    {
        return Party::where('invite_token', $token)->first();
    }
    public function addUserToParty($data)
    {
        DB::table('users')->where('id', $data['user_id'])->update(['party_id' => $data['party_id']]);
    }
}
