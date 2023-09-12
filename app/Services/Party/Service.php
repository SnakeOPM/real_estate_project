<?php

namespace App\Services\Party;

use App\Models\Party;
use App\Models\User;
use Ramsey\Uuid\Uuid;

class Service
{
    public function get_index()
    {
        return Party::with('users')->paginate(10);
    }

    public function store($data)
    {
        Party::create($data);
    }

    public function edit($party_id)
    {
        return User::where('party_id', $party_id)->get();
    }

    public function update_party($data, $party)
    {
        $party->update($data);
    }

    public function destroy_party($id)
    {
        Party::destroy($id);
    }

    public function generateToken()
    {
        $link = Uuid::uuid4();
        return $link->toString();
    }

    public function validateToken($party_id)
    {
        $party = Party::find($party_id);
        if (!$party->invite_token)
        {
            $token = $this->generateToken();
            $party->invite_token = $token;
            $party->update();
            return true;
        }
        return true;
    }
}
