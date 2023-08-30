<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Party;
use App\Models\User;
use App\Models\User_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class test extends Controller
{
    public function __invoke()
    {
        return view('test');
    }
}
