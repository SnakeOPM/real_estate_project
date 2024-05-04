<?php

namespace App\Http\Controllers\Invitations;

use App\Http\Controllers\Controller;
use App\Http\Requests\Invintation\AcceptRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class StoreController extends BaseController
{
    public function __invoke(AcceptRequest $request)
    {
        $data = $request->validate([
            'invite_token' => 'string'
        ]);
        $user = Auth::id();
        $party = $this->service->getPartyData($data['invite_token']);
        $this->service->addUserToParty(['id' => $user, 'party_id' => $party->id]);
        return view('party.show', $data);
    }
}
