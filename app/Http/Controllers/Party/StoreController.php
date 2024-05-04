<?php

namespace App\Http\Controllers\Party;

use App\Http\Requests\Party\CreateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class StoreController extends BaseController
{
    public function __invoke(CreateRequest $request)
    {
        $data = $request->validated();
        $data['invite_token'] = $this->service->generateToken();
        $this->service->store($data);
        $this->userService->attachCurrentUserToParty(Auth::id(), DB::table('parties')->where('invite_token', $data['invite_token'])->first()->id);

        return redirect()->route('party.index');
    }
}
