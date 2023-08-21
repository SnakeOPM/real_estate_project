<?php

namespace App\Services\Flat;

use App\Models\Flat;
use App\Models\FlatImages;
use Illuminate\Support\Facades\Storage;

class Service
{
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
