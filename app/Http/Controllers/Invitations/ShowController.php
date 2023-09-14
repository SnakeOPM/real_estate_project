<?php

namespace App\Http\Controllers\Invitations;

use App\Http\Controllers\Controller;
use App\Models\Party;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowController extends BaseController
{
    public function __invoke($token)
    {
        $party = Party::where('invite_token', $token)->first();
        $user = Auth::user();
        if ($user == null){
            return redirect('party.index');
        }
        return view('Invitation.show', compact('party', 'user'));
    }
}
