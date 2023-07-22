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
        $image = Storage::disk('s3')->get('photo_2023-07-14_07-50-40.jpg');
        return response($image)->header('Content-Type', 'image/png');
    }
}
