<?php

namespace App\Services\Party;

use App\Models\Party;

class Service
{
    public function get_index()
    {
        return Party::with('users')->paginate(10);
    }
}
