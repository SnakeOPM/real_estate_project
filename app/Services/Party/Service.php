<?php

namespace App\Services\Party;

use App\Models\Party;
use App\Models\User;

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
}
