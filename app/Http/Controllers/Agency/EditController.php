<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Models\Agency;

use App\Models\User;
use Illuminate\Http\Request;

class EditController extends BaseController
{
        public function __invoke(Agency $agency)
    {
        return view('agency.edit', compact('agency'));
    }
}
