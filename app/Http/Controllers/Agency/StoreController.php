<?php

namespace App\Http\Controllers\Agency;

use App\Http\Requests\Agency\CreateRequest;

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
