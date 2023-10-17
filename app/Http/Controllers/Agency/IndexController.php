<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $data = Agency::paginate(15);
        return view('agency.index', compact('data'));
    }
}
