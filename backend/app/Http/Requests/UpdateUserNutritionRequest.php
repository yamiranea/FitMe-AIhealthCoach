<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserNutritionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_user' => 'sometimes|required|integer',
            'id_nutritional_plan' => 'sometimes|required|integer',
            'id_sport_activity' => 'sometimes|required|integer',
            'id_nutritional_tag' => 'sometimes|required|integer',
            'created_date' => 'sometimes|required|date',
            'updated_date' => 'sometimes|required|date',
        ];
    }
}