<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Http\Requests\Agency\CreateRequest;

use App\Models\Agency;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(CreateRequest $request, Agency $agency)
    {
        $data = $request->validated();
        $this->service->update_agency($data, $agency);
        return redirect()->route('agency.show');

    }
}
