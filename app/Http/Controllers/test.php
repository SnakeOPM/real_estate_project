<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\User;
use App\Models\User_type;
use Illuminate\Http\Request;

class test extends Controller
{
    public function __invoke()
    {
        $data = User_type::find(1);
        dd($data->users);
    }
}
