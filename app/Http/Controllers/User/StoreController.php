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

class StoreController extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        $data = $request->validated();
        $file = $request->file('avatar');
        Storage::disk('s3')->put('/avatars', $file);
        UserAvatar::firstOrCreate($file->getClientOriginalName());
        unset($data['avatar']);
        $data['avatar'] = $file->getClientOriginalName();
        User::create($data);
    }
}
