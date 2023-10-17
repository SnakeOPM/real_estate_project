<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Http\Requests\Agency\CreateRequest;

use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(CreateRequest $request)
    {
        $data = $request->validated();
        $this->service->update_agency($data);
        return redirect()->route('agency.show');

    }
}
