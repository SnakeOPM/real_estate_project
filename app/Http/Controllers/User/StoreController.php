<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\CreateRequest;

class StoreController extends BaseController
{
    public function __invoke(CreateRequest $request)
    {
        $data = $request->validated();
        $file = $request->file('avatar');
        $this->service->store($data, $file);

        return dd('переделай дебил блин');
    }
}
