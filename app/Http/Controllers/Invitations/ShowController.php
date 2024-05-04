<?php

namespace App\Http\Controllers\Invitations;

use App\Models\Party;
use Illuminate\Support\Facades\Auth;

class ShowController extends BaseController
{
    public function __invoke(Party $party)
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect('party.index');
        }
        return view('Invitation.show', compact('party', 'user'));
    }
}
