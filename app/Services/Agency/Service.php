<?php

namespace App\Services\Agency;

use App\Models\Agency;
use App\Models\images;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function update_agency($data, $agency)
    {
        $agency->update($data);
    }

    public function store($data, $file = null)
    {
        if ($file != null) {
            Storage::disk('s3')->put('/images', $file);
            Images::firstOrCreate($file->getClientOriginalName());
            $data['image_id'] = Images::where('name', 'like', $file->getClientOriginalName())->first();
        }
        unset($data['images']);
        Agency::create($data);
    }

    public function destroy_agency($id)
    {
        Agency::destroy($id);
    }

}
