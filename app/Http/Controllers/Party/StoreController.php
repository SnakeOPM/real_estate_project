<?php

namespace App\Http\Controllers\Party;

use App\Http\Requests\Party\CreateRequest;

class StoreController extends BaseController
{
    public function __invoke(CreateRequest $request)
    {
        $data = $request->validated();
        $data['invite_token'] = $this->service->generateToken();
        $this->service->store($data);

        return redirect()->route('party.index');
    }
}
