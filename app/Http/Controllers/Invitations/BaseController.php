<?php

namespace App\Http\Controllers\Invitations;

use App\Http\Controllers\Controller;
use App\Services\Invitations\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
