<?php

namespace App\Http\Controllers\Party;

use App\Http\Controllers\Controller;
use App\Services\Party\Service;
use App\Services\User\Service as UserService;

class BaseController extends Controller
{
    public $service;

    public $userService;

    public function __construct(Service $service, UserService $userService)
    {
        $this->service = $service;
        $this->userService = $userService;
        
    }

}
