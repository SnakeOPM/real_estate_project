<?php

namespace App\Http\Controllers\Party;

use App\Http\Controllers\Controller;
use App\Models\Party;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Party $party)
    {
        $users = $this->service->edit($party->id);
        return view('party.edit', compact('party', 'users'));
    }
}
