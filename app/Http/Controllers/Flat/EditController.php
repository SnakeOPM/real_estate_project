<?php

namespace App\Http\Controllers\Flat;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use App\Models\Party;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends BaseController
{
        public function __invoke(Flat $flat)
    {
        return view('flat.edit', compact('flat'));
    }
}
