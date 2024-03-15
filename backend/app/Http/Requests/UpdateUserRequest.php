<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|required|max:255',
            'age' => 'sometimes|required|integer',
            'id_gender' => 'sometimes|required|integer',
            'current_weight' => 'sometimes|required|numeric',
            'height' => 'sometimes|required|numeric',
        ];
    }
}