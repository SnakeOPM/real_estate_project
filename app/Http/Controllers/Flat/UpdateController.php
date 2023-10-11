<?php

namespace App\Http\Controllers\Flat;

use App\Http\Controllers\Controller;
use App\Http\Requests\Flat\CreateRequest;
use App\Models\Party;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(CreateRequest $request)
    {
        $data = $request->validated();
        $this->service->update_flat($data);
        return redirect()->route('flat.show');

    }
}
