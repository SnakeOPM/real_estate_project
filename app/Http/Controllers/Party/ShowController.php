<?php

namespace App\Http\Controllers\Party;

use App\Http\Controllers\Controller;
use App\Models\Party;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Party $party)
    {
        return view('party.show', compact('party'));
    }
}
