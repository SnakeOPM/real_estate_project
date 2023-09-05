<?php

namespace App\Http\Controllers\Party;

use App\Http\Controllers\Controller;
use App\Services\Party\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
