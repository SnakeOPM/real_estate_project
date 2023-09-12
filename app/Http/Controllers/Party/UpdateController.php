<?php

namespace App\Http\Controllers\Party;

use App\Http\Controllers\Controller;
use App\Http\Requests\Party\CreateRequest;
use App\Models\Party;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(CreateRequest $request, Party $party)
    {
        $data = $request->validated();
        $this->service->validateToken($party->id);
        $this->service->update_party($data, $party);
        return redirect()->route('post.show');

    }
}
