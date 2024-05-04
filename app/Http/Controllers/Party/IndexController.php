<?php

namespace App\Http\Controllers\Party;

use App\Http\Controllers\Controller;
use App\Models\Party;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $parties = $this->service->get_index();
        return view('Party.index', compact('parties'));
    }
}
