<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('agency.create');
    }
}
