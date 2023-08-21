<?php

namespace App\Http\Requests\Flat;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'address' => 'string|max:255',
            'rooms_count' => 'integer',
            'square' => 'integer',
            'pets' => '',
            'type_id' => 'required',
            'agency_id' => '',
            'owner_id' => '',
            'is_occupied' => '',
            'images' => 'image',

        ];
    }
}
