<?php

namespace App\Http\Controllers\Flat;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use App\Models\Party;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Flat $flat)
    {
        return view('flat.show', compact('flat'));
    }
}
