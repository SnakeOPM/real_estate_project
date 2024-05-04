<?php

namespace App\Http\Controllers\Flat;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use App\Models\Party;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $data = Flat::paginate(25);
        return view('Flat.index', compact('data'));
    }
}
