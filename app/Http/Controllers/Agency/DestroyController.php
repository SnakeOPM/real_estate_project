<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Agency $agency)
    {
        $this->service->destroy_agency($agency->id);
        return redirect()->route('agency.index');
    }
}
