<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Party;
use App\Models\User;
use App\Models\User_type;
use Illuminate\Http\Request;

class test extends Controller
{
    public function __invoke()
    {
        $data = Party::find(3);
        dd($data->flats);
    }
}
