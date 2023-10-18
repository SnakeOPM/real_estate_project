<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Models\Agency;

use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Agency $agency)
    {
        return view('agency.show', compact('agency'));
    }
}
