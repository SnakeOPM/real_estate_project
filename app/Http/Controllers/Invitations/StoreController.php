<?php

namespace App\Http\Controllers\Invitations;

use App\Http\Controllers\Controller;
use App\Http\Requests\Invintation\AcceptRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends BaseController
{
    public function __invoke(AcceptRequest $request)
    {
        $data = $request->validated();
        $this->service->addUserToParty($data);
        return view('party.show', compact($data['party_id']));
    }
}
