<?php

namespace App\Http\Requests\User;

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
            'last_name' => 'required|max:255|string',
            'middle_name' => 'string|max:255',
            'avatar' => 'image',
            'description' => 'string',
            'email' => 'required|email',
            'phone' => 'required|max:11',
            'password' => 'password',
            'user_type_id' => 'integer',
            'party_id' => 'integer',

        ];
    }
}
