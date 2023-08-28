<?php

namespace App\Http\Controllers\Flat;

use App\Http\Requests\Flat\CreateRequest;

class StoreController extends BaseController
{
    public function __invoke(CreateRequest $request)
    {
        $data = $request->validated();
        $file = $request->file('image');
        $this->service->store($data, $file);

        return dd('переделай дебил блин');
    }
}
