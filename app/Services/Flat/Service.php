<?php

namespace App\Services\Flat;

use App\Models\Flat;
use App\Models\FlatImages;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Ramsey\Uuid\Uuid;

class Service
{
    public function get_index()
    {
        return Flat::with('users')->paginate(10);
    }


    public function edit($Flat_id)
    {
        return User::where('Flat_id', $Flat_id)->get();
    }

    public function destroy_Flat($id)
    {
        Flat::destroy($id);
    }

    public function generateToken()
    {
        $link = Uuid::uuid4();
        return $link->toString();
    }
    public function store($data, $file = null)
    {
        if ($file != null) {
            Storage::disk('s3')->put('/images', $file);
            FlatImages::firstOrCreate($file->getClientOriginalName());
            $data['image_id'] = FlatImages::where('name', 'like', $file->getClientOriginalName())->first();
        }
        unset($data['images']);
        Flat::create($data);
    }

    public function update(Flat $flat, $data, $file = null)
    {
        if ($file != null) {
            Storage::disk('s3')->put('/images', $file);
            FlatImages::firstOrCreate($file->getClientOriginalName());
            $data['avatar_id'] = FlatImages::where('name', 'like', $file->getClientOriginalName())->first();
        }
        unset($data['images']);
        $flat->update($data);
    }
}
