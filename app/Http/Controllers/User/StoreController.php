<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateRequest;
use App\Models\Agency;
use App\Models\Party;
use App\Models\User;
use App\Models\User_type;
use App\Models\UserAvatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
