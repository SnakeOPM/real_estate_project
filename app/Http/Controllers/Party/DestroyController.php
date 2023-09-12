<?php

namespace App\Http\Controllers\Party;

use App\Http\Controllers\Controller;
use App\Models\Party;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Party $party)
    {
        $this->service->destroy_party($party->id);
        return redirect()->route('party.index');
    }
}
